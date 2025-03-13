<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Category extends Model
{
    use HasFactory; // ✅ Bắt buộc để sử dụng factory()

    protected $fillable = [
        'name',
        'desc'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
