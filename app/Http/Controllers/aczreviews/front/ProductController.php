<?php

namespace App\Http\Controllers\aczreviews\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Route;
use DB;
use Validator;
use Session;
use Auth;
use Carbon\Carbon;
use App\Models\aczreviews\GuestRatingInfo;
use App\Models\aczreviews\Category;
use App\Models\aczreviews\Product;
use App\Models\aczreviews\Section;
use Illuminate\Support\Facades\View;
class ProductController extends Controller
{
    public function detail(){
        // $str = 'Dù giành giải Á Khôi 2 Hoa khôi Áo dài Việt Nam 2022 nhưng Hồ Yến Nhi lựa chọn cuộc sống khá kín tiếng.
        // ';
        // $str = trim(mb_strtolower($str));
        // $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
        // $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
        // $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
        // $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
        // $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
        // $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
        // $str = preg_replace('/(đ)/', 'd', $str);
        // $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
        // $str = preg_replace('/([\s]+)/', '-', $str);
        return view('aczreviews.front.products.detail');
    }
    public function listing(Request $request){
        if(1==0){
            // $data = $request->all();
            // $url = $data['url'];
            // $section = Section::where(['url' => $url, 'status' => 1])->first()->toArray();
            // //  $products = Product::get()->toArray();
            // $products = Product::where(['section_id'=> $section['id'], 'status'=>1]);
            // // return $products;
            // if(isset($data['sorter']) && !empty($data['sorter'])) {
            //     if ($data['sorter'] == "lowest"){
            //         $products->orderBy('product_price', 'Asc' );
            //     }
            //     else if ($data['sorter'] == "highest"){
            //         $products->orderBy('product_price', 'Desc');
            //     }
            // }
            // if(isset($data['brand']) && !empty($data['brand'])) {
            //     $product_id_array = Product::select('id')->whereIn('brand_id', $data['brand'])->pluck('id')->toArray();
            //     $products->whereIn('id',$product_id_array );
            // }
            // if(isset($data['color']) && !empty($data['color'])) {
            //     $products->whereIn('product_color',$data['color']);
            // }
            // if(isset($data['size']) && !empty($data['size'])) {
            //     $product_id_array = ProductAttribute::select('product_id')->whereIn('size', $data['size'])->pluck('product_id')->toArray();
            //     $products->whereIn('id',  $product_id_array);
            // }
            // if(isset($data['price']) && !empty($data['price'])) {
            //     foreach($data['price'] as $key => $price){
            //         $priceArr = explode("-",  $price);
            //         $productIds[]  = Product::select('id')->whereBetween('product_price', [$priceArr[0], $priceArr[1]])->pluck('id')->toArray();
            //     }
            //     $productIds = call_user_func_array('array_merge', $productIds);
            //     $products->whereIn('id', $productIds);
            // }
            // $filters = ProductFilter::filters();
            // foreach($filters as $key => $filter) {
            //     //if filter is selected
            //     if(isset($filter['filter_column']) && isset($data[$filter['filter_column']]) && !empty($filter['filter_column']) && !empty($data[$filter['filter_column']])) {
            //         $products->whereIn($filter['filter_column'], $data[$filter['filter_column']]);
            //     }
            // }
            // $products = $products->get()->toArray();
            // return view('FlowerShop.front.products.ajax_products_listing', compact('products'));
        }
        else {
                $url = Route::getFacadeRoot()->current()->uri(); 
                $category = Category::select('id', 'category_name', 'url')->where('url', $url)->first()->toArray();
                $products = Product::where('category_id', $category['id']);
                
                if(isset($_GET['sorter']) && !empty($_GET['sorter'])){
                    if($_GET['sorter'] == "lowest") {
                        $products = $products->orderBy('price', 'Asc');
                    }
                    else if ($_GET['sorter'] == "highest") {
                        $products = $products->orderBy('price', 'Desc');
                    }
                }
                $products = $products->get()->toArray();
                $count = count($products);
                return view('aczreviews.front.products.listing', compact('products', 'category', 'count', 'url'));
        }
    }
}
