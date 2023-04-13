<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //join with product category
    public function categoryInfo()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id', 'id');
    }

    use HasFactory;
}