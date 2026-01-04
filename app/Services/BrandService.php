<?php

namespace App\Services;

use App\Models\Brand;
use Illuminate\Support\Collection;

interface BrandService
{
    public function getBrands(): Collection;

    public function addBrand(array $data): Brand;

    public function updateBrand(Brand $brand, array $data): bool;

    public function removeBrand(Brand $brand): bool;
}
