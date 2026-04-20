#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Laravel Full Markdown Doc Generator
-----------------------------------
Mendokumentasikan SELURUH ISI KODE backend Laravel modular modern.

Struktur target:
- app/Actions
- app/Enums
- app/Exceptions
- app/Helpers
- app/Http/Controllers
- app/Http/Requests
- app/Http/Resources
- app/Models
- app/Policies
- app/Providers
- app/Services
- app/Support
- app/Traits
- database/seeders

Entry files penting:
- routes/api.php
- routes/api_v1.php
- bootstrap/app.php
- app/Providers/AppServiceProvider.php

Fitur:
- Otomatis deteksi semua file .php pada folder target
- Embed isi file lengkap ke Markdown (code fence), bisa collapsible
- Tambahkan ringkasan ringan: path, SHA, ukuran, namespace, class/trait/interface, public method
- Tanpa dependency eksternal

Contoh:
    python laravel_md_full_docgen.py --root . --out docs/Backend_FullDocs.md
    python laravel_md_full_docgen.py --root . --out docs/Backend_FullDocs.md --no-collapse
"""

from pathlib import Path
from typing import List, Dict, Optional
import re
import hashlib
from datetime import datetime
import argparse
import sys


# ---------- Utilities ----------

def sha1_of_file(path: Path) -> str:
    h = hashlib.sha1()
    with path.open("rb") as f:
        for chunk in iter(lambda: f.read(8192), b""):
            h.update(chunk)
    return h.hexdigest()[:12]


def read_text(path: Path) -> str:
    try:
        return path.read_text(encoding="utf-8", errors="replace")
    except Exception:
        return path.read_text(errors="replace")


def php_namespace(text: str) -> Optional[str]:
    m = re.search(r"^\s*namespace\s+([^;]+);", text, re.MULTILINE)
    return m.group(1).strip() if m else None


def find_docblock_before(text: str, start_idx: int) -> Optional[str]:
    upto = text[:start_idx]
    m = re.search(r"/\*\*([\s\S]*?)\*/\s*$", upto, re.MULTILINE)
    if m:
        raw = m.group(1)
        lines = []
        for line in raw.splitlines():
            line = re.sub(r"^\s*\*\s?", "", line.strip())
            lines.append(line)
        cleaned = "\n".join([ln for ln in lines if ln.strip()])
        first_line = cleaned.splitlines()[0].strip() if cleaned else ""
        return first_line or cleaned
    return None


def php_class_info(text: str) -> List[Dict]:
    items = []
    pattern = re.compile(
        r"^(abstract\s+)?(class|trait|interface)\s+([A-Za-z_]\w*)\s*"
        r"(?:extends\s+([A-Za-z_\\][A-Za-z0-9_\\]*))?\s*"
        r"(?:implements\s+([A-Za-z_\\][^{]*))?\s*\{",
        re.MULTILINE
    )

    for m in pattern.finditer(text):
        kind = m.group(2)
        name = m.group(3)
        extends = (m.group(4) or "").strip()
        implements = (m.group(5) or "").strip()
        start = m.end()

        depth = 1
        i = start
        while i < len(text) and depth > 0:
            if text[i] == "{":
                depth += 1
            elif text[i] == "}":
                depth -= 1
            i += 1

        block = text[start:i - 1]
        methods = []

        method_pattern = re.compile(
            r"(public|protected|private)\s+(static\s+)?function\s+([A-Za-z_]\w*)\s*"
            r"\(([^)]*)\)\s*(:\s*([?A-Za-z_\\|\[\]\s]+))?",
            re.MULTILINE
        )

        for fm in method_pattern.finditer(block):
            visibility = fm.group(1)
            method_name = fm.group(3)
            params = " ".join(fm.group(4).split())
            ret = (fm.group(6) or "").strip()
            doc = find_docblock_before(block, fm.start())

            methods.append({
                "visibility": visibility,
                "name": method_name,
                "params": params,
                "return": ret,
                "doc": doc or "",
            })

        doc = find_docblock_before(text, m.start()) or ""

        items.append({
            "kind": kind,
            "name": name,
            "extends": extends,
            "implements": " ".join(implements.split()) if implements else "",
            "doc": doc,
            "methods": methods,
        })

    return items


def parse_routes(text: str) -> List[Dict]:
    route_re = re.compile(
        r"Route::(get|post|put|patch|delete|options|apiResource|apiResources|resource)\s*"
        r"\(\s*([\'\"])(.*?)\2\s*,?\s*(.*?)\)\s*",
        re.IGNORECASE
    )

    tokens = re.split(r";\s*\n", text)
    current_prefixes: List[str] = []
    routes = []

    for chunk in tokens:
        chunk_stripped = chunk.strip()

        for pm in re.finditer(r"->prefix\(\s*[\'\"]([^\'\"]+)[\'\"]\s*\)", chunk_stripped):
            current_prefixes.append(pm.group(1))

        for m in route_re.finditer(chunk_stripped):
            method = m.group(1).upper()
            path = m.group(3)
            handler_raw = m.group(4).strip()

            controller = ""
            action = ""

            if "[" in handler_raw and "::class" in handler_raw:
                m2 = re.search(r"\[([A-Za-z_\\][A-Za-z0-9_\\]*)::class\s*,\s*[\'\"]([^\'\"]+)[\'\"]\]", handler_raw)
                if m2:
                    controller = m2.group(1)
                    action = m2.group(2)
            elif "::class" in handler_raw:
                m2 = re.search(r"([A-Za-z_\\][A-Za-z0-9_\\]*)::class", handler_raw)
                if m2:
                    controller = m2.group(1)
            elif "@" in handler_raw:
                parts = handler_raw.strip("'\"").split("@", 1)
                if len(parts) == 2:
                    controller, action = parts[0], parts[1]

            prefix = "/".join(p.strip("/") for p in current_prefixes if p)
            full_path = ("/" + prefix + "/" + path.strip("/")).replace("//", "/") if prefix else path

            routes.append({
                "method": method,
                "path": full_path,
                "controller": controller,
                "action": action,
            })

        if chunk_stripped.endswith("})") or chunk_stripped.endswith("});"):
            current_prefixes = []

    return routes


def human_size(n: int) -> str:
    for unit in ["B", "KB", "MB", "GB"]:
        if n < 1024.0:
            return f"{n:.0f} {unit}"
        n /= 1024.0
    return f"{n:.0f} TB"


# ---------- Scanners ----------

def collect_php_files(root: Path, rel: str) -> List[Path]:
    base = root / rel
    if not base.exists():
        return []
    return sorted([
        p for p in base.rglob("*.php")
        if "vendor" not in p.parts
    ], key=lambda p: str(p).lower())


def summarize_file(path: Path) -> Dict:
    text = read_text(path)
    ns = php_namespace(text) or ""
    classes = php_class_info(text)
    sha = sha1_of_file(path)
    size = path.stat().st_size if path.exists() else 0

    return {
        "path": str(path),
        "namespace": ns,
        "classes": classes,
        "sha": sha,
        "size": size,
        "text": text,
    }


# ---------- Markdown ----------

def anchorize(title: str) -> str:
    a = title.lower().strip()
    a = re.sub(r"[^a-z0-9\s/_-]", "", a)
    a = a.replace("/", "-")
    a = re.sub(r"\s+", "-", a)
    a = re.sub(r"-+", "-", a)
    return a.strip("-")


def make_markdown(
    sections: Dict[str, List[Dict]],
    entries: List[Dict],
    title: str,
    root: Path,
    collapse: bool,
) -> str:
    now = datetime.now().strftime("%Y-%m-%d %H:%M:%S")
    md: List[str] = []

    md.append(f"# {title}\n")
    md.append(f"_Dihasilkan otomatis: {now}_  \n**Root:** `{root}`\n")

    md.append("## Daftar Isi")
    for label, files in sections.items():
        if not files:
            continue

        anc = anchorize(label)
        md.append(f"- [{label}](#{anc})")

        for meta in files:
            rel = Path(meta["path"])
            try:
                rel = rel.relative_to(root)
            except Exception:
                pass
            md.append(f"  - [{rel}](#file-{anchorize(str(rel))})")

    if entries:
        md.append("- [Entry Files](#entry-files)")
        for meta in entries:
            rel = Path(meta["path"])
            try:
                rel = rel.relative_to(root)
            except Exception:
                pass
            md.append(f"  - [{rel}](#file-{anchorize(str(rel))})")

    for label, files in sections.items():
        if not files:
            continue

        md.append(f"\n## {label}\n")

        for meta in files:
            p = Path(meta["path"])
            try:
                rel = p.relative_to(root)
            except Exception:
                rel = p

            file_anchor = anchorize(str(rel))
            md.append(f"<a id=\"file-{file_anchor}\"></a>")
            md.append(f"### {rel}")
            md.append(
                f"- SHA: `{meta['sha']}`  \n"
                f"- Ukuran: {human_size(meta['size'])}  \n"
                f"- Namespace: `{meta['namespace']}`"
            )

            if meta["classes"]:
                for c in meta["classes"]:
                    extends = f" extends `{c['extends']}`" if c.get("extends") else ""
                    implements = f" implements `{c['implements']}`" if c.get("implements") else ""
                    md.append(f"\n**{c['kind'].title()} `{c['name']}`{extends}{implements}**")

                    if c.get("doc"):
                        md.append(f"\n> {c['doc']}")

                    pub_methods = [m for m in c["methods"] if m["visibility"] == "public"]
                    if pub_methods:
                        md.append("\nMetode Publik:")
                        for m in pub_methods:
                            sig = f"- **{m['name']}**({m['params']})"
                            if m.get("return"):
                                sig += f" : *{m['return']}*"
                            if m.get("doc"):
                                sig += f" — {m['doc']}"
                            md.append(sig)

            if rel.as_posix() in ("routes/api.php", "routes/api_v1.php"):
                try:
                    parsed_routes = parse_routes(meta["text"])
                    if parsed_routes:
                        md.append("\n**Ringkasan Routes (deteksi heuristik):**\n")
                        md.append("| Method | Path | Controller | Action |")
                        md.append("|---|---|---|---|")
                        for r in parsed_routes:
                            md.append(
                                f"| {r['method']} | `{r['path']}` | `{r['controller']}` | `{r['action']}` |"
                            )
                except Exception:
                    pass

            code_block = f"```php\n{meta['text']}\n```\n"
            if collapse:
                md.append(
                    "<details><summary><strong>Lihat Kode Lengkap</strong></summary>\n\n"
                    + code_block
                    + "</details>\n"
                )
            else:
                md.append(code_block)

    if entries:
        md.append("\n## Entry Files\n")
        for meta in entries:
            p = Path(meta["path"])
            try:
                rel = p.relative_to(root)
            except Exception:
                rel = p

            file_anchor = anchorize(str(rel))
            md.append(f"<a id=\"file-{file_anchor}\"></a>")
            md.append(f"### {rel}")
            md.append(
                f"- SHA: `{meta['sha']}`  \n"
                f"- Ukuran: {human_size(meta['size'])}  \n"
                f"- Namespace: `{meta['namespace']}`"
            )

            if meta["classes"]:
                for c in meta["classes"]:
                    extends = f" extends `{c['extends']}`" if c.get("extends") else ""
                    implements = f" implements `{c['implements']}`" if c.get("implements") else ""
                    md.append(f"\n**{c['kind'].title()} `{c['name']}`{extends}{implements}**")

            if rel.as_posix() in ("routes/api.php", "routes/api_v1.php"):
                try:
                    parsed_routes = parse_routes(meta["text"])
                    if parsed_routes:
                        md.append("\n**Ringkasan Routes (deteksi heuristik):**\n")
                        md.append("| Method | Path | Controller | Action |")
                        md.append("|---|---|---|---|")
                        for r in parsed_routes:
                            md.append(
                                f"| {r['method']} | `{r['path']}` | `{r['controller']}` | `{r['action']}` |"
                            )
                except Exception:
                    pass

            code_block = f"```php\n{meta['text']}\n```\n"
            if collapse:
                md.append(
                    "<details><summary><strong>Lihat Kode Lengkap</strong></summary>\n\n"
                    + code_block
                    + "</details>\n"
                )
            else:
                md.append(code_block)

    return "\n".join(md)


# ---------- Main ----------

def run() -> int:
    ap = argparse.ArgumentParser(
        description="Generate FULL Markdown docs for a modular Laravel backend."
    )
    ap.add_argument("--root", required=True, help="Path ke root backend (berisi app/, routes/, bootstrap/, dll.)")
    ap.add_argument("--out", default="docs/Backend_FullDocs.md", help="Output file Markdown")
    ap.add_argument("--title", default="Dokumentasi Backend (FULL Source)", help="Judul dokumen")
    ap.add_argument("--no-collapse", action="store_true", help="Tampilkan kode langsung tanpa <details>")
    args = ap.parse_args()

    root = Path(args.root).resolve()
    if not root.exists():
        print(f"[ERR] root tidak ditemukan: {root}", file=sys.stderr)
        return 2

    targets = {
        "Actions (app/Actions)": "app/Actions",
        "Enums (app/Enums)": "app/Enums",
        "Exceptions (app/Exceptions)": "app/Exceptions",
        "Helpers (app/Helpers)": "app/Helpers",
        "Controllers (app/Http/Controllers)": "app/Http/Controllers",
        "Form Requests (app/Http/Requests)": "app/Http/Requests",
        "API Resources (app/Http/Resources)": "app/Http/Resources",
        "Models (app/Models)": "app/Models",
        "Policies (app/Policies)": "app/Policies",
        "Providers (app/Providers)": "app/Providers",
        "Services (app/Services)": "app/Services",
        "Support (app/Support)": "app/Support",
        "Traits (app/Traits)": "app/Traits",
        "Database Seeders (database/seeders)": "database/seeders",
    }

    sections: Dict[str, List[Dict]] = {}
    for label, rel in targets.items():
        files = collect_php_files(root, rel)
        sections[label] = [summarize_file(p) for p in files]

    entry_files = [
        "routes/api.php",
        "routes/api_v1.php",
        "bootstrap/app.php",
        "app/Providers/AppServiceProvider.php",
    ]

    entries: List[Dict] = []
    for ef in entry_files:
        p = root / ef
        if p.exists() and p.is_file():
            entries.append(summarize_file(p))

    collapse = not args.no_collapse
    md = make_markdown(sections, entries, args.title, root, collapse)

    out_path = Path(args.out)
    if not out_path.is_absolute():
        out_path = (Path.cwd() / out_path).resolve()

    out_path.parent.mkdir(parents=True, exist_ok=True)
    out_path.write_text(md, encoding="utf-8")

    total_files = sum(len(v) for v in sections.values()) + len(entries)
    print(f"[OK] Markdown generated -> {out_path}")
    print(f"[INFO] Total files documented: {total_files}")
    print(f"[INFO] Total lines output: {len(md.splitlines())}")

    return 0


if __name__ == "__main__":
    raise SystemExit(run())
