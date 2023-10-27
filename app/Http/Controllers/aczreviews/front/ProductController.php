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
    public function listing(Request $request){
        if($request->ajax()){
            $data = $request->all();
            $url = $data['url'];
            $category = Category::where(['url' => $url, 'status' => 1])->first()->toArray();
            $products = Product::where(['category_id'=> $category['id'], 'status'=>1]);
            // return $products;
            if(isset($data['sorter']) && !empty($data['sorter'])) {
                if ($data['sorter'] == "lowest"){
                    $products->orderBy('price', 'Asc' );
                }
                else if ($data['sorter'] == "highest"){
                    $products->orderBy('price', 'Desc');
                }
            }
            if(isset($data['brand']) && !empty($data['brand'])) {
                $product_id_array = Product::select('id')->whereIn('brand_id', $data['brand'])->pluck('id')->toArray();
                $products->whereIn('id',$product_id_array );
            }
            if(isset($data['color']) && !empty($data['color'])) {
                $products->where('color',$data['color']);
            }
            if(isset($data['size']) && !empty($data['size'])) {
                $products->where('size',$data['size']);
            }
            if(isset($data['price']) && !empty($data['price'])) {
                foreach($data['price'] as $key => $price){
                    $priceArr = explode("-",  $price);
                    $productIds[]  = Product::select('id')->whereBetween('price', [$priceArr[0], $priceArr[1]])->pluck('id')->toArray();
                }
                $productIds = call_user_func_array('array_merge', $productIds);
                $products->whereIn('id', $productIds);
            }
            $products = $products->get()->toArray();
            return view('aczreviews.front.products.ajax_products_listing', compact('products'));
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
    public function detail(Request $request, $id){
        $product_details = Product::with('department','section','category', 'brand','images')->find($id)->toArray();
        $category_details = Category::where('id', $product_details['category_id'])->first()->toArray();
        $similar_products = Product::where('category_id', $product_details['category_id'])->where('id', '!=', $id)->limit(4)->inRandomOrder()->get()->toArray();
        if(empty(Session::get('session_id'))){
            $session_id = md5(uniqid(rand(), true)); 
       }else{
           $session_id = Session::get('session_id');
       }
       Session::put('session_id', $session_id);
       //insert product in talbe if not already exists
       $viewed_products_count = DB::table('viewed_products')->where(['product_id'=> $id, 'session_id'=> $session_id])->count();
       if($viewed_products_count ==0){
           DB::table('viewed_products')->insert(['product_id'=> $id, 'session_id'=> $session_id]);
       }
       $viewed_product_id_collection = DB::table('viewed_products')->select('product_id')->where('product_id', '!=', $id)->where('session_id', $session_id)->inRandomOrder()->get()->take(4)->pluck('product_id');
       $viewed_products = Product::whereIn('id', $viewed_product_id_collection)->get()->toArray();
        return view('aczreviews.front.products.detail', compact('product_details', 'category_details', 'similar_products', 'viewed_products'));
    }
}
