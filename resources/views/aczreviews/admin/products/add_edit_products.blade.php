
<?php 
use App\Models\aczreviews\Section;
use App\Models\aczreviews\Category;
use App\Models\aczreviews\Product;
?>
@extends('aczreviews.admin.layout.layout')
@section('content')
<div class="cat-section">
    <div class="container">
        <div class="cat-section-wrapper">
            <div class="cat-section-header">
                <h4>Sản phẩm</h4>
            </div>
            <div class="cat-section-title">
                <h5>{{$title}}</h5>
            </div>
            <div class="cat-section-content">
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
                <form @if(empty($product['id'])) action = "{{url('admin/add-edit-products')}}"@else action = "{{url('admin/add-edit-products/'.$product['id'])}}" @endif method = "post" enctype = "multipart/form-data">@csrf
                    <div class="form-group">
                    <label for="name">Tên sản phẩm</label>
                    <input type="text" class="form-control" name = "name" @if(!empty($product['id'])) value = "{{$product['name']}}" @else value = "{{old('name')}}" @endif required>
                    </div>
                    <div class="form-group">
                        <label for="department_id">Chọn danh mục cấp 1</label>
                        <select class = "form-control" name="department_id" id = "department-selection">
                            <option value="">Chọn danh mục</option>
                            @foreach($departments as $department)
                            <option value="{{$department['id']}}" @if(!empty($product['department_id']) && $product['department_id'] == $department['id']) selected @endif>{{$department['department_name']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="section_id">Chọn danh mục cấp 2</label>
                        <select class = "form-control" name="section_id" id = "section-selection">
                        @if(!empty($product['section_id']))  
                        @php 
                        $section = Section::find($product['section_id']);
                        @endphp
                        <option value=" {{$section['id']}}">{{$section['section_name']}}</option>
                        @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="section_id">Chọn danh mục cấp 3</label>
                        <select class = "form-control" name="category_id" id = "category-selection">
                        @if(!empty($product['category_id']))  
                        @php 
                        $category = Category::find($product['category_id']);
                        @endphp
                        <option value=" {{$category['id']}}">{{$category['category_name']}}</option>
                        @endif
                        </select>
                    </div>
                    <div class="form-group">
                    <label for="code">Mã sản phẩm</label>
                    <input type="text" class="form-control" name = "code" @if(!empty($product['code'])) value = "{{$product['code']}}" @else value = "{{old('code')}}" @endif required>
                    </div>
                    <div class="form-group">
                    <label for="color">Màu</label>
                    <input type="text" class="form-control" name = "color" @if(!empty($product['color'])) value = "{{$product['color']}}" @else value = "{{old('color')}}" @endif >
                    </div>
                    <div class="form-group">
                    <label for="size">Size</label>
                    <input type="text" class="form-control" name = "size" @if(!empty($product['size'])) value = "{{$product['size']}}" @else value = "{{old('size')}}" @endif >
                    </div>
                    <div class="form-group">
                    <label for="color">Giá</label>
                    <input type="text" class="form-control" name = "price" @if(!empty($product['price'])) value = "{{$product['price']}}" @else value = "{{old('price')}}" @endif required>
                    </div>
                    <div class="form-group">
                    <label for="color">Giảm giá</label>
                    <input type="text" class="form-control" name = "discount" @if(!empty($product['discount'])) value = "{{$product['discount']}}" @else value = "{{old('discount')}}" @endif required>
                    </div>
                    <div class="form-group">
                        <label for="image">Hình ảnh (Tối ưu: 1000x1000)</label>
                        <input type="file" class="form-control" name = "image"  >
                        @if(!empty($product['image']))

                        <a href="{{url('aczreviews/front/images/product_images/'.$product['image'])}}">View image</a>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="description">Mô tả</label>
                          <textarea name="description"   rows="3" class = "form-control">{{$product['description']}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="is_featured">Là sản phẩm nổi bật?</label>
                        <input type="checkbox" name = "is_featured"  value = "yes" @if(!empty($product['is_featured']) && $product['is_featured'] == 'yes') checked @endif>
                    </div>
                    <div class="form-group">
                        <label for="is_featured">Là sản phẩm Amazon Choice?</label>
                        <input type="checkbox" name = "amazon_choice"  value = "yes" @if(!empty($product['amazon_choice']) && $product['amazon_choice'] == 'yes') checked @endif>
                    </div>
                    <div class="form-group">
                        <label for="is_featured">Là sản phẩm Acz Choice?</label>
                        <input type="checkbox" name = "acz_choice"  value = "yes" @if(!empty($product['acz_choice']) && $product['acz_choice'] == 'yes') checked @endif>
                    </div>
                    <div class="form-group">
                        <label for="has_versions">Có nhiều phiên bản?</label>
                        <input type="checkbox" name = "has_versions"  value = "yes" @if(!empty($product['has_versions']) && $product['has_versions'] == 'yes') checked @endif>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2 mt-2">Xác nhận</button>
                    <button class="btn btn-light mt-2">Hủy bỏ</button>
                </form>
                <a  href = "{{url('/admin/products')}}" class = "btn btn-outline-secondary mt-2">Trở về trang trước</a>
            </div>
        </div>
    </div>
</div>
@endsection