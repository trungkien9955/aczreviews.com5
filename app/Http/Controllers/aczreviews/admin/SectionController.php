<?php

namespace App\Http\Controllers\aczreviews\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\aczreviews\Section;
use App\Models\aczreviews\Department;
use Validator;
class SectionController extends Controller
{
    public function sections(){
        $sections = Section::with('department')->get()->toArray();
        return view('aczreviews.admin.sections.sections', compact('sections'));
    }
    public function update_section_status (Request $request) {
        if($request->ajax()){
            $data=$request->all();
            if($data['status']== "active") {
                $status = 0;
            } else {
                $status = 1;
            }
            Section::where('id', $data['section_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status, 'section_id'=>$data['section_id']]);
        }
        // echo 'hello';
    }
    public function add_edit_sections(Request $request, $id=null){
        $departments = Department::get()->toArray();
        if($id=="") {
         $title = "Thêm danh mục cấp 2";
         $section = new Section;
         $message = "Đã thêm Danh mục cấp 2!";
        }
        else {
         $title = "Chỉnh sửa Danh mục cấp 2";
         $section = Section::find($id);
         $message = "Đã chỉnh sửa Danh mục cấp 2!";
        }
        if($request->isMethod('post')){
         $data = $request->all();
         $validator= Validator::make( $data, $rules = ['name' => 'required|regex:/^([a-zA-Z0-9ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+)$/i'], $messages = ['name.required' => 'Bạn cần nhập tên!', 'name.regex'=>'Tên không hợp lệ'])->validate();
         $section->section_name = $data['name'];
         $section->department_id = $data['department_id'];
         $section->url = $data['url'];
         $section->status = 1;
         $section->save();
         return redirect()->back()->with('success_message', $message);
        }
        return view('aczreviews.admin.sections.add_edit_sections')->with(compact('title', 'section', 'departments'));
     }
     public function delete_section(Request $request){
        $data = $request->all();
        $title = $data['title'];
        Section::where('id', $data['model_id'])->delete();
        return response()->json(['success_message'=> 'Đã xóa '.$title.'!']);
    }
}
