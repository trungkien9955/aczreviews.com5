<?php

namespace App\Http\Controllers\aczreviews\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\aczreviews\Department;
use Validator;
class DepartmentController extends Controller
{
    public function departments(){
        $departments = Department::get()->toArray();
        return view('aczreviews.admin.departments.departments', compact('departments'));
    }
    public function add_edit_departments(Request $request, $id=null){
       if($id=="") {
        $title = "Thêm danh mục cấp 1";
        $department = new Department;
        $message = "Đã thêm Danh mục cấp 1!";
       }
       else {
        $title = "Chỉnh sửa Danh mục cấp 1";
        $department = Department::find($id);
        $message = "Đã chỉnh sửa Danh mục cấp 1!";
       }
       if($request->isMethod('post')){
        $data = $request->all();
        $validator= Validator::make( $data, $rules = ['name' => 'required|regex:/^([a-zA-Z0-9ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+)$/i'], $messages = ['name.required' => 'Bạn cần nhập tên!', 'name.regex'=>'Tên không hợp lệ'])->validate();
        $department->department_name = $data['name'];
        $department->url = $data['url'];
        $department->status = 1;
        $department->save();
        return redirect()->back()->with('success_message', $message);
       }
       return view('aczreviews.admin.departments.add_edit_departments')->with(compact('title', 'department'));
    }
    public function update_department_status (Request $request) {
        if($request->ajax()){
            $data=$request->all();
            if($data['status']== "active") {
                $status = 0;
            } else {
                $status = 1;
            }
            Department::where('id', $data['department_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status, 'department_id'=>$data['department_id']]);
        }
        // echo 'hello';
    }
    public function delete_department(Request $request){
        $data = $request->all();
        $title = $data['title'];
        Department::where('id', $data['model_id'])->delete();
        return response()->json(['success_message'=> 'Đã xóa '.$title.'!']);
    }
}
