<?php

namespace App\Http\Controllers\aczreviews\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\aczreviews\Section;
use App\Models\aczreviews\Department;
use App\Models\aczreviews\Category;
use Validator;
class CategoryController extends Controller
{
    public function categories(){
        $departments = Department::get()->toArray();
        $sections = Section::with('department')->get()->toArray();
        $categories = Category::with('department', 'section')->get()->toArray();
        return view('aczreviews.admin.categories.categories', compact('categories', 'departments','sections'));
    }
    public function update_category_status (Request $request) {
        if($request->ajax()){
            $data=$request->all();
            if($data['status']== "active") {
                $status = 0;
            } else {
                $status = 1;
            }
            Category::where('id', $data['category_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status, 'category_id'=>$data['category_id']]);
        }
        // echo 'hello';
    }
    public function add_edit_categories(Request $request, $id=null){
        $departments = Department::get()->toArray();
        if($id=="") {
         $title = "Thêm danh mục cấp 3";
         $category = new Category;
         $message = "Đã thêm Danh mục cấp 3!";
        }
        else {
         $title = "Chỉnh sửa Danh mục cấp 2";
         $category = Category::find($id);
         $message = "Đã chỉnh sửa Danh mục cấp 2!";
        }
        if($request->isMethod('post')){
         $data = $request->all();
         $validator= Validator::make( $data, $rules = ['name' => 'required|regex:/^([a-zA-Z0-9ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+)$/i'], $messages = ['name.required' => 'Bạn cần nhập tên!', 'name.regex'=>'Tên không hợp lệ'])->validate();
         $category->category_name = $data['name'];
         $category->department_id = $data['department_id'];
         $category->section_id = $data['section_id'];
         $category->url = $data['url'];
         $category->status = 1;
         $category->save();
         return redirect()->back()->with('success_message', $message);
        }
        return view('aczreviews.admin.categories.add_edit_categories')->with(compact('title', 'category', 'departments'));
     }
     public function get_sections_after_department_selection(Request $request) {
        if($request->ajax()){
            $data=$request->all();
            $sections = Section::where('department_id', $data['department_id'])->get()->toArray();
            return  $sections;
        }
        // echo 'hello';
    }
}
