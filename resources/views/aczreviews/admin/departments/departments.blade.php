@extends('aczreviews.admin.layout.layout')
@section('content')
<div class="cat-section">
    <div class="container">
        <div class="cat-section-wrapper">
            <div class="cat-section-header">
                <h4>Danh mục cấp 1</h4>
            </div>
            <div class="cat-section-content">
                <div class="add-btn">
                    <a href="/admin/add-edit-departments">Thêm Danh mục cấp 1</a>
                </div>
                <div class="table-wrapper">
                    <table class="table table-bordered" id="departments">
                        <thead>
                            <tr>
                                <td>
                                    ID
                                </td>
                                <td>
                                    Tên
                                </td>
                                <td>
                                    url
                                </td>
                                <td>
                                    Trạng thái
                                </td>
                                <td>
                                    Thao tác
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($departments as $department)
                            <tr>
                                <td>
                                    {{$department['id']}}
                                </td>
                                <td>
                                    {{$department['department_name']}}
                                </td>
                                <td>
                                    {{$department['url']}}
                                </td>
                                <td>
                                    @if($department['status'] ==1)
                                    <a href = "javascript:void(0)" class="update_department_status" data-department-id="{{$department['id']}}"><i style = "font-size:24px; color: green;" class="fa-solid fa-circle-check" status = "active"></i></a>
                                    @else
                                    <a href = "javascript:void(0)" class="update_department_status"   data-department-id="{{$department['id']}}"><i style = "font-size:24px; color: red;"class = "fa-solid fa-circle-xmark" status = "inactive"></i></a>
                                    @endif 
                                </td>
                                <td>
                                <a href="{{url('/admin/add-edit-departments/'.$department['id'])}}" class = "admin-edit-btn">Chỉnh sửa</a>
                                <a data-title = "Danh mục cấp 1" class = "confirm_delete admin-delete-btn" data-model = "Department" data-model-url = "departments" data-model-id = "{{$department['id']}}" href="javascript:void(0)">Xóa</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection