<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class OrderItem extends Model
{
    use HasFactory; // ✅ Bắt buộc để sử dụng factory()

    public function products(){
        return $this->belongsTo(Product::class);
    }
    public function Orders(){
        return $this->belongsTo(Orders::class);
    }
}
