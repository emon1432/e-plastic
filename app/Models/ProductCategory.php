<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    //join with sell request table
    public function categoryInfo()
    {
        //where product_category_id is equal to id
        return $this->belongsTo(SellRequest::class, 'product_category_id', 'id');
    }
    use HasFactory;
}