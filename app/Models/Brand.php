<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    /** @use HasFactory<\Database\Factories\BrandFactory> */
    use HasFactory;

    protected $table = 'brands';
    protected $guarded = ['id'];
    public $fillable = ['name', 'slug', 'image'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
