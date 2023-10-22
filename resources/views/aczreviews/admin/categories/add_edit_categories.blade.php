@extends('aczreviews.admin.layout.layout')
@section('content')
<div class="cat-section">
    <div class="container">
        <div class="cat-section-wrapper">
            <div class="cat-section-header">
                <h4>Danh mục cấp 3</h4>
            </div>
            <div class="cat-section-title">
                <h5>{{$title}}</h5>
            </div>
            <div class="cat-section-content">
                <form @if(empty($category['id'])) action = "{{url('admin/add-edit-categories')}}"@else action = "{{url('admin/add-edit-categories/'.$category['id'])}}" @endif method = "post">@csrf
                    <div class="form-group">
                    <label for="name">Tên danh mục cấp 3</label>
                    <input type="text" class="form-control" name = "name" @if(!empty($category['id'])) value = "{{$category['category_name']}}" @else value = "{{old('name')}}" @endif required>
                    </div>
                    <div class="form-group">
                        <label for="department_id">Chọn danh mục cấp 1</label>
                        <select class = "form-control" name="department_id" id = "department-selection">
                            <option value="">Chọn danh mục</option>
                            @foreach($departments as $department)
                            <option value="{{$department['id']}}" @if(!empty($category['department_id']) && $category['department_id'] == $department['id']) selected @endif>{{$department['department_name']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="section_id">Chọn danh mục cấp 2</label>
                        <select class = "form-control" name="section_id" id = "section-selection">
                            <option value="">Chọn danh mục</option>
                        </select>
                    </div>
                    <div class="form-group">
                    <label for="url">URL</label>
                    <input type="text" class="form-control" name = "url" @if(!empty($category['url'])) value = "{{$category['url']}}" @else value = "{{old('url')}}" @endif required>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2 mt-2">Xác nhận</button>
                    <button class="btn btn-light mt-2">Hủy bỏ</button>
                </form>
                @if($errors->any())
                    <div class = "alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif
                @if(Session::has('success_message'))
                    <div class = "alert alert-success alert-dismissible fade show mt-2 mb-2" role = "alert">
                      <strong>Thành  công: </strong>{{Session::get('success_message')}}
                    </div>
                @endif
                <a  href = "{{url('/admin/categories')}}" class = "btn btn-outline-secondary mt-2">Trở về trang trước</a>
            </div>
        </div>
    </div>
</div>
@endsection