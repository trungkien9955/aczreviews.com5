@extends('aczreviews.admin.layout.layout')
@section('content')
<div class="cat-section">
    <div class="container">
        <div class="cat-section-wrapper">
            <div class="cat-section-header">
                <h4>Thêm hình ảnh </h4>
            </div>
            <div class="cat-section-title">
                <h5>Thêm hình ảnh sản phẩm</h5>
            </div>
            <div class="cat-section-content">
                <form class="forms-sample"  action = "{{url('admin/add-images/'.$product_details['id'])}}"method = "post" name = "updateAdminDetailsForm" id = "updateAdminDetailsForm" enctype = "multipart/form-data">@csrf
                        <div class="form-group">
                        <label for="product_name">Tên sản phẩm:</label>
                        &nbsp; {{$product_details['name']}}
                        </div>
                        <div class="form-group">
                        <label for="product_code">Mã sản phẩm:</label>
                        &nbsp; {{$product_details['code']}}
                        </div>
                        <div class="form-group">
                        <label for="product_color">Màu:</label>
                        &nbsp; {{$product_details['color']}}
                        </div>
                        <div class="form-group">
                        <label for="product_price">Giá:</label>
                        &nbsp; {{$product_details['price']}}
                        </div>
                        <div class="form-group">
                        <label for="">Hình ảnh sản phẩm:</label><br>
                        @if(!empty($product_details['image']))
                          <img style = "width: 150px; height: 150px"src="{{url('aczreviews/front/images/product_images/large/'.$product_details['image'])}}" alt="">
                          @else
                          <img style = "width: 150px; height: 150px" src="{{url('aczreviews/front/images/no-image.png')}}" alt="">
                          @endif
                        </div>
                        <h5  class = "mt-3">Thêm hình ảnh sản phẩm:</h5>
                        <div class="form-group">
                        <div class="field_wrapper">
                          <div>
                            <input type="file" name = "images[]" multiple = "" id = "images">
                          </div>
                        </div>
                        </div>
                        <input type="hidden" value = "product-id-.{{$product_details['id']}}" name = "product_id_for_image_name">
                        <button type="submit" class="btn btn-primary mr-2">Xác nhận</button>
                        <button class="btn btn-light">Hủy bỏ</button>
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
                <a  href = "{{url('/admin/products')}}" class = "btn btn-outline-secondary mt-2">Trở về trang trước</a>
                <table id = "products"class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                             ID
                          </th>
                          <th>
                             Hình ảnh
                          </th>
                          <th>
                             Tình trạng
                          </th>
                          <th>
                          Thao tác
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($product_details['images'] as $image)
                        <tr>
                          <td>
                            {{$image['id']}}
                          </td>
                          <td>
                            {{$image['image']}}
                          <img style = "width: 150px; height: 150px" src="{{url('aczreviews/front/images/gal_images/small/'.$image['image'])}}" alt="">
                          </td>               
                          <td>
                            @if($image['status'] ==1)
                                <a href = "javascript:void(0)" class="update_image_status" data-image-id="{{$image['id']}}"><i style = "font-size:24px; color: green;" class="fa-solid fa-circle-check" status = "active"></i></a>
                                    @else
                                <a href = "javascript:void(0)" class="update_image_status"   data-image-id="{{$image['id']}}"><i style = "font-size:24px; color: red;"class = "fa-solid fa-circle-xmark" status = "inactive"></i></a>
                            @endif 
                            <a href = "javascript:void(0)" class = "confirmDelete" module = "image" moduleid = "{{$image['id']}}">
                          <i style = "font-size:25px"class = "mdi mdi-file-excel-box"></i></a>         
                          </td>
                          <td>
                            <a data-title = "Hình ảnh sản phẩm" class = "confirm_delete admin-delete-btn" data-model = "ProductImage" data-model-url = "product_images" data-model-id = "{{$image['id']}}" data-product-id = "{{$product_details['id']}}"href="javascript:void(0)">Xóa</a>       
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
@endsection