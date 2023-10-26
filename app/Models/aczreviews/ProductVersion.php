<?php

namespace App\Models\aczreviews;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVersion extends Model
{
    use HasFactory;
    public static function get_version_with_lowest_price($product_id){
        $version_prices = ProductVersion::select('price')->where('product_id', $product_id)->pluck('price')->toArray();
         $lowest_price = min($version_prices);
         return $version_with_lowest_price =  ProductVersion::where('product_id', $product_id)->where('price', $lowest_price)->first()->toArray();
    }
}
