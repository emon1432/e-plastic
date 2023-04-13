<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellRequest extends Model
{
    //join with category table
    public function categoryInfo()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id', 'id');
    }
    //join with seller table
    public function sellerInfo()
    {
        return $this->belongsTo(Seller::class, 'seller_id', 'user_id');
    }
    use HasFactory;
}
