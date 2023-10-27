
<?php
use App\Models\aczreviews\Product;
use App\Models\aczreviews\ProductVersion;
?>
<div class="row gy-2">
    @foreach($products as $product)
    <div class="col-lg-3 col-md-4 col-xs-2">
        <div class="item m-auto">
            <a href="{{url('/product/'.$product['id'])}}" class="item-image-wrapper">
                <div class="item-image">
                    <img  src="{{url('aczreviews/front/images/product_images/medium/'.$product['image'])}}" alt="">
                </div>
            </a>
            <div class="item-details mt-2">
                <div class="item-name">{{$product['name']}}</div>
                <div class="">
                    <?php 
                        $rating_info = Product::get_rating($product['id']);
                        $is_rated = $rating_info['is_rated'];
                        if($is_rated=="no"){
                            $count = 5;
                            while($count>0) {
                                echo '<span style = "color:#ccc; font-size: 24px;">&#9733;</span>';
                                $count--;
                            }
                        }else{
                            $count = 0;
                            $total_count = 5- $rating_info['product_rating'];
                            while($count< $rating_info['product_rating']) {
                                echo '<span style = "color:#ffc700; font-size: 24px;">&#9733;</span>';
                                $count++;
                            }
                            while($total_count>0) {
                                echo '<span style = "color:#ccc; font-size: 24px;">&#9733;</span>';
                                $total_count--;
                            }
                        }
                    ?>
                    <span class="item-rating-count">{{$rating_info['product_rating_count']}}</span>
                </div>
                <p class="item-desc"><strong>Mã:</strong> {{$product['code']}}</p>
                @if($product['has_versions']=='no')
                    <span ><strong>Giá thấp nhất:</strong></span> <span class="item-price"><?php echo number_format($product['price'])?></span>đ
                    @else
                    <?php $version_with_lowest_price = ProductVersion::get_version_with_lowest_price($product['id'])?>
                    <span ><strong>Giá thấp nhất:</strong> <span class="item-price"><?php echo number_format($version_with_lowest_price['price'])?></span>đ</span>
                @endif
            </div>
        </div>
    </div>
    @endforeach
</div>