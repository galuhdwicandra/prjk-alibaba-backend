<?php

namespace App\Services\Purchasing;

use App\Models\Supplier;

class SupplierService
{
    public function create(array $payload): Supplier
    {
        return Supplier::create($payload);
    }

    public function update(Supplier $supplier, array $payload): Supplier
    {
        $supplier->update($payload);

        return $supplier->fresh();
    }
}
