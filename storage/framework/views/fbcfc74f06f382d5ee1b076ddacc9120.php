<?php 
use App\Models\aczreviews\ProductVersion ;
use App\Models\aczreviews\Product;
?>

<?php $__env->startSection('content'); ?>
<div class="listing-section mb-3">
    <div class="container overflow-hidden">
        <div class="row mt-1">
            <div class="col">
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb ">
                        <li class="breadcrumb-item"><a href="">Link 1</a></li>
                        <li class="breadcrumb-item"><a href="">Link 2</a></li>
                        <li class="breadcrumb-item active"><a href="">Link 3</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row mt-1">
            <div class="col">
                <div class="listing-title">
                    <h3><span><?php echo e($category['category_name']); ?></span>&nbsp;(<span><?php echo e($count); ?></span>&nbsp;sản phẩm)</h3>
                </div>
            </div>
        </div>
        <div class="row mt-3 mb-3">
            <div class="col ">
                <div class="sorter-wrapper clearfix">
                    <div class="sorter w-20" >
                        <form action="" name = "sorter">
                            <input type="hidden" name = "url" id= "url" value = <?php echo e($url); ?>>
                            <div class="form-group">
                                <select name="sorter" id="sorter" class = "form-control" method = "GET">
                                    <option value="">Sắp xếp</option>
                                    <option value="lowest">Giá từ thấp đến cao</option>
                                    <option value="highest">Giá từ cao đến thấp</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        <?php echo $__env->make('aczreviews.front.products.filters', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="col-lg-9">
                <div class="row gy-2 filter-products-container">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-4 col-xs-2">
                        <div class="item m-auto">
                            <a href="<?php echo e(url('/product/'.$product['id'])); ?>" class="item-image-wrapper">
                                <div class="item-image">
                                    <img  src="<?php echo e(url('aczreviews/front/images/product_images/large/'.$product['image'])); ?>" alt="">
                                </div>
                            </a>
                            <div class="item-details mt-2">
                                <div class="item-name"><?php echo e($product['name']); ?></div>
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
                                    <span class="item-rating-count"><?php echo e($rating_info['product_rating_count']); ?></span>
                                </div>
                                <p class="item-desc"><strong>Mã:</strong> <?php echo e($product['code']); ?></p>                                    
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('aczreviews.front.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aczreviews\resources\views/aczreviews/front/products/listing.blade.php ENDPATH**/ ?>