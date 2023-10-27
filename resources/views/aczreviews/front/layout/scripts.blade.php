<?php
use App\Models\FlowerShop\ProductFilter;
?>
<script>
    $(document).ready(function(){
        function get_filter(class_name){
            var filter = [];
            $('.'+class_name+':checked').each(function(){
                filter.push($(this).val());
            })
            return filter;
        }
        $('#sorter').on('change', function(){
            var price = get_filter('price');
            var brand = get_filter('brand');
            var size = get_filter('size');
            var color = get_filter('color');
            var sorter = $('#sorter').val();
            var url = $('#url').val();
            $.ajax({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: 'GET',
                url:url,
                data: {price:price, brand:brand, size:size, color:color, sorter:sorter, url},
                success: function(resp){
                    $("#ajax_loading_overlay").fadeOut(300);
                    // alert(resp);
                    $('.filter-products-container').html(resp);
                },
                error: function(){
                    $("#ajax_loading_overlay").fadeOut(300);
                    alert('error');
                }
            })
        })
        $('.price').on('change', function(){
            var price = get_filter('price');
            var brand = get_filter('brand');
            var size = get_filter('size');
            var color = get_filter('color');
            var sorter = $('#sorter').val();
            var url = $('#url').val();

            $.ajax({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: 'GET',
                url:url,
                data: {price:price, brand:brand, size:size, color:color, sorter:sorter, url},
                success: function(resp){
                    $("#ajax_loading_overlay").fadeOut(300);
                    $('.filter-products-container').html(resp);
                },
                error: function(){
                    $("#ajax_loading_overlay").fadeOut(300);
                    alert('error');
                }
            })
        })
        $('.brand').on('change', function(){
            var price = get_filter('price');
            var brand = get_filter('brand');
            var size = get_filter('size');
            var color = get_filter('color');
            var sorter = $('#sorter').val();
            var url = $('#url').val();
            $.ajax({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: 'GET',
                url:url,
                data: {price:price, brand:brand, size:size, color:color, sorter:sorter, url},
                success: function(resp){
                    // alert(resp);
                    $("#ajax_loading_overlay").fadeOut(300);
                    $('.filter-products-container').html(resp);
                },
                error: function(){
                    $("#ajax_loading_overlay").fadeOut(300);
                    alert('error');
                }
            })
        })
        $('.size').on('change', function(){
            var price = get_filter('price');
            var brand = get_filter('brand');
            var size = get_filter('size');
            var color = get_filter('color');
            var sorter = $('#sorter').val();
            var url = $('#url').val();
            $.ajax({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: 'GET',
                url:url,
                data: {price:price, brand:brand, size:size, color:color, sorter:sorter, url},
                success: function(resp){
                    // alert(resp);
                    $("#ajax_loading_overlay").fadeOut(300);
                    $('.filter-products-container').html(resp);
                },
                error: function(){
                    $("#ajax_loading_overlay").fadeOut(300);
                    alert('error');
                }
            })
        })
        $('.color').on('change', function(){
            var price = get_filter('price');
            var brand = get_filter('brand');
            var size = get_filter('size');
            var color = get_filter('color');
            var sorter = $('#sorter').val();
            var url = $('#url').val();
            $.ajax({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: 'GET',
                url:url,
                data: {price:price, brand:brand, size:size, color:color, sorter:sorter, url},
                success: function(resp){
                    // alert(resp);
                    $("#ajax_loading_overlay").fadeOut(300);
                    $('.filter-products-container').html(resp);
                },
                error: function(){
                    $("#ajax_loading_overlay").fadeOut(300);
                    alert('error');
                }
            })
        })
    })
</script>