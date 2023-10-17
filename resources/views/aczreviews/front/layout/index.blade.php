@extends('aczreviews.front.layout.layout')
@section('content')
<div class="main-section">
    <div class="banner-section">
        <div class="container overflow-hidden">
            <div class="home-banner">
                <div class="home-banner-wrapper owl-carousel owl-carousel-home-banners">
                    <img src="{{url('aczreviews/front/images/banner_images/banner-1.jpg')}}" alt="">
                    <img src="{{url('aczreviews/front/images/banner_images/banner-2.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="products-section">
        <div class="container overflow-hidden">
            <div class="products-section-wrapper">
                <div class="home-department-wrapper">
                    <div class="home-deparment-title">
                        <a href=""></a><h3>Mỹ phẩm và chăm sóc cơ thể</h3>
                    </div>
                    <div class="home-department-banner">
                        <img src="{{url('aczreviews/front/images/banner_images/home-banner-1.jpg')}}" alt="">
                    </div>
                    <div class="home-department-content">
                        <div class="row gy-2">
                            <div class="col-lg-3 col-md-3 col-xs-6">
                                <div class="home-block">
                                    <div class="home-block-title">
                                        <h5>Trang điểm</h5>
                                    </div>
                                    <div class="home-block-content home-block-content-four-img">
                                        <div class="home-block-content-item ">
                                        <div class="home-block-content-item-img">
                                        <img src="{{url('aczreviews/front/images/other_images/face-makeup.jpg')}}" alt="">
                                        </div>
                                        <div class="home-block-content-item-title">
                                            <span>Mặt</span>
                                        </div>
                                        </div>
                                        <div class="home-block-content-item">
                                        <div class="home-block-content-item-img">
                                        <img src="{{url('aczreviews/front/images/other_images/lipsticks-1.jpg')}}" alt="">
                                        </div>
                                        <div class="home-block-content-item-title">
                                            <span>Son môi</span>
                                        </div>
                                        </div>
                                        <div class="home-block-content-item">
                                        <div class="home-block-content-item-img">
                                        <img src="{{url('aczreviews/front/images/other_images/eye-makeup.jpg')}}" alt="">
                                        </div>
                                        <div class="home-block-content-item-title">
                                            <span>Mắt/lông mày</span>
                                        </div>
                                        </div>
                                        <div class="home-block-content-item">
                                        <div class="home-block-content-item-img">
                                        <img src="{{url('aczreviews/front/images/other_images/makeup-set.jpg')}}" alt="">
                                        </div>
                                        <div class="home-block-content-item-title">
                                            <span>Bộ trang điểm</span>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-xs-6">
                                <div class="home-block">
                                    <div class="home-block-title">
                                        <h5>Skin care</h5>
                                    </div>
                                    <div class="home-block-content home-block-content-two-img">
                                        <div class="home-block-content-item">
                                            <div class="home-block-content-item-img">
                                            <img src="{{url('aczreviews/front/images/other_images/skin-lightening-1.jpg')}}" alt="">
                                            </div>
                                            <div class="home-block-content-item-title">
                                            <span>Làm trắng da</span>
                                            </div>
                                        </div>
                                        <div class="home-block-content-item">
                                            <div class="home-block-content-item-img">
                                            <img src="{{url('aczreviews/front/images/other_images/skin-lightening-2.jpg')}}" alt="">
                                            </div>
                                            <div class="home-block-content-item-title">
                                            <span>Trị mụn/sẹo...</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-xs-6">
                                <div class="home-block">
                                    <div class="home-block-title">
                                        <h5>Nước hoa</h5>
                                    </div>
                                    <div class="home-block-content home-block-content-four-img">
                                        <div class="home-block-content-item ">
                                        <div class="home-block-content-item-img">
                                        <img src="{{url('aczreviews/front/images/other_images/women-purfume-1.jpg')}}" alt="">
                                        </div>
                                        <div class="home-block-content-item-title">
                                            <span>Dolce & Gabbana</span>
                                        </div>
                                        </div>
                                        <div class="home-block-content-item">
                                        <div class="home-block-content-item-img">
                                        <img src="{{url('aczreviews/front/images/other_images/women-purfume-2.jpg')}}" alt="">
                                        </div>
                                        <div class="home-block-content-item-title">
                                            <span>Versace</span>
                                        </div>
                                        </div>
                                        <div class="home-block-content-item">
                                        <div class="home-block-content-item-img">
                                        <img src="{{url('aczreviews/front/images/other_images/women-purfume-3.jpg')}}" alt="">
                                        </div>
                                        <div class="home-block-content-item-title">
                                            <span>Chanel</span>
                                        </div>
                                        </div>
                                        <div class="home-block-content-item">
                                        <div class="home-block-content-item-img">
                                        <img src="{{url('aczreviews/front/images/other_images/women-purfume-4.jpg')}}" alt="">
                                        </div>
                                        <div class="home-block-content-item-title">
                                            <span>Victoria's Secret</span>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-xs-6">
                                <div class="home-block">
                                    <div class="home-block-title">
                                        <h5>Hair care</h5>
                                    </div>
                                    <div class="home-block-content home-block-content-one-img">
                                        <div class="home-block-content-item">
                                            <div class="home-block-content-item-img">
                                            <img src="{{url('aczreviews/front/images/other_images/hair-care-3.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-department-wrapper">
                    <div class="home-deparment-title">
                        <a href=""></a><h3>Mỹ phẩm nam</h3>
                    </div>
                    <div class="home-department-banner">
                        <img src="{{url('aczreviews/front/images/banner_images/men-beauty-banner-1.jpg')}}" alt="">
                    </div>
                    <div class="home-department-content">
                        <div class="row gy-2">
                            <div class="col-lg-3 col-md-3 col-xs-6">
                                <div class="home-block">
                                    <div class="home-block-title">
                                        <h5>Làm trắng da</h5>
                                    </div>
                                    <div class="home-block-content home-block-content-four-img">
                                        <div class="home-block-content-item ">
                                        <div class="home-block-content-item-img">
                                        <img src="{{url('aczreviews/front/images/other_images/face-makeup.jpg')}}" alt="">
                                        </div>
                                        <div class="home-block-content-item-title">
                                            <span>Mặt</span>
                                        </div>
                                        </div>
                                        <div class="home-block-content-item">
                                        <div class="home-block-content-item-img">
                                        <img src="{{url('aczreviews/front/images/other_images/lipsticks-1.jpg')}}" alt="">
                                        </div>
                                        <div class="home-block-content-item-title">
                                            <span>Son môi</span>
                                        </div>
                                        </div>
                                        <div class="home-block-content-item">
                                        <div class="home-block-content-item-img">
                                        <img src="{{url('aczreviews/front/images/other_images/eye-makeup.jpg')}}" alt="">
                                        </div>
                                        <div class="home-block-content-item-title">
                                            <span>Mắt/lông mày</span>
                                        </div>
                                        </div>
                                        <div class="home-block-content-item">
                                        <div class="home-block-content-item-img">
                                        <img src="{{url('aczreviews/front/images/other_images/makeup-set.jpg')}}" alt="">
                                        </div>
                                        <div class="home-block-content-item-title">
                                            <span>Bộ trang điểm</span>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-xs-6">
                                <div class="home-block">
                                    <div class="home-block-title">
                                        <h5>Skin care</h5>
                                    </div>
                                    <div class="home-block-content home-block-content-two-img">
                                        <div class="home-block-content-item">
                                            <div class="home-block-content-item-img">
                                            <img src="{{url('aczreviews/front/images/other_images/skin-lightening-1.jpg')}}" alt="">
                                            </div>
                                            <div class="home-block-content-item-title">
                                            <span>Làm trắng da</span>
                                            </div>
                                        </div>
                                        <div class="home-block-content-item">
                                            <div class="home-block-content-item-img">
                                            <img src="{{url('aczreviews/front/images/other_images/skin-lightening-2.jpg')}}" alt="">
                                            </div>
                                            <div class="home-block-content-item-title">
                                            <span>Trị mụn/sẹo...</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-xs-6">
                                <div class="home-block">
                                    <div class="home-block-title">
                                        <h5>Trang điểm</h5>
                                    </div>
                                    <div class="home-block-content home-block-content-four-img">
                                        <div class="home-block-content-item ">
                                        <div class="home-block-content-item-img">
                                        <img src="{{url('aczreviews/front/images/other_images/face-makeup.jpg')}}" alt="">
                                        </div>
                                        <div class="home-block-content-item-title">
                                            <span>Mặt</span>
                                        </div>
                                        </div>
                                        <div class="home-block-content-item">
                                        <div class="home-block-content-item-img">
                                        <img src="{{url('aczreviews/front/images/other_images/lipsticks-1.jpg')}}" alt="">
                                        </div>
                                        <div class="home-block-content-item-title">
                                            <span>Son môi</span>
                                        </div>
                                        </div>
                                        <div class="home-block-content-item">
                                        <div class="home-block-content-item-img">
                                        <img src="{{url('aczreviews/front/images/other_images/eye-makeup.jpg')}}" alt="">
                                        </div>
                                        <div class="home-block-content-item-title">
                                            <span>Mắt/lông mày</span>
                                        </div>
                                        </div>
                                        <div class="home-block-content-item">
                                        <div class="home-block-content-item-img">
                                        <img src="{{url('aczreviews/front/images/other_images/makeup-set.jpg')}}" alt="">
                                        </div>
                                        <div class="home-block-content-item-title">
                                            <span>Bộ trang điểm</span>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-xs-6">
                                <div class="home-block">
                                    <div class="home-block-title">
                                        <h5>Skin care</h5>
                                    </div>
                                    <div class="home-block-content home-block-content-two-img">
                                        <div class="home-block-content-item">
                                            <div class="home-block-content-item-img">
                                            <img src="{{url('aczreviews/front/images/other_images/skin-lightening-1.jpg')}}" alt="">
                                            </div>
                                            <div class="home-block-content-item-title">
                                            <span>Làm trắng da</span>
                                            </div>
                                        </div>
                                        <div class="home-block-content-item">
                                            <div class="home-block-content-item-img">
                                            <img src="{{url('aczreviews/front/images/other_images/skin-lightening-2.jpg')}}" alt="">
                                            </div>
                                            <div class="home-block-content-item-title">
                                            <span>Trị mụn/sẹo...</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-department-wrapper home-department-wrapper-supplements">
                    <div class="home-deparment-title">
                        <a href=""></a><h3>Thực phẩm chức năng</h3>
                    </div>
                    <div class="home-department-banner">
                        <img src="{{url('aczreviews/front/images/banner_images/supplements-banner-2.png')}}" alt="">
                    </div>
                    <div class="home-department-content">
                        <div class="row gy-2">
                            <div class="col-lg-2 col-md-2 col-xs-4">
                                <a href="">
                                    <div class="home-block-supplements">
                                        <div class="home-block-supplements-inner-wrapper">
                                            <div class="home-block-icon-supplements">
                                            <img src="{{url('aczreviews/front/images/icon_images/amino-blue-crop.png')}}" alt="">
                                            </div>
                                            <div class="home-block-title-supplements">
                                                <span>Amino acid/Protein</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-xs-4">
                                <a href="">
                                    <div class="home-block-supplements">
                                        <div class="home-block-supplements-inner-wrapper">
                                            <div class="home-block-icon-supplements">
                                            <img src="{{url('aczreviews/front/images/icon_images/antioxidant.png')}}" alt="">
                                            </div>
                                            <div class="home-block-title-supplements">
                                                <span>Chống oxy hóa</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-xs-4">
                                <a href="">
                                    <div class="home-block-supplements">
                                        <div class="home-block-supplements-inner-wrapper">
                                            <div class="home-block-icon-supplements">
                                            <img src="{{url('aczreviews/front/images/icon_images/collagen.png')}}" alt="">
                                            </div>
                                            <div class="home-block-title-supplements">
                                                <span>Collagen</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-xs-4">
                                <a href="">
                                    <div class="home-block-supplements">
                                        <div class="home-block-supplements-inner-wrapper">
                                            <div class="home-block-icon-supplements">
                                            <img src="{{url('aczreviews/front/images/icon_images/digestive.png')}}" alt="">
                                            </div>
                                            <div class="home-block-title-supplements">
                                                <span>Hỗ trợ tiêu hóa</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-xs-4">
                                <a href="">
                                    <div class="home-block-supplements">
                                        <div class="home-block-supplements-inner-wrapper">
                                            <div class="home-block-icon-supplements">
                                            <img src="{{url('aczreviews/front/images/icon_images/herbal.png')}}" alt="">
                                            </div>
                                            <div class="home-block-title-supplements">
                                                <span>Thảo dược</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-xs-4">
                                <a href="">
                                    <div class="home-block-supplements">
                                        <div class="home-block-supplements-inner-wrapper">
                                            <div class="home-block-icon-supplements">
                                            <img src="{{url('aczreviews/front/images/icon_images/enzyme.png')}}" alt="">
                                            </div>
                                            <div class="home-block-title-supplements">
                                                <span>Enzyme</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-department-wrapper home-department-wrapper-vitamins">
                    <div class="home-deparment-title">
                        <a href=""></a><h3>Vitamins/Khoáng chất</h3>
                    </div>
                    <div class="home-department-banner">
                        <img src="{{url('aczreviews/front/images/banner_images/vitamins-banner.png')}}" alt="">
                    </div>
                    <div class="home-department-content">
                        <div class="row gy-2">
                            <div class="col-lg-2 col-md-2 col-xs-4">
                                <a href="">
                                    <div class="home-block-vitamins">
                                        <div class="home-block-vitamins-inner-wrapper">
                                            <div class="home-block-icon-vitamins">
                                            <img src="{{url('aczreviews/front/images/icon_images/multivitamins.png')}}" alt="">
                                            </div>
                                            <div class="home-block-title-vitamins">
                                                <span>Multivitamins</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-xs-4">
                                <a href="">
                                    <div class="home-block-vitamins">
                                        <div class="home-block-vitamins-inner-wrapper">
                                            <div class="home-block-icon-vitamins">
                                            <img src="{{url('aczreviews/front/images/icon_images/pragnancy.png')}}" alt="">
                                            </div>
                                            <div class="home-block-title-vitamins">
                                                <span>Vitamin bà bầu</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-xs-4">
                                <a href="">
                                    <div class="home-block-vitamins">
                                        <div class="home-block-vitamins-inner-wrapper">
                                            <div class="home-block-icon-vitamins">
                                            <img src="{{url('aczreviews/front/images/icon_images/vitamin-a.png')}}" alt="">
                                            </div>
                                            <div class="home-block-title-vitamins">
                                                <span>Vitamin A</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-xs-4">
                                <a href="">
                                    <div class="home-block-vitamins">
                                        <div class="home-block-vitamins-inner-wrapper">
                                            <div class="home-block-icon-vitamins">
                                            <img src="{{url('aczreviews/front/images/icon_images/vitamin-c.png')}}" alt="">
                                            </div>
                                            <div class="home-block-title-vitamins">
                                                <span>Vitamin C</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-xs-4">
                                <a href="">
                                    <div class="home-block-vitamins">
                                        <div class="home-block-vitamins-inner-wrapper">
                                            <div class="home-block-icon-vitamins">
                                            <img src="{{url('aczreviews/front/images/icon_images/vitamin-d.png')}}" alt="">
                                            </div>
                                            <div class="home-block-title-vitamins">
                                                <span>Vitamin D</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-xs-4">
                                <a href="">
                                    <div class="home-block-vitamins">
                                        <div class="home-block-vitamins-inner-wrapper">
                                            <div class="home-block-icon-vitamins">
                                            <img src="{{url('aczreviews/front/images/icon_images/vitamin-e.png')}}" alt="">
                                            </div>
                                            <div class="home-block-title-vitamins">
                                                <span>Vitamin E</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-department-wrapper home-department-wrapper-sport">
                    <div class="home-deparment-title">
                        <a href=""></a><h3>Dinh dưỡng thể thao</h3>
                    </div>
                    <div class="home-department-banner">
                        <img src="{{url('aczreviews/front/images/banner_images/sport-banner-2.jpg')}}" alt="">
                    </div>
                    <div class="home-department-content">
                        <div class="row gy-2">
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <a href="">
                                    <div class="home-block-sport">
                                        <div class="home-block-sport-inner-wrapper">
                                            <div class="home-block-icon-sport">
                                            <img src="{{url('aczreviews/front/images/banner_images/banner-sport-item.png')}}" alt="">
                                            </div>
                                            <div class="home-block-title-sport">
                                                <span>Whey protein</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <a href="">
                                    <div class="home-block-sport">
                                        <div class="home-block-sport-inner-wrapper">
                                            <div class="home-block-icon-sport">
                                            <img src="{{url('aczreviews/front/images/banner_images/banner-sport-item-2.png')}}" alt="">
                                            </div>
                                            <div class="home-block-title-sport">
                                                <span>Sản phẩm hỗ trợ tăng cân</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection