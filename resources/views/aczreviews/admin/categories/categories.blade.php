@extends('aczreviews.admin.layout.layout')
@section('content')
<div class="cat-section">
    <div class="container">
        <div class="cat-section-wrapper">
            <div class="cat-section-header">
                <h4>Danh mục cấp 3</h4>
            </div>
            <div class="cat-section-content">
                <div class="add-btn">
                    <a href="/admin/add-edit-categories">Thêm Danh mục cấp 3</a>
                </div>
                <div class="table-wrapper">
                    <table class="table table-bordered" id="categories">
                        <thead>
                            <tr>
                                <td>
                                    ID
                                </td>
                                <td>
                                    Thuộc Danh mục cấp 1
                                </td>
                                <td>
                                    Thuộc Danh mục cấp 2
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
                            @foreach($categories as $category)
                            <tr>
                                <td>
                                    {{$category['id']}}
                                </td>
                                <td>
                                    {{$category['department']['department_name']}}
                                </td>
                                <td>
                                    {{$category['section']['section_name']}}
                                </td>
                                <td>
                                    {{$category['category_name']}}
                                </td>
                                <td>
                                    {{$category['url']}}
                                </td>
                                <td>
                                    @if($category['status'] ==1)
                                    <a href = "javascript:void(0)" class="update_category_status" data-category-id="{{$category['id']}}"><i style = "font-size:24px; color: green;" class="fa-solid fa-circle-check" status = "active"></i></a>
                                    @else
                                    <a href = "javascript:void(0)" class="update_category_status"   data-category-id="{{$category['id']}}"><i style = "font-size:24px; color: red;"class = "fa-solid fa-circle-xmark" status = "inactive"></i></a>
                                    @endif 
                                </td>
                                <td>
                                <a href="{{url('/admin/add-edit-categories/'.$category['id'])}}" class = "admin-edit-btn">Chỉnh sửa</a>
                                <a data-title = "Danh mục cấp 2" class = "confirm_delete admin-delete-btn" data-model = "Category" data-model-url = "categories" data-model-id = "{{$category['id']}}" href="javascript:void(0)">Xóa</a>
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