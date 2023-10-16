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
                                <img src="{{url('aczreviews/front/images/sample_images/product-1.jpg')}}" alt="">
                            </div>
                            <div class="detail-thumb">
                                <img src="{{url('aczreviews/front/images/sample_images/gal-1-1.jpg')}}" alt="">
                                <img src="{{url('aczreviews/front/images/sample_images/gal-1-2.jpg')}}" alt="">
                                <img src="{{url('aczreviews/front/images/sample_images/gal-1-3.jpg')}}" alt="">
                                <img src="{{url('aczreviews/front/images/sample_images/gal-1-4.jpg')}}" alt="">
                                <img src="{{url('aczreviews/front/images/sample_images/gal-1-5.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="detail-basic-info-wrapper">
                        <div class="detail-product-title">
                            <h4>Quantum Health SuperLysine+ Advanced Formula Immune Support Supplement Lysine 1500 mg, Vitamin C Echinacea Licorice Bee Propolis & Odorless Garlic Daily Wellness Blend for Women & Men - 180 Tablets</h4>
                        </div>
                        <div class="detail-brand">
                            <h6>Thương hiệu: Layali</h6>
                        </div>
                        <div class="detail-badges">
                            <img src="{{url('aczreviews/front/images/icon_images/amazons-choice.png')}}" alt="">
                            <img src="{{url('aczreviews/front/images/icon_images/acz-choice-5.png')}}" alt="">
                        </div>
                        <div class="detail-rating">
                            <span class="rating-score">4</span>
                            <span style = "color:#ffc700; font-size: 24px;">&#9733;</span>
                            <span style = "color:#ffc700; font-size: 24px;">&#9733;</span>
                            <span style = "color:#ffc700; font-size: 24px;">&#9733;</span>
                            <span style = "color:#ffc700; font-size: 24px;">&#9733;</span>
                            <span style = "color:#ffc700; font-size: 24px;">&#9733;</span>
                            <span class="detail-rating-count"></span>86<span>đánh giá</span>
                            <span class="detail-comment-count"></span>25<span>bình luận</span>
                            <div>Đã bán&nbsp;<span class="detail-sale-count">300</span>&nbsp;sản phẩm trong tháng trước</div>
                        </div>
                        <div class="detail-price-wrapper">
                            <span class = "detail-price">500,000</span>đ
                        </div>
                        <div class="detail-versions">
                            <div class="detail-variant">
                                <span class="variant-name">Size:</span>
                                <div>
                                    <span class="variant-item">S</span>
                                    <span class="variant-item">M</span>
                                    <span class="variant-item">L</span>

                                </div>
                            </div>
                            <div class="detail-variant">
                                <span class="variant-name">Màu:</span>
                                <div>
                                    <span class="variant-item">Đỏ</span>
                                    <span class="variant-item">Xanh</span>
                                    <span class="variant-item">Vàng</span>

                                </div>
                            </div>
                        </div>
                        <div class="detail-specs">
                            <table class="table-bordered">
                                <tr>
                                    <td>Thương hiệu</td>
                                    <td>Layali</td>
                                </tr>
                                <tr>
                                    <td>Dạng</td>
                                    <td>Chai</td>
                                </tr>
                                <tr>
                                    <td>Thành phần:</td>
                                    <td>A, B, C, D, E, F</td>
                                </tr>
                            </table>
                        </div>
                        <div class="detail-features">
                            <h6>Điểm nổi bật:</h6>
                            <span class="detail-feature-item">
                            LAYALI ROUGE: YOUR NEW SIGNATURE SCENT. Opens with finest notes of Papaya and uplifting Lemon. The beating heart of the fragrance brings out the deep resonance of Peach and Rose. Coconut and Hibiscus add depth to the aroma and inspire attention.
                            </span>
                            <span class="detail-feature-item">
                            INTENSELY CONCENTRATED PERSONAL AROMAS. A more traditional approach to perfumery from the Middle East. Experience our exquisite and exclusive range of handmade perfume oils in traditional attar style. For an intense and long lasting aroma projection.
                            </span>
                            <span class="detail-feature-item">
                            PURE QUALITY, ALCOHOL FREE FORMULATION. Perfect for sensitive skin types, our alcohol-free perfume oils are hypoallergenic and won't irritate skin. These all natural, hand crafted oils are safe for all and feature expertly curated fragrance notes.
                            </span>
                            <span class="detail-feature-item">
                            THE PERFECT MIX OF CULTURES AND PERFUMES. Carrying a legacy rooted in a blend of Western & Oriental craftsmanship, Swiss Arabian is a brand founded on duality that proudly celebrates the space in which two seemingly opposite worlds come together.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="detail-vendors-wrapper">
                        <h6>Hiện có 10 cửa hàng đang bán sản phẩm này.</h6>
                        <div class="detail-vendor-filter">
                            <div class="d-flex gx-2 mt-2">
                                <div class="col">
                                    <select name="province_id" id="province" class = "form-control" required>
                                        <option value="">Chọn giá</option>
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select name="district_id" id="district" class = "form-control"required>
                                        <option value="">Chọn tỉnh/thành phố</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="detail-vendor-wrapper">
                            <div class="detail-vendor-inner-wrapper">
                                <div class="detail-vendor-head">
                                    <div class="detail-vendor-img">
                                        <img src="{{url('aczreviews/front/images/sample_images/vendor-3.png')}}" alt="">
                                    </div>
                                    <div class="detail-vendor-name">
                                        <span title= "name">Chiaki.vn</span>
                                        <div class="detail-vendor-badges">
                                        <img src="{{url('aczreviews/front/images/icon_images/crown-crop-1.png')}}" title = "Bán chạy" alt="">
                                        <img src="{{url('aczreviews/front/images/icon_images/heart-crop-1.png')}}" title = "Yêu thích"alt="">
                                        <img src="{{url('aczreviews/front/images/icon_images/sale-crop-1.png')}}" title = "Giá thấp nhất" alt="">
                                    </div>
                                    </div>
                                </div>
                                <div class="detail-vendor-info">
                                    <span class="detail-vendor-address">Hà Nội</span>, <span class="detail-vendor-item-count" style = "color: #e02027">66</span>&nbsp;mặt hàng, Đã bán&nbsp;<span class="detail-vendor-sale-count" style = "color: #e02027"> 351</span>&nbsp;<a href="">Chi tiết</a>
                                </div>
                                <div >
                                    <span class="detail-vendor-price">500,000</span>đ
                                </div>
                                <div class="detail-vendor-offer">
                                    <span>Free ship</span>
                                    <span>Quà tặng</span>
                                    <span>Mã giảm giá</span>
                                </div>
                            </div>
                            <div class="detail-vendor-action">
                                <span ><i class="fa-solid fa-heart heart"></i></span>
                                <span class = "like"><i class="fa-solid fa-thumbs-up"></i></span>
                                <span class = "dislike"><i class="fa-solid fa-thumbs-down"></i></span>
                            </div>
                        </div>
                        <div class="detail-vendor-wrapper">
                            <div class="detail-vendor-inner-wrapper">
                                <div class="detail-vendor-head">
                                    <div class="detail-vendor-img">
                                        <img src="{{url('aczreviews/front/images/sample_images/vendor-4.png')}}" alt="">
                                    </div>
                                    <div class="detail-vendor-name">
                                        <span title= "name">Hasaki</span>
                                        <div class="detail-vendor-badges">
                                        <img src="{{url('aczreviews/front/images/icon_images/crown-crop-1.png')}}" title = "Bán chạy" alt="">
                                        <img src="{{url('aczreviews/front/images/icon_images/heart-crop-1.png')}}" title = "Yêu thích"alt="">
                                        <img src="{{url('aczreviews/front/images/icon_images/sale-crop-1.png')}}" title = "Giá thấp nhất" alt="">
                                    </div>
                                    </div>
                                </div>
                                <div class="detail-vendor-info">
                                    <span class="detail-vendor-address">Hà Nội</span>, <span class="detail-vendor-item-count" style = "color: #e02027">66</span>&nbsp;mặt hàng, Đã bán&nbsp;<span class="detail-vendor-sale-count" style = "color: #e02027"> 351</span>&nbsp;<a href="">Chi tiết</a>
                                </div>
                                <div >
                                    <span class="detail-vendor-price">500,000</span>đ
                                </div>
                                <div class="detail-vendor-offer">
                                    <span>Free ship</span>
                                    <span>Quà tặng</span>
                                    <span>Mã giảm giá</span>
                                </div>
                            </div>
                            <div class="detail-vendor-action">
                                <span ><i class="fa-solid fa-heart heart"></i></span>
                                <span class = "like"><i class="fa-solid fa-thumbs-up"></i></span>
                                <span class = "dislike"><i class="fa-solid fa-thumbs-down"></i></span>
                            </div>
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
                            <div class="tab-pane fade show active"id="detail-tab-description" role="tabpanel" aria-labelledby="detail-tab-description-tab">
                                <div class="product_desc m-auto p-3 mt-2">
                                    <h3 style = "text-align:center; font-weight: 600;color: #6C757D;margin-bottom: 24px;">Mô tả sản phẩm $product_details['product_name']</h3>
                                    $description['description']
                                </div>
                            </div>
                            <div class="tab-pane fade"id="detail-tab-specs" role="tabpanel">
                                <div class="m-auto p-3 mt-2"style = "min-height: 426px;">
                                    <h3 style = "text-align:center; font-weight: 600;color: #6C757D;margin-bottom: 24px;">Thông số sản phẩm $product_details['product_name']</h3>
                                    <table class="table table-bordered table-hover">
                                            <tr>
                                                <td><b>$filter['filter_name']</b></td>
                                                <td>
                                                filter['filter_name
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade"id="detail-tab-review"role="tabpanel">
                                    <h3 style = "text-align:center; font-weight: 600;color: #6C757D;margin-bottom: 24px;margin-top: 24px;">Đánh giá sản phẩm $product_details['product_name']</h3>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-xs-12 overflow-hidden">
                                            <div class="total-score-wrapper mt-5">
                                                <h6>Điểm đánh giá (Thang điểm 5)</h6>
                                                <div class="circle-wrapper">
                                                    <span>$rating_info['product_rating']</span>
                                                </div>
                                                <h6>$rating_info['product_rating_count'] đánh giá</h6>
                                            </div>
                                        </div>
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
                                                <form action="javascript:void(0);" id = "guest-rating-form">@csrf
                                                    <input type="hidden" id= "guest_rating_product_id" name = "product_id" value = "$product_details['id']">
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
                                                    </div>
                                                    <button type="submit" class="btn btn-primary mt-2">Gửi đánh giá</button>
                                                </form>
                                                <div id="guest-rating-message"></div>
                                                <h5>Gửi đánh giá của bạn:</h5>
                                                <form action="javascript:void(0);" id = "user-rating-form">@csrf
                                                    <input type="hidden" id= "user_rating_product_id" name = "product_id" value = "$product_details['id']">
                                                    <input type="hidden" id= "user_rating_user_id" name = "user_id" value = "Auth::user()->id">
                                                    <div class="form-group">
                                                        <label for="">Chọn sao đánh giá</label><br>
                                                        <div class="rate">
                                                            <input style = "display:none;" type="radio" id="user_rating_star5" name="user_rating" value="7" />
                                                            <label for="user_rating_star5" title="text">5 stars</label>
                                                            <input style = "display:none;" type="radio" id="user_rating_star4" name="user_rating" value="8" />
                                                            <label for="user_rating_star4" title="text">4 stars</label>
                                                            <input style = "display:none;" type="radio" id="user_rating_star3" name="user_rating" value="3" />
                                                            <label for="user_rating_star3" title="text">3 stars</label>
                                                            <input style = "display:none;" type="radio" id="user_rating_star2" name="user_rating" value="2" />
                                                            <label for="user_rating_star2" title="text">2 stars</label>
                                                            <input style = "display:none;" type="radio" id="user_rating_star1" name="user_rating" value="1" />
                                                            <label for="user_rating_star1" title="text">1 star</label>
                                                        </div><br>
                                                        <textarea class="form-control" name = "review" id = "review" rows="2" maxlength = "500" placeholder = "Nhập nội dung đánh giá"required></textarea>
                                                    </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary mt-2">Gửi đánh giá</button>
                                                </form>
                                                <div id="user-rating-message"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col">
                                            <div class="review-data-wrapper m-auto">
                                                <div class="review-data-header">
                                                    <h6>Đánh giá (<span>$rating_info['product_rating_count']</span>):</h6>
                                                </div>
                                                <div class="review-data-items">
                                                    <div class="review-item mb-2">
                                                        <div class="review-item-author">
                                                            </h6>
                                                            <h6>$rating['created_at']</h6>
                                                        </div>
                                                        <div class="review-item-content">
                                                            <p>$rating['review'] </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    </div>
</div>
@endsection