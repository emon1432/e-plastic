<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Products::class);
    }

    public function category()
    {
        return $this->belongsTo(ProductCategory::class , 'product_category_id');
    }

    public function employee()
    {
        return $this->belongsTo(User::class, 'assign_employee_id');
    }
}
