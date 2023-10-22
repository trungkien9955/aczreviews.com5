@extends('aczreviews.admin.layout.layout')
@section('content')
<div class="cat-section">
    <div class="container">
        <div class="cat-section-wrapper">
            <div class="cat-section-header">
                <h4>Danh mục cấp 1</h4>
            </div>
            <div class="cat-section-title">
                <h5>{{$title}}</h5>
            </div>
            <div class="cat-section-content">
                <form @if(empty($department['id'])) action = "{{url('admin/add-edit-departments')}}"@else action = "{{url('admin/add-edit-departments/'.$department['id'])}}" @endif method = "post">@csrf
                    <div class="form-group">
                    <label for="name">Tên danh mục cấp 1</label>
                    <input type="text" class="form-control" id="name" name = "name" @if(!empty($department['id'])) value = "{{$department['department_name']}}" @else value = "{{old('name')}}" @endif required>
                    </div>
                    <div class="form-group">
                    <label for="url">URL</label>
                    <input type="text" class="form-control" id="url" name = "url" @if(!empty($department['url'])) value = "{{$department['url']}}" @else value = "{{old('url')}}" @endif required>
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
                <a  href = "{{url('/admin/departments')}}" class = "btn btn-outline-secondary mt-2">Trở về trang trước</a>
            </div>
        </div>
    </div>
</div>
@endsection