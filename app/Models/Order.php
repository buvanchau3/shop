<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    //
    use HasFactory; // ✅ Bắt buộc để sử dụng factory()


    public function orderItems(){
        return $this->hasMany(OrderItem::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
