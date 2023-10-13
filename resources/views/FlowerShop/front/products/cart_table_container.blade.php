    <div class="cart-table-wrapper" >
        <table class = "table table-responsive" style = "border: 1px solid #e62263;">
            <thead style = "background: #e62263; color: #fff; font-size: 16px;">
                <tr>
                    <th>Sản phẩm</th>
                    <th>Giá</td>
                    <th>Số lượng</th>
                    <th>Cộng</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                <tr>
                    <td>
                        <div class="cart-item">
                            <a href="/product/{{$item['product']['id']}}">
                                @if(empty($item['image']))
                                <img src="{{url('FlowerShop/front/images-3/product_images/medium/'.$item['product']['product_image'])}}" alt="">
                                @else
                                <img src="{{$item['image']}}" alt="">
                                @endif
                                <h5>{{$item['product']['product_name']}}</h5>
                                <div class="cart-item-versions pb-3">
                                @if(!empty($item['attr']['size']))
                                Size: <span>{{$item['attr']['size']}}</span><br>
                                @endif
                                @if(!empty($item['attr']['v_color']))
                                Màu: <span>{{$item['attr']['v_color']}}</span>
                                @endif
                                </div>
                            </a>
                        </div>
                    </td>
                    <td style ="color: #e02027; font-size: 16px; font-weight: 700;"><?php echo number_format($item['price']) ?></td>
                    <td>
                        <div id="failed_stock_message_{{$item['id']}}">
                        </div>
                        <div class = "cart-quantity ">
                            <a href="javascript:void(0)" class = "update-quantity update-quantity-minus" data-quantity = "{{$item['quantity']}}" data-item-id = "{{$item['id']}}">-</a>
                            <input type="number" value = "{{$item['quantity']}}" class = "quantity-input" data-item-id = "{{$item['id']}}" id = "quantity_input{{$item['id']}}" min = "1" max = "500">
                            <a href="javascript:void(0)" class = "update-quantity update-quantity-plus"data-quantity = "{{$item['quantity']}}" data-item-id = "{{$item['id']}}">+</a>
                        </div>
                    </td>
                    <td style ="color: #e02027; font-size: 16px; font-weight: 700; "><?php echo number_format($item['sub_total']) ?></td>
                    <td><a style = "margin-right: 6px;" href="/cart" class="btn btn-primary hide-on-mobile">Refresh</a><button class="btn btn-danger cart-item-delete-btn hide-on-mobile" data-cart-item-id = "{{$item['id']}}" >Xóa</button><a href="javascript:void(0)" style = "color: #e02027; font-size: 36px;"class="cart-item-delete-btn-mobile hide-on-desktop">&times;</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @if(count($items) > 0)
        <div class="coupon-field" style = "margin-top: 24px;">
            <div class="w-50" style = "margin-right: auto;">
                    <div class="coupon-input input-group">
                        <input type="text" class="form-control"  name = "coupon_code" id = "coupon_code" placeholder = "Nhập mã giảm giá (nếu có)">
                        <div class="input-group-append">
                        <button class="btn btn-outline-secondary mr-2" id = "coupon-submit-btn">Xác nhận</button>
                        </div>
                    </div>
                    <div id = "coupon_message_container" class = "mt-2"></div>
            </div>
        </div>
        <div class="total-price" style = "margin-top: 24px;">
            <div class="w-50" style = "margin-left: auto;text-align: right;">
                <h6><b>Tổng đơn hàng: </b> <span id= "total_price"style ="color: #e02027; font-size: 18px; font-weight: 700; "><?php echo number_format($total_price) ?></span>đ</h6>
            </div>
        </div>
        <div class="cart-action" style = "margin-top: 24px;text-align: right;">
            <div class="cart-action-wrapper w-50" style = "margin-left:auto">
                <a  href="{{url('/checkout')}}" class="btn btn-danger" style = "background-color: #e62263">Đến trang thanh toán</a>
                <a class="btn btn-secondary" href="/">Tiếp tục mua sắm</a>
            </div>
        </div>
        @else
        <div>
            <h6 style = "margin:auto; width: 50%; text-align:center; padding: 12px 0px;">Chưa có sản phẩm nào trong giỏ hàng!</h6>
            <a class="btn btn-secondary" style = "width: 20%;background-color: #e62263;border:none; display: block;margin:auto" href="/">Về trang chủ</a>
        </div>
        @endif
    </div>
