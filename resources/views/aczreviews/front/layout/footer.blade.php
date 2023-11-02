
<div class="footer-section">
    <div class="footer-section-first">
        <div class="container overflow-hidden" style = "background-color:inherit;">
            <div class="row">
                <div class="footer-first-wrapper">
                    <div class="newsletter-wrapper">
                        <div class="newsletter-header">
                            <h5><b>Đăng ký nhận thông tin, giảm giá, ưu đãi</b></h5>
                            <h6>Mời bạn nhập email</h6>
                            <form action="javascript:void(0);">
                            <div class="coupon-input input-group">
                                    <input type="text" class="form-control"  name = "subscriber-email" id = "subscriber-email" placeholder = "Nhập email ...">
                                <div class="input-group-append">
                                    <button class="btn mr-2" id = "subscriber-submit-btn">Gửi</button>
                                </div>
                            </div>
                            <div id="subscriber-email-message">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-section-second">
        <div class="container overflow-hidden" style = "background-color:inherit;">
            <div class="row">
                <div class="footer-second-wrapper">
                    <div class="shop-list-wrapper">
                        <div class="shop-list-header">
                            <h3>ACZREVIEWS - TRANG VIEW SẢN PHẨM HÀNG ĐẦU VIỆT NAM!</h3>
                        </div>
                        <div class="shop-list-content">
                            <div class="row">
                                <div class="footer-contact-wrapper">
                                    <h5>Thông tin liên hệ:</h5>
                                    <div class="footer-contact-details">
                                        <div><h6>Admin: </h6>&nbsp;<span>Kien Nguyen</span></div>
                                        <div><h6>Điện thoại: </h6>&nbsp;<span>0964 666 156</span></div>
                                        <div><h6>Email:</h6>&nbsp;<span>trungkien2411@gmail.com</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-menu-header">
                                <h4>DANH MỤC SẢN PHẨM</h4>
                            </div>
                            <div class="row">
                                <?php 
                                use App\Models\aczreviews\Department;
                                    $departments = Department::with(['sections'=>function($query){
                                        $query->with('categories')->get()->toArray();
                                    }])->get()->toArray();
                                ?>
                                @foreach($departments as $department)
                                <div class="col-lg-4 col-md-4 col-xs-12">
                                    <div class="footer-menu-item-wrapper">
                                    <div class="shop-list-title">
                                        <h5 class="">★ {{$department['department_name']}}</h5>
                                    </div>
                                    @foreach($department['sections'] as $section)
                                    <h6>{{$section['section_name']}}</h6>
                                    <ul class="footer-list">
                                    @foreach($section['categories'] as $category)
                                        <li>
                                            <a href="">
                                            {{$category['category_name']}}
                                            </a>
                                        </li>
                                    @endforeach
                                    </ul>
                                    @endforeach
                                    <hr>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="end-section">
                                <p>© 2023 Aczreviews. All Rights Reserved. Designed by Kien Nguyen.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>