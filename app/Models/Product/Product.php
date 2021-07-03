<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Product\ProductParent;
use App\Models\Product\ProductCategory;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['_token'];

    public function productParent()
    {
        return $this->hasOne(ProductParent::class, 'id','product_parent_id');
    }

    public function productCategory()
    {
        return $this->hasOne(ProductCategory::class, 'id','product_category_id');
    }
    public function productSubCategory()
    {
        return $this->hasOne(ProductSubCategory::class, 'id','product_sub_category_id');
    }
    public function productBrand()
    {
        return $this->hasOne(ProductBrand::class, 'id','product_brand_id');
    }
}
