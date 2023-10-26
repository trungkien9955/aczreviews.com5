<?php
use App\Models\aczreviews\ProductFilter;
?>
<div class="col-lg-3">
    <div class="filter-wrapper">
        <span style = "font-weight:bold; font-size = 18px;" >Bộ lọc</span>
        <?php
        $prices = array('0-100000', '100000-200000', '200000-500000', '500000-1000000')
        ?>
        <div class="filter-item">
            <span style = "font-weight:bold;">Giá</span>
            <form action="" method = "post">
                @foreach($prices as $key => $price)
                <div class="form-check">
                    <input class="form-check-input price" type="checkbox" value="{{$price}}" id="price{{$key}}">
                    <label class="form-check-label" for="price{{$key}}">
                    {{$price}}
                    </label>
                </div>
                @endforeach
            </form>
        </div>
        <?php
        $brands = ProductFilter::get_brands($category['url']);
        ?>
        @if(count($brands)>0)
        <div class="filter-item">
            <span style = "font-weight:bold;">Nhãn hiệu</span>
            <form action="" method = "post">
                @foreach($brands as $key => $brand)
                <div class="form-check">
                    <input class="form-check-input brand" type="checkbox" value="{{$brand['id']}}" id="brand{{$key}}">
                    <label class="form-check-label" for="brand{{$key}}">
                    {{$brand['name']}}
                    </label>
                </div>
                @endforeach
            </form>
        </div>
        @endif
        <?php
        $sizes = ProductFilter::get_sizes($category['url']);
        ?>
        @if(count($sizes)>0)
        <div class="filter-item">
            <span style = "font-weight:bold;">Size</span>
            <form action="" method = "post">
                @foreach($sizes as $key => $size)
                <div class="form-check">
                    <input class="form-check-input size" type="checkbox" value="{{$size}}" id="size{{$key}}">
                    <label class="form-check-label" for="size{{$key}}">
                    {{$size}}
                    </label>
                </div>
                @endforeach
            </form>
        </div>
        @endif
        <?php
        $colors = ProductFilter::get_colors($category['url']);
        ?>
        @if(count($colors)>0)
        <div class="filter-item">
            <span style = "font-weight:bold;">Màu sắc</span>
            <form action="" method = "post">
                @foreach($colors as $key => $color)
                <div class="form-check">
                    <input class="form-check-input color" type="checkbox" value="{{$color}}" id="color{{$key}}">
                    <label class="form-check-label" for="color{{$key}}">
                    {{$color}}
                    </label>
                </div>
                @endforeach
            </form>
        </div>
        @endif
    </div>
</div>