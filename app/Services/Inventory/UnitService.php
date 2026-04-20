<?php

namespace App\Services\Inventory;

use App\Models\Unit;

class UnitService
{
    public function create(array $payload): Unit
    {
        return Unit::create($payload);
    }

    public function update(Unit $unit, array $payload): Unit
    {
        $unit->update($payload);

        return $unit->fresh();
    }
}
