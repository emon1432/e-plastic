<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPurchase extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class , 'user_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(ProductCategory::class , 'product_category_id');
    }
}
