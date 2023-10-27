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
                    <a href="/admin/add-edit-products">Thêm sản phẩm</a>
                </div>
                <div class="table-wrapper">
                    <table class="table table-bordered" id="products">
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
                                    Thuộc Danh mục cấp 2
                                </td>
                                <td>
                                    Tên
                                </td>
                                <td>
                                    Nổi bật
                                </td>
                                <td>
                                    Phiên bản
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
                            @foreach($products as $product)
                            <tr>
                                <td>
                                    {{$product['id']}}
                                </td>
                                <td>
                                    {{$product['department']['department_name']}}
                                </td>
                                <td>
                                    {{$product['section']['section_name']}}
                                </td>
                                <td>
                                    {{$product['category']['category_name']}}
                                </td>
                                <td>
                                    {{$product['name']}}
                                </td>
                                <td>
                                    @if($product['is_featured'] =="yes")
                                    <a href = "javascript:void(0)" class="update_product_feature_status" data-feature-product-id="{{$product['id']}}"><i style = "font-size:24px; color: green;" class="fa-solid fa-circle-check" status = "yes"></i></a>
                                    @else
                                    <a href = "javascript:void(0)" class="update_product_feature_status"   data-feature-product-id="{{$product['id']}}"><i style = "font-size:24px; color: red;"class = "fa-solid fa-circle-xmark" status = "no"></i></a>
                                    @endif 
                                </td>
                                <td>
                                    @if($product['has_versions'] =="yes")
                                    <a href = "javascript:void(0)" class="update_product_versions_status" data-versions-product-id="{{$product['id']}}"><i style = "font-size:24px; color: green;" class="fa-solid fa-circle-check" status = "yes"></i></a>
                                    @else
                                    <a href = "javascript:void(0)" class="update_product_versions_status"   data-versions-product-id="{{$product['id']}}"><i style = "font-size:24px; color: red;"class = "fa-solid fa-circle-xmark" status = "no"></i></a>
                                    @endif 
                                </td>
                                <td>
                                    @if($product['status'] ==1)
                                    <a href = "javascript:void(0)" class="update_product_status" data-product-id="{{$product['id']}}"><i style = "font-size:24px; color: green;" class="fa-solid fa-circle-check" status = "active"></i></a>
                                    @else
                                    <a href = "javascript:void(0)" class="update_product_status"   data-product-id="{{$product['id']}}"><i style = "font-size:24px; color: red;"class = "fa-solid fa-circle-xmark" status = "inactive"></i></a>
                                    @endif 
                                </td>
                                <td>
                                <a href="{{url('/admin/add-edit-products/'.$product['id'])}}" class = "admin-edit-btn">Sửa</a>
                                <a href="{{url('/admin/add-images/'.$product['id'])}}" class = "admin-edit-btn">Thêm hình ảnh</a>
                                <a data-title = "Sản phẩm" class = "confirm_delete admin-delete-btn" data-model = "Product" data-model-url = "products" data-model-id = "{{$product['id']}}" href="javascript:void(0)">Xóa</a>
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