<?php

namespace App\Models\aczreviews;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductFilter extends Model
{
    use HasFactory;
    public static function get_sizes($url){
        $category = Category::where('url', $url)->first()->toArray();
        $product_id_collection = Product::select('id')->where(['category_id'=> $category['id'], 'status' => 1])->pluck('id')->toArray();
        $sizes = ProductVersion::select('size')->whereIn('product_id', $product_id_collection)->groupBy('size')->pluck('size')->toArray();
        return $sizes;
    }
    public static function get_colors($url){
        $category = Category::where('url', $url)->first()->toArray();
        $product_id_collection = Product::select('id')->where(['category_id'=> $category['id'], 'status' => 1])->pluck('id')->toArray();
        $version_colors = ProductVersion::select('color')->whereIn('product_id', $product_id_collection)->whereNotNull('color')->where('color', '<>', '')->groupBy('color')->pluck('color')->toArray();
        $product_colors = Product::select('color')->whereIn('id', $product_id_collection)->whereNotNull('color')->where('color', '<>', '')->groupBy('color')->pluck('color')->toArray();
        $colors = array_unique(array_merge($version_colors,$product_colors), SORT_STRING);
        return $colors;
    }
    public static function get_brands($url){
        $category = Category::where('url', $url)->first()->toArray();
        $product_id_collection = Product::select('id')->where(['category_id'=> $category['id'], 'status' => 1])->pluck('id')->toArray();
        $brand_id_collection = Product::select('brand_id')->whereIn('id',$product_id_collection)->pluck('brand_id')->toArray();
        $brands = Brand::whereIn('id', $brand_id_collection)->get()->toArray();
        // dd($brands);
        return $brands;
    }
}
