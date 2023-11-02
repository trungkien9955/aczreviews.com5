@php
use App\Models\aczreviews\Product;
use App\Models\aczreviews\Vendor;
@endphp
@extends('aczreviews.front.layout.layout')
@section('content')
<div class="product-detail-section">
    <div class="container overflow-hidden">
        <div class="product-detail-wrapper">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="detail-gal-wrapper">
                        <div class="detail-gal">
                            <div class="detail-main-img">
                                <img src="{{url('aczreviews/front/images/product_images/large/'.$product_details['image'])}}" class="product-detail-image" alt="">
                            </div>
                            <div class="detail-thumb">
                                @foreach($product_details['images'] as $gal_image)
                                <img src="{{url('aczreviews/front/images/gal_images/medium/'.$gal_image['image'])}}" class = "gallery-image" alt="">
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="detail-basic-info-wrapper">
                        <div class="detail-product-title">
                            <h4>{{$product_details['name']}}</h4>
                        </div>
                        @if(!empty($product_details['brand']))
                        <div class="detail-brand">
                            <h6>Thương hiệu: {{$product_details['brand']['name']}}</h6>
                        </div>
                        @endif
                        <div class="detail-badges">
                            @if($product_details['amazon_choice'] == 'yes')
                            <a href="/amazon-choice"><img src="{{url('aczreviews/front/images/icon_images/amazons-choice.png')}}" alt=""></a>
                            @endif
                            @if($product_details['acz_choice'] == 'yes')
                            <a href="/acz-choice"><img src="{{url('aczreviews/front/images/icon_images/acz-choice-5.png')}}" alt=""></a>
                            @endif
                        </div>
                        <div class="detail-rating">
                            @php 
                            $rating = Product::get_rating($product_details['id']);
                            @endphp
                            @if($rating['is_rated'] == 'yes')
                            <span class="rating-score"> {{$rating['product_rating']}}</span>
                            @endif
                            <?php 
                                if($rating['is_rated']=="no"){
                                    $count = 5;
                                    while($count>0) {
                                        echo '<span style = "color:#ccc; font-size: 24px;">&#9733;</span>';
                                        $count--;
                                    }
                                }else{
                                    $count = 0;
                                    $total_count = 5- $rating['product_rating_for_star'];
                                    while($count< $rating['product_rating_for_star']) {
                                        echo '<span style = "color:#ffc700; font-size: 24px;">&#9733;</span>';
                                        $count++;
                                    }
                                    while($total_count>0) {
                                        echo '<span style = "color:#ccc; font-size: 24px;">&#9733;</span>';
                                        $total_count--;
                                    }
                                }
                            ?>
                            <span class="detail-rating-count">{{$rating['product_rating_count']}}</span><span>&nbsp;Đánh giá, </span>
                            <span class="detail-comment-count">{{$rating['product_rating_count']}}</span><span>&nbsp;Hỏi - đáp</span>
                            @php 
                            $sales = Product::get_sales($product_details['id']);
                            @endphp
                            <div>Đã bán&nbsp;<span class="detail-sale-count"> {{$sales['total_sales']}}</span>&nbsp;Tháng trước bán: <span>{{$sales['last_month_sales']}}</span></div>
                        </div>
                        @if(!empty($product_details['size']))
                        <div class="detail-versions">
                            <div class="detail-variant">
                                <span class="variant-name">Size:</span>
                                <div>
                                    <span class="variant-item">{{$product_details['size']}}</span>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="detail-specs">
                            <table class="table table-bordered">
                                @foreach($product_details['specs'] as $spec)
                                <tr>
                                    <td>{{$spec['header']}}</td>
                                    <td>{{$spec['data']}}</td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                        @if(count($product_details['features']) >0 )
                        <div class="detail-features">
                            <h6>Điểm nổi bật:</h6>
                            <ul class="detail-feature-list">
                                @foreach($product_details['features'] as $feature)
                                <li><p class="detail-feature-list-item">{{$feature['content']}}</p></li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12">
                @if(count($product_details['offers']) > 0)
                        <h6>Hiện có <span style = "color: #e02027; font-weight:bold;">{{count($product_details['offers'])}}</span> cửa hàng đang bán sản phẩm này.</h6>
                        @else
                        <h6>Hiện chưa có cửa hàng nào bán sản phẩm này.</h6>
                        @endif
                        <h6>Bạn đang bán sản phẩm này?</h6><a href="">Đăng ký bán ngay</a>
                    <div class="detail-vendor-filter">
                        <div class="d-flex gx-2 mt-2">
                            <div class="col">
                                <select name="vendor_prices" id="vendor_prices" class = "form-control" data-product-id-for-vendor-prices = "{{$product_details['id']}}">
                                    <option value="">Chọn giá</option>
                                    <option value="vendor_prices_low">Từ thấp đến cao</option>
                                    <option value="vendor_prices_high">Từ cao đến thấp</option>
                                </select>
                            </div>
                            <div class="col">
                                <select name="vendor_provinces" id="vendor_provinces" class = "form-control" data-product-id-for-vendor-province = "{{$product_details['id']}}">
                                    <option value="">Chọn tỉnh/thành phố</option>
                                    @foreach($provinces as $province)
                                        <option value="{{$province['id']}}">{{$province['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                        <div class="detail-vendors-wrapper-container">
                    <div class="detail-vendors-wrapper">
                        @if(count($product_details['offers']) > 0)
                        @foreach($product_details['offers'] as $offer)
                        @php
                        $vendor = Vendor::with('ward', 'district', 'province')->find($offer['vendor_id'])->toArray();
                        @endphp
                        <div class="detail-vendor-wrapper">
                            <div class="detail-vendor-inner-wrapper">
                                <div class="detail-vendor-head">
                                    <div class="detail-vendor-img">
                                        <img src="{{url('aczreviews/front/images/vendor_images/'.$vendor['image'])}}" alt="">
                                    </div>
                                    <div class="detail-vendor-name">
                                        <span title= "name">{{$vendor['name']}}</span>
                                        <div class="detail-vendor-badges">
                                        @if($vendor['like_count']>10)
                                        <span class="badge bg-danger">Yêu thích</span>
                                        @endif
                                        @if($vendor['sales_count']>10)
                                        <span class="badge bg-warning text-dark">Bán chạy</span>
                                        @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="detail-vendor-info">
                                    <span class="detail-vendor-address">{{$vendor['province']['name']}}</span>, <span class="detail-vendor-item-count" style = "color: #e02027">{{$vendor['inventory_count']}}</span>&nbsp;mặt hàng, Đã bán&nbsp;<span class="detail-vendor-sale-count" style = "color: #e02027"> {{$vendor['sales_count']}}</span>&nbsp;<a href="/vendor/{{$vendor['id']}}">Xem cửa hàng</a>
                                </div>
                                <div >
                                    <span class="detail-vendor-price">@php echo number_format($offer['price']) @endphp</span>đ
                                </div>
                                <div class="detail-vendor-offer">
                                    @if($offer['freeship'] == 'yes')
                                    <span>Free ship</span>
                                    @endif
                                    @if($offer['gift'] == 'yes')
                                    <span>Quà tặng</span>
                                    @endif
                                    @if($offer['coupon'] == 'yes')
                                    <span>Mã giảm giá</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="detail-tabs-wrapper">
                <div class="detail-tabs-nav">
                    <ul class="nav nav-tabs d-flex justify-content-center" id="myTab" role="tablist" >
                        <li class="nav-item" role="presentation">
                        <button  class = "nav-link active" id="detail-tab-review-tab" data-bs-toggle="tab" data-bs-target="#detail-tab-review">Đánh giá sản phẩm</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class = "nav-link " id="detail-tab-description-tab" data-bs-toggle="tab" data-bs-target="#detail-tab-description">Mô tả sản phẩm</button>
                        </li>
                        <li class="nav-item" role="presentation">
                        <button  class = "nav-link " id="detail-tab-specs-tab" data-bs-toggle="tab" data-bs-target="#detail-tab-specs">Về thương hiệu</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane  fade show active"id="detail-tab-review"role="tabpanel">
                        <h3 style = "text-align:center; font-weight: 600;color: #6C757D;margin-bottom: 24px;margin-top: 24px;">Đánh giá sản phẩm {{$product_details['name']}}</h3>
                        <div class="row">
                            @if($rating['is_rated'] == 'yes')
                            <div class="col-lg-6 col-md-6 col-xs-12 overflow-hidden">
                                <div class="total-score-wrapper mt-5">
                                    <h6>Điểm đánh giá</h6>
                                    <div class="circle-wrapper">
                                        <span>{{$rating['product_rating']}}</span>
                                    </div>
                                    <h6>{{$rating['product_rating_count']}} đánh giá</h6>
                                </div>
                            </div>
                            @else
                            <div class="col-lg-6 col-md-6 col-xs-12 overflow-hidden">
                                <div class="total-score-wrapper mt-5">
                                    <h6>Chưa có đánh giá nào.</h6>
                                </div>
                            </div>
                            @endif
                            <div class="col-lg-6 col-md-6 col-xs-12 ">
                                <div class="your-review-wrapper mt-3">
                                    @if(Session::has('success_message'))
                                    <div class = "alert alert-success alert-dismissible fade show" role = "alert">
                                    <strong>Thành công:</strong>{{Session::get('success_message')}}
                                    </div>
                                    @endif
                                    @if(Session::has('error_message'))
                                    <div class = "alert alert-warning alert-dismissible fade show" role = "alert">
                                    <strong>Lỗi:</strong>{{Session::get('error_message')}}
                                    </div>
                                    @endif
                                    @if($errors->any())
                                    <div class = "alert alert-warning alert-dismissible fade show" role = "alert">
                                    <strong>Lỗi:</strong>    
                                    <?php echo implode('', $errors->all('<div>:message</div>')); ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    @endif
                                    <h5>Gửi đánh giá của bạn (Không cần đăng nhập):</h5>
                                    <form action="javascript:void(0);" id = "guest-rating-form" method = "post">@csrf
                                        <input type="hidden" id= "guest_rating_product_id" name = "product_id" value = "{{$product_details['id']}}">
                                        <div class="form-group">
                                            <label for="review_author">Tên</label>
                                            <input type="text" class="form-control" name = "review_author" id="review_author" required >
                                            <label for="review_email">Email</label>
                                            <input type="email" class="form-control" name = "review_email" id="review_email" maxlength = "500" required>
                                            <label for="review_phone">Số điện thoại (Không bắt buộc)</label>
                                            <input type="text" class="form-control" name = "review_phone" id="review_phone" maxlength = "12">
                                            <label for="">Chọn sao đánh giá</label><br>
                                            <div class="rate">
                                                <input style = "display:none;" type="radio" id="guest_rating_star5" name="guest_rating" value="5" />
                                                <label for="guest_rating_star5" title="text">5 stars</label>
                                                <input style = "display:none;" type="radio" id="guest_rating_star4" name="guest_rating" value="4" />
                                                <label for="guest_rating_star4" title="text">4 stars</label>
                                                <input style = "display:none;" type="radio" id="guest_rating_star3" name="guest_rating" value="3" />
                                                <label for="guest_rating_star3" title="text">3 stars</label>
                                                <input style = "display:none;" type="radio" id="guest_rating_star2" name="guest_rating" value="2" />
                                                <label for="guest_rating_star2" title="text">2 stars</label>
                                                <input style = "display:none;" type="radio" id="guest_rating_star1" name="guest_rating" value="1" />
                                                <label for="guest_rating_star1" title="text">1 star</label>
                                            </div><br>
                                            <textarea class="form-control" name = "comment" id = "comment" rows="2" maxlength = "500" placeholder = "Nhập nội dung đánh giá"required></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-2">Gửi đánh giá</button>
                                    </form>
                                    <div id="guest-rating-message"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php $guest_rating_info = Product::get_guest_rating($product_details['id'])?>
                            @if($guest_rating_info['is_rated_by_guest']=="yes")
                            @foreach($guest_rating_info['guest_rating_info'] as $guest_rating)
                            <div class="review-item mb-2">
                                <div class="review-item-author">
                                    <h6>
                                        <b>{{$guest_rating['name']}}</b>
                                        <span class="badge bg-secondary">Khách</span>
                                        <?php 
                                        $count = 0;
                                        $total_count= 5-$guest_rating['rating'];
                                        while($count< $guest_rating['rating']) {
                                            echo '<span style = "color:#ffc700; font-size: 24px;">&#9733;</span>';
                                            $count++;
                                        }
                                        while($total_count>0){
                                            echo '<span style = "color:#ccc; font-size: 24px;">&#9733;</span>';
                                            $total_count--;
                                        }
                                        ?>
                                    </h6>
                                    @if(!empty($guest_rating['created_at']))
                                    <h6>@php echo date_format(new DateTime($guest_rating['created_at']),'d-m-Y H:i:s') @endphp</h6>
                                    @else
                                    <h6>...</h6>
                                    @endif
                                </div>
                                <div class="review-item-content">
                                    <p>{{$guest_rating['comment']}} </p>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="tab-pane fade "id="detail-tab-description" role="tabpanel" aria-labelledby="detail-tab-description-tab">
                        @php
                        $description = Product::get_description($product_details['id']);
                        @endphp
                        @if($description['count'] > 0)
                        <div class="product_desc m-auto p-3 mt-2">
                            <h3 style = "text-align:center; font-weight: 600;color: #6C757D;margin-bottom: 24px;">Mô tả sản phẩm</h3>
                            {!!$description['description']['description']!!}
                        </div>
                        @else
                        <div class="product_desc m-auto p-3 mt-2">
                            <h3 style = "text-align:center; font-weight: 600;color: #6C757D;margin-bottom: 24px;">Mô tả sản phẩm</h3>
                            <h5>Chưa có mô tả sản phẩm.</h5>
                        </div>
                        @endif
                    </div>
                    <div class="tab-pane fade  "id="detail-tab-specs" role="tabpanel">
                        <div class="m-auto p-3 mt-2"style = "min-height: 426px;">
                            <h3 style = "text-align:center; font-weight: 600;color: #6C757D;margin-bottom: 24px;">Về thương hiệu</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection