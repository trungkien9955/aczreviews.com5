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
    public static function get_guest_rating($id){
        $product_rating_count =GuestRatingInfo::where('product_id', $id)->count();
        if($product_rating_count==0){
            $is_rated = "no";
            return $is_rated;
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
    public static function get_rating($id){
        $product_rating_count =GuestRatingInfo::where('product_id', $id)->count();
        if($product_rating_count==0){
            $is_rated = "no";
            return array('is_rated'=> $is_rated);
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
}
