<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    //
    use HasFactory; // ✅ Bắt buộc để sử dụng factory()

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function orderItems(){
        return $this->hasMany(OrderItem::class);
    }
}
