<?php

namespace App\Http\Controllers\aczreviews\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\aczreviews\Section;
use App\Models\aczreviews\Department;
use App\Models\aczreviews\Category;
use App\Models\aczreviews\Product;
use App\Models\aczreviews\ProductImage;
use Validator;
use Image;
class ProductController extends Controller
{
    public function products(){
        $products = Product::with('department', 'section', 'category')->get()->toArray();
        return view('aczreviews.admin.products.products', compact('products'));
    }
    public function update_product_status (Request $request) {
        if($request->ajax()){
            $data=$request->all();
            if($data['status']== "active") {
                $status = 0;
            } else {
                $status = 1;
            }
            Product::where('id', $data['product_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status, 'product_id'=>$data['product_id']]);
        }
        // echo 'hello';
    }
    public function add_edit_products(Request $request, $id=null){
        $departments = Department::get()->toArray();
        if($id=="") {
         $title = "Thêm sản phẩm";
         $product = new Product;
         $message = "Đã thêm sản phẩm!";
        }
        else {
         $title = "Chỉnh sửa Sản phẩm 2";
         $product = Product::find($id);
         $message = "Đã chỉnh sửa Sản phẩm!";
        }
        if($request->isMethod('post')){
         $data = $request->all();
         $validator= Validator::make( $data, $rules = ['name' => 'required|regex:/^([a-zA-Z0-9_\-,;&\(\)ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+)$/i'], $messages = ['name.required' => 'Bạn cần nhập tên!', 'name.regex'=>'Tên không hợp lệ'])->validate();
         if($request->hasFile('image')){
            $image_tmp = $request->file('image');
            if($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension(); 
                 $imageName = $data['name'].rand(1111,9999).'.'.$extension; 
                 $largeImagePath = 'aczreviews/front/images/product_images/large/'.$imageName;
                 $mediumImagePath = 'aczreviews/front/images/product_images/medium/'.$imageName;
                 $smallImagePath = 'aczreviews/front/images/product_images/small/'.$imageName;
               Image::make($image_tmp)->resize(1000,1000)->save($largeImagePath);
               Image::make($image_tmp)->resize(500,500)->save($mediumImagePath);
               Image::make($image_tmp)->resize(277,366)->save($smallImagePath);
               $product->image = $imageName;
           }
        }
         $product->name = $data['name'];
         $product->department_id = $data['department_id'];
         $product->section_id = $data['section_id'];
         $product->category_id = $data['category_id'];
         $product->name = $data['name'];
         $product->code = $data['code'];
         $product->color = $data['color'];
         $product->size = $data['size'];
         $product->price = $data['price'];
         $product->discount = $data['discount'];
         $product->description = $data['description'];
         if(!empty($data['is_featured'])) {
            $product->is_featured = $data['is_featured'];
        }else {
            $product->is_featured = 'no';
        }
        if(!empty($data['has_versions'])) {
            $product->has_versions = $data['has_versions'];
        }else {
            $product->has_versions = 'no';
        }
         $product->status = 1;
         $product->save();
         return redirect()->back()->with('success_message', $message);
        }
        return view('aczreviews.admin.products.add_edit_products')->with(compact('title', 'product', 'departments'));
     }
     public function add_images(Request $request, $id){
        $product_details = Product::with('images')->find($id);
        if($request->isMethod('post')){
            if($request->hasFile('images')){
                $product_id_for_image_name = $request['product_id_for_image_name'];
                $images = $request->file('images');
                foreach($images as $key=>$image){
                    $image_tmp = Image::make($image);
                    $image_original_name = $image->getClientOriginalName();
                    $extension = $image->getClientOriginalExtension();
                    $image_name = $product_id_for_image_name.rand(111, 9999).'.'.$extension;
                    $medium_image_path = 'aczreviews/front/images/gal_images/medium/'.$image_name;
                    $small_image_path = 'aczreviews/front/images/gal_images/small/'.$image_name;
                    Image::make($image_tmp)->resize(500, 500)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300, 300)->save($small_image_path);
                    //add images to db
                    $image = new ProductImage;
                    $image->product_id = $id;
                    $image->image = $image_name;
                    $image->status = 1;
                    $image->save();
                }
            }
            return redirect()->back()->with('success_message', 'Đã thêm hình ảnh sản phẩm!');
        }
        return view('aczreviews/admin.product_images.add_edit_images', compact('product_details'));
    }
     public function delete_product(Request $request){
        $data = $request->all();
        $title = $data['title'];
        Product::where('id', $data['model_id'])->delete();
        return response()->json(['success_message'=> 'Đã xóa '.$title.'!']);
    }
    public function update_product_feature_status (Request $request) {
        if($request->ajax()){
            $data=$request->all();
            if($data['status']== "yes") {
                $status = "no";
            } else {
                $status = "yes";
            }
            Product::where('id', $data['product_id'])->update(['is_featured'=>$status]);
            return response()->json(['status'=>$status, 'product_id'=>$data['product_id']]);
        }
        // echo 'hello';
    }
    public function update_product_versions_status (Request $request) {
        if($request->ajax()){
            $data=$request->all();
            if($data['status']== "yes") {
                $status = "no";
            } else {
                $status = "yes";
            }
            Product::where('id', $data['product_id'])->update(['has_versions'=>$status]);
            return response()->json(['status'=>$status, 'product_id'=>$data['product_id']]);
        }
        // echo 'hello';
    }
    public function get_sections_after_department_selection(Request $request) {
        if($request->ajax()){
            $data=$request->all();
            $sections = Section::where('department_id', $data['department_id'])->get()->toArray();
            return  $sections;
        }
        // echo 'hello';
    }
    public function get_categories_after_section_selection(Request $request) {
        if($request->ajax()){
            $data=$request->all();
            $categories = Category::where('section_id', $data['section_id'])->get()->toArray();
            return  $categories;
        }
        // echo 'hello';
    }
}
