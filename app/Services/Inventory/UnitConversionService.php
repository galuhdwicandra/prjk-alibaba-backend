<?php

namespace App\Services\Inventory;

use App\Models\UnitConversion;

class UnitConversionService
{
    public function create(array $payload): UnitConversion
    {
        return UnitConversion::create($payload);
    }

    public function update(UnitConversion $unitConversion, array $payload): UnitConversion
    {
        $unitConversion->update($payload);

        return $unitConversion->fresh();
    }
}
