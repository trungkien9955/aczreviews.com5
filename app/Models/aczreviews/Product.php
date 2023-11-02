<?php

namespace App\Models\aczreviews;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function department(){
        return $this->belongsTo('App\Models\aczreviews\Department', 'department_id');
    }
    public function section(){
        return $this->belongsTo('App\Models\aczreviews\Section', 'section_id');
    }
    public function category(){
        return $this->belongsTo('App\Models\aczreviews\Category', 'category_id');
    }
    public function brand(){
        return $this->belongsTo('App\Models\aczreviews\Brand', 'brand_id');
    }
    public function images(){
        return $this->hasMany('App\Models\aczreviews\ProductImage', 'product_id');
    }
    public function specs(){
        return $this->hasMany('App\Models\aczreviews\ProductSpec', 'product_id');
    }
    public function features(){
        return $this->hasMany('App\Models\aczreviews\ProductFeature', 'product_id');
    }
    public function offers(){
        return $this->hasMany('App\Models\aczreviews\Offer', 'product_id');
    }
    public static function get_guest_rating($id){
        $product_rating_count =GuestRatingInfo::where('product_id', $id)->count();
        if($product_rating_count==0){
            $is_rated_by_guest = "no";
            return array('is_rated_by_guest'=> $is_rated_by_guest);
        }else{
            $is_rated_by_guest = "yes";
            $guest_rating_info = GuestRatingInfo::where('product_id', $id)->get()->toArray();
            $product_total_score = array_sum(GuestRatingInfo::where('product_id', $id)->pluck('rating')->toArray());
            $product_rating_float = $product_total_score/$product_rating_count;
            $product_rating = round($product_rating_float, 1);
            $product_rating_for_star = round($product_rating_float);
            return array('is_rated_by_guest'=> $is_rated_by_guest,'guest_rating_info'=> $guest_rating_info,'product_rating_count'=> $product_rating_count, 'product_rating'=> $product_rating, 'product_rating_for_star'=>$product_rating_for_star);
        }
    }
    public static function get_rating($id){
        $product_rating_count =GuestRatingInfo::where('product_id', $id)->count();
        if($product_rating_count==0){
            $is_rated = "no";
            return array('is_rated'=> $is_rated, 'product_rating_count'=> $product_rating_count,);
        }else{
            $is_rated = "yes";
            $rating_info = GuestRatingInfo::where('product_id', $id)->get()->toArray();
            $product_total_score = array_sum(GuestRatingInfo::where('product_id', $id)->pluck('rating')->toArray());
            $product_rating_float = $product_total_score/$product_rating_count;
            $product_rating = round($product_rating_float, 1);
            $product_rating_for_star = round($product_rating_float);
            return array('is_rated'=> $is_rated,'rating_info'=> $rating_info,'product_rating_count'=> $product_rating_count, 'product_rating'=> $product_rating, 'product_rating_for_star'=>$product_rating_for_star);
        }
    }
    public static function get_sales($id){
        $total_quantity_array = Sale::where('product_id', $id)->pluck('quantity')->toArray();
        $last_month_quantity_array = Sale::where('product_id', $id)->whereBetween('created_at', ['2023-09-01', '2023-09-30'])->pluck('quantity')->toArray();
        $total_sales = array_sum($total_quantity_array);
        $last_month_sales = array_sum($last_month_quantity_array);
        return array('total_sales'=> $total_sales, 'last_month_sales'=>$last_month_sales);
    }
    public static function get_description($id){
        $count = ProductDescription::where('product_id', $id)->count();
        if($count > 0) {
            $description = ProductDescription::where('product_id', $id)->first()->toArray();
        }else{
            $description = '';
        }
        return array('count'=> $count, 'description'=> $description);
    }
}
