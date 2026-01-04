<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Support\Collection;

interface CategoryService
{
    public function getCategories(): Collection;

    public function addCategory(array $data): Category;

    public function updateCategory(Category $category, array $data): bool;

    public function removeCategory(Category $category): bool;
}
