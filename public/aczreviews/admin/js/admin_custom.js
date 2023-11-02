$(document).ready(function(){
    $('#departments').DataTable();
    $('#sections').DataTable();
    $('#categories').DataTable();
    $('#products').DataTable();
    $('#vendors').DataTable();
})
$(document).on("click", ".update_department_status", function() {
    var status = $(this).children("i").attr("status");
    var department_id = $(this).data("department-id");
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        url: '/admin/update-department-status',
        data: {status:status, department_id:department_id},
        success:function(resp){
            $("#ajax_loading_overlay").fadeOut(300);
            if(resp["status"]==0){
                $(`a[data-department-id= ${resp.department_id}]`).html('<i style = "font-size:24px; color: red;"class = "fa-solid fa-circle-xmark" status = "inactive"></i>');
            }
            else if(resp["status"]==1){
                $(`a[data-department-id= ${resp.department_id}]`).html('<i style = "font-size:24px; color: green;" class="fa-solid fa-circle-check" status = "active"></i>');
            }
        },
        error:function(){
        $("#ajax_loading_overlay").fadeOut(300);
            alert("Error");
        }
    })
})
$(document).on("click", ".update_section_status", function() {
    var status = $(this).children("i").attr("status");
    var section_id = $(this).data("section-id");
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        url: '/admin/update-section-status',
        data: {status:status, section_id:section_id},
        success:function(resp){
            $("#ajax_loading_overlay").fadeOut(300);
            if(resp["status"]==0){
                $(`a[data-section-id= ${resp.section_id}]`).html('<i style = "font-size:24px; color: red;"class = "fa-solid fa-circle-xmark" status = "inactive"></i>');
            }
            else if(resp["status"]==1){
                $(`a[data-section-id= ${resp.section_id}]`).html('<i style = "font-size:24px; color: green;" class="fa-solid fa-circle-check" status = "active"></i>');
            }
        },
        error:function(){
        $("#ajax_loading_overlay").fadeOut(300);
            alert("Error");
        }
    })
})
$(document).on("click", ".update_category_status", function() {
    var status = $(this).children("i").attr("status");
    var category_id = $(this).data("category-id");
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        url: '/admin/update-category-status',
        data: {status:status, category_id:category_id},
        success:function(resp){
            $("#ajax_loading_overlay").fadeOut(300);
            if(resp["status"]==0){
                $(`a[data-category-id= ${resp.category_id}]`).html('<i style = "font-size:24px; color: red;"class = "fa-solid fa-circle-xmark" status = "inactive"></i>');
            }
            else if(resp["status"]==1){
                $(`a[data-category-id= ${resp.category_id}]`).html('<i style = "font-size:24px; color: green;" class="fa-solid fa-circle-check" status = "active"></i>');
            }
        },
        error:function(){
        $("#ajax_loading_overlay").fadeOut(300);
            alert("Error");
        }
    })
})
$(document).on("click", ".update_product_status", function() {
    var status = $(this).children("i").attr("status");
    var product_id = $(this).data("product-id");
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        url: '/admin/update-product-status',
        data: {status:status, product_id:product_id},
        success:function(resp){
            $("#ajax_loading_overlay").fadeOut(300);
            if(resp["status"]==0){
                $(`a[data-product-id= ${resp.product_id}]`).html('<i style = "font-size:24px; color: red;"class = "fa-solid fa-circle-xmark" status = "inactive"></i>');
            }
            else if(resp["status"]==1){
                $(`a[data-product-id= ${resp.product_id}]`).html('<i style = "font-size:24px; color: green;" class="fa-solid fa-circle-check" status = "active"></i>');
            }
        },
        error:function(){
        $("#ajax_loading_overlay").fadeOut(300);
            alert("Error");
        }
    })
})
$(document).on("click", ".update_product_feature_status", function() {
    var status = $(this).children("i").attr("status");
    var product_id = $(this).data("feature-product-id");
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        url: '/admin/update-product-feature-status',
        data: {status:status, product_id:product_id},
        success:function(resp){
            $("#ajax_loading_overlay").fadeOut(300);
            if(resp["status"]=="no"){
                $(`a[data-feature-product-id= ${resp.product_id}]`).html('<i style = "font-size:24px; color: red;"class = "fa-solid fa-circle-xmark" status = "no"></i>');
            }
            else if(resp["status"]=="yes"){
                $(`a[data-feature-product-id= ${resp.product_id}]`).html('<i style = "font-size:24px; color: green;" class="fa-solid fa-circle-check" status = "yes"></i>');
            }
        },
        error:function(){
        $("#ajax_loading_overlay").fadeOut(300);
            alert("Error");
        }
    })
})
$(document).on("click", ".update_product_versions_status", function() {
    var status = $(this).children("i").attr("status");
    var product_id = $(this).data("versions-product-id");
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        url: '/admin/update-product-versions-status',
        data: {status:status, product_id:product_id},
        success:function(resp){
            $("#ajax_loading_overlay").fadeOut(300);
            if(resp["status"]=="no"){
                $(`a[data-versions-product-id= ${resp.product_id}]`).html('<i style = "font-size:24px; color: red;"class = "fa-solid fa-circle-xmark" status = "no"></i>');
            }
            else if(resp["status"]=="yes"){
                $(`a[data-versions-product-id= ${resp.product_id}]`).html('<i style = "font-size:24px; color: green;" class="fa-solid fa-circle-check" status = "yes"></i>');
            }
        },
        error:function(){
        $("#ajax_loading_overlay").fadeOut(300);
            alert("Error");
        }
    })
})
$(document).on("click", ".update_vendor_status", function() {
    var status = $(this).children("i").attr("status");
    var vendor_id = $(this).data("vendor-id");
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        url: '/admin/update-vendor-status',
        data: {status:status, vendor_id:vendor_id},
        success:function(resp){
            $("#ajax_loading_overlay").fadeOut(300);
            if(resp["status"]==0){
                $(`a[data-vendor-id= ${resp.vendor_id}]`).html('<i style = "font-size:24px; color: red;"class = "fa-solid fa-circle-xmark" status = "inactive"></i>');
            }
            else if(resp["status"]==1){
                $(`a[data-vendor-id= ${resp.vendor_id}]`).html('<i style = "font-size:24px; color: green;" class="fa-solid fa-circle-check" status = "active"></i>');
            }
        },
        error:function(){
        $("#ajax_loading_overlay").fadeOut(300);
            alert("Error");
        }
    })
})
$(document).on("click", ".confirm_delete", function() {
    var title = $(this).data("title");
    if(confirm('Bạn có muốn xóa '+ title + ' này?')) {
        var model = $(this).data("model");
        var model_id = $(this).data("model-id");
        var product_id = $(this).data("product-id");
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post',
            url: '/admin/delete-'+model+'/'+model_id,
            data: {title:title, model_id:model_id},
            success:function(resp){
                $("#ajax_loading_overlay").fadeOut(300);
                alert(resp.success_message);
                window.location.href = '/admin/add-images/'+product_id;
            },
            error:function(){
            $("#ajax_loading_overlay").fadeOut(300);
                alert("Error");
            }
        })
    }else{
        return false;
    }
})
$(document).ready(function(){
    $('#department-selection').on('change', function(){
        var department_id = $('#department-selection option:selected').val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post',
            url: '/admin/get-sections-after-department-selection',
            data: {department_id:department_id},
            success:function(resp){
                $("#ajax_loading_overlay").fadeOut(300);
                $('#section-selection option').remove();
                $('#section-selection').append('<option value = "">--Chọn</option>');
                $.each(resp, function(i){
                    $('#section-selection').append(`<option value = "${resp[i].id}">${resp[i].section_name}</option>`);
                })
            },
            error:function(){
            $("#ajax_loading_overlay").fadeOut(300);
                alert("Error");
            }
        })
        // alert(department_id);
    })
})
$(document).ready(function(){
    $('#section-selection').on('change', function(){
        var section_id = $('#section-selection option:selected').val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post',
            url: '/admin/get-categories-after-section-selection',
            data: {section_id:section_id},
            success:function(resp){
                $("#ajax_loading_overlay").fadeOut(300);
                $('#category-selection option').remove();
                $('#category-selection').append(`<option value = "">Chọn</option>`)
                $.each(resp, function(i){
                    $('#category-selection').append(`<option value = "${resp[i].id}">${resp[i].category_name}</option>`)
                })
            },
            error:function(){
            $("#ajax_loading_overlay").fadeOut(300);
                alert("Error");
            }
        })
        // alert(department_id);
    })
})
$(document).ready(function(){
    $('#category-selection').on('change', function(){
        var category_id = $('#category-selection option:selected').val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post',
            url: '/admin/get-products-after-category-selection',
            data: {category_id:category_id},
            success:function(resp){
                $("#ajax_loading_overlay").fadeOut(300);
                $.each(resp, function(i){
                    $('#product-selection').append(`<option value = "${resp[i].id}">${resp[i].name}</option>`)
                })
            },
            error:function(){
            $("#ajax_loading_overlay").fadeOut(300);
                alert("Error");
            }
        })
        // alert(department_id);
    })
})
$(document).ready(function(){
    $('.size_option').on('click', function(){
       var product_id = $('#product_id').val();
        var size = $(this).val();
        var color = $('.color_option:checked').val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: "post",
            url: "/size-selection",
            data: {product_id: product_id, size:size, color:color},
            success: function(resp){
                $("#ajax_loading_overlay").fadeOut(300);
                // alert(resp); return false;
                $('.information-price').html(resp.view);
                $('.info-code .attr-sku').html(resp.attr_sku);

                if(resp.attr_stock > 0) {
                    $('.info-stock span.stock-data').html(resp.attr_stock);
                    $('.stock-check').html("<span style = 'color: #5CB85C;font-weight: 700;'>Còn hàng</span>");
                }else{
                    $('.info-stock span.stock-data').html("0");
                    $('.stock-check').html("<span style = 'color: #e02027;font-weight: 700;' >Tạm hết hàng</span>");
                }
            },
            error: function(){
                $("#ajax_loading_overlay").fadeOut(300);
                alert('error');
            }
        })
    })
    $('.color_option').on('click', function(){
        var color = $(this).val();
        var size = $('.size_option:checked').val();
        // alert(size);return false;
        var product_id = $('#product_id').val();
         $.ajax({
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             },
             method: "post",
             url: "/color-selection",
             data: {product_id: product_id, color:color, size:size},
             success: function(resp){
                $("#ajax_loading_overlay").fadeOut(300);
                 $image = resp.image;
                 $('.product-detail-image-container img').attr('src',"/FlowerShop/front/images-3/product_images/medium/"+ $image)
                 $('.information-price').html(resp.view);
                 $('.info-code .attr-sku').html(resp.attr_sku);
                 if(resp.attr_stock > 0) {
                    $('.info-stock span.stock-data').html(resp.attr_stock);
                    $('.stock-check').html("<span style = 'color: #5CB85C;font-weight: 700;'>Còn hàng</span>");
                }else{
                    $('.info-stock span.stock-data').html("0");
                    $('.stock-check').html("<span style = 'color: #e02027;font-weight: 700;' >Tạm hết hàng</span>");
                }
             },
             error: function(){
                $("#ajax_loading_overlay").fadeOut(300);
                 alert('error');
             }
         })
     })
})

$('#register_form').submit(function(event){
    event.preventDefault();
    var form_data = $(this).serialize();
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        url: '/user/register',
        data:form_data,
        success: function(resp){
            $("#ajax_loading_overlay").fadeOut(300);
            if(resp.type == "error"){
                $.each(resp.errors, function(i, error){
                    $('#login_'+i+'_error').attr('style', 'color:red');
                    $('#login_'+i+'_error').html(error);
                    setTimeout(function(){
                        $('#login_'+i+'_error').css({
                            'display': 'none'
                        })
                    }, 3000)
                })
            }else if (resp.type == "inactive"){
                $('#login_error').attr('style', 'color:red');
                $('#login_error').html(resp.message);
            }else if(resp.type == "incorrect"){
                $('#login_error').attr('style', 'color:red');
                $('#login_error').html(resp.message);
            }else if(resp.type == "success"){
                $('#register_success_message').html(resp.message);
                $('#register_success_message').addClass('alert alert-success');
                setTimeout(function(){
                    window.location.href = resp.url;
                }, 5000)
            }
        },
        error: function(){
            alert('error');
        }
    })
})
$('#login_form').submit(function(event){
    event.preventDefault();
    var form_data = $(this).serialize();
    // form_data = JSON.stringify(form_data);
    console.log(form_data);
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        url: '/user/login',
        data:form_data,
        success: function(resp){
            $("#ajax_loading_overlay").fadeOut(300);
            // alert(resp);
            if(resp.type == "error"){
                $.each(resp.errors, function(i, error){
                    $('#login_'+i+'_error').attr('style', 'color:red');
                    $('#login_'+i+'_error').html(error);
                    setTimeout(function(){
                        $('#login_'+i+'_error').css({
                            'display': 'none'
                        })
                    }, 3000)
                })
            }else if (resp.type == "inactive"){
                $('#login_error').attr('style', 'color:red');
                $('#login_error').html(resp.message);
            }else if(resp.type == "incorrect"){
                $('#login_error').attr('style', 'color:red');
                $('#login_error').html(resp.message);
            }else if(resp.type == "success"){
                $("#ajax_loading_overlay").fadeOut(300);
                alert(resp);
                window.location.href = resp.url;
            }
        },
        error: function(){
            $("#ajax_loading_overlay").fadeOut(300);
            alert('error');
        }
    })
})
$(document).on('click', '.user-logout-btn', function(){
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        url: '/user/logout',
        success: function(){
            // alert(resp);
            $("#ajax_loading_overlay").fadeOut(300);
        },
        error: function(){
            alert('error');
        }
    })
})
$('#vat_invoice').on('change', function(){
    if(this.checked) {
        $('#invoice-info').html('<input type="text" class="form-control"  name = "tax_code" id = "tax_code" placeholder = "Mã số thuế"><input type="text" class="form-control"  name = "invoice_name" id = "invoice_name" placeholder = "Tên công ty"><input type="text" class="form-control"  name = "invoice_address" id = "invoice_address" placeholder = "Địa chỉ">');
    }else{
        $('#invoice-info').html('');
    }
})
$('#province').on('change', function(){
    $('#district option').remove();
    $('#ward option').remove();
    var province_id = $('#province option:selected').val();

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        url: '/admin/province-selected',
        data: {province_id:province_id},
        success: function(resp){
            $("#ajax_loading_overlay").fadeOut(300);
            $.each(resp, function(i){
                $('#district').append(`<option value = "${resp[i].id}">${resp[i].name}</option>`)
            })
            
        },
        error: function(){
            $("#ajax_loading_overlay").fadeOut(300);
            alert('error');
        }
    })
})
$('#district').on('change', function(){
    $('#ward option').remove();
    var district_id = $('#district option:selected').val();
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        url: '/admin/district-selected',
        data: {district_id:district_id},
        success: function(resp){
            $("#ajax_loading_overlay").fadeOut(300);
            $.each(resp, function(i){
                $('#ward').append(`<option value = "${resp[i].id}">${resp[i].name}</option>`)
            })
            $('#ward').append(`<option value = "">Để trống</option>`)
        },
        error: function(){
            $("#ajax_loading_overlay").fadeOut(300);
            alert('error');
        }
    })
})
$(document).on('click', '#subscriber-submit-btn', function(){
    var subscriber_email = $('#subscriber-email').val();
    var mail_format = /\S+@\S+\.\S+/;
    if(subscriber_email.match(mail_format)){
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post',
            url: 'subscriber-email',
            data: {subscriber_email:subscriber_email},
            success: function(resp){
                $("#ajax_loading_overlay").fadeOut(300);
                if(resp.case == "success"){
                    $('#subscriber-email-message').html(`<div class = "alert alert-success alert-dismissible fade show mt-3" role = "alert"><strong>Thành công:${resp.success_message}</strong></div>`);
                }else if (resp.case == "error"){
                    $('#subscriber-email-message').html(`<div class = "alert alert-danger alert-dismissible fade show mt-3" role = "alert"><strong>Lỗi:${resp.error_message}</strong></div>`);
                }
            },
            error: function(){
                $("#ajax_loading_overlay").fadeOut(300);
                alert('error');
            }
        })
    }else{
        alert('Email không hợp lệ!')
    }
})
$('#user-rating-form').submit(function(event){
    event.preventDefault();
    var product_id = $('#user-rating-form #user_rating_product_id').val();
    var rating = $('#user-rating-form input[name=user_rating]:checked').val();
    var review = $('#user-rating-form #review').val();
    var user_id = $('#user-rating-form #user_rating_user_id').val();
    // alert(user_id);
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        url: '/user-rating',
        data: {product_id:product_id, rating:rating, review:review, user_id:user_id},
        success: function(resp){
            $("#ajax_loading_overlay").fadeOut(300);
            // alert(resp);
            if(resp.case == "success"){
                $('#user-rating-message').html(`<div class = "alert alert-success alert-dismissible fade show mt-3" role = "alert"><strong>Thành công:${resp.user_rating_success_message}</strong></div>`);
            }else if (resp.case == "error"){
                $('#user-rating-message').html(`<div class = "alert alert-danger alert-dismissible fade show mt-3" role = "alert"><strong>Lỗi:${resp.user_rating_error_message}</strong></div>`);
            }
        },
        error: function(){
            $("#ajax_loading_overlay").fadeOut(300);
            alert('error');
        }
    })
})
$('#guest-rating-form').submit(function(event){
    event.preventDefault();
    var product_id = $('#guest-rating-form #guest_rating_product_id').val();
    var name = $('#guest-rating-form #review_author').val();
    var email = $('#guest-rating-form #review_email').val();
    var phone = $('#guest-rating-form #review_phone').val();
    var comment = $('#guest-rating-form #comment').val();
    var rating = $('#guest-rating-form input[name=guest_rating]:checked').val();
    // alert(rating); return false;
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        url: '/guest-rating',
        data: {product_id:product_id, name:name, email:email,phone:phone, comment:comment, rating:rating},
        success: function(resp){
            $("#ajax_loading_overlay").fadeOut(300);
            // alert(resp);
            if(resp.case == "success"){
                $('#guest-rating-message').html(`<div class = "alert alert-success alert-dismissible fade show mt-3" role = "alert"><strong>Thành công:${resp.guest_rating_success_message}</strong></div>`);
            }else if (resp.case == "error"){
                $('#guest-rating-message').html(`<div class = "alert alert-danger alert-dismissible fade show mt-3" role = "alert"><strong>Lỗi:${resp.guest_rating_error_message}</strong></div>`);
            }
        },
        error: function(){
            $("#ajax_loading_overlay").fadeOut(300);
            alert('error');
        }
    })
})

// gallery
$(document).on('click', '.gallery-image', function(){
    $src = $(this).attr('src');
    $('.product-detail-image').attr('src', $src);
})
function openNav() {
    $("#side-nav").css('animation', 'expand 0.3s forwards');
    $("#nav-close-btn").css('display', 'block');
    $("#nav-close-btn").css('animation', 'show 0.3s');
    $(".overlay").css('display', 'block');
    $(".overlay").css('animation', 'show 0.3s');
  }
  
  function closeNav() {
    $("#side-nav").css('animation', 'collapse 0.3s forwards');
    $("#nav-close-btn").css('animation', 'hide 0.3s');
    $("#nav-close-btn").css('display', 'none ');
    $(".overlay").css('animation', 'hide 0.3s');
    $(".overlay").css('display', 'none');
  }
let firstDropdownOpen = false;
function dropdown1(){
    firstDropdownOpen = !firstDropdownOpen;
    if(firstDropdownOpen){
        $('.side-nav-list-dropdown1 i').attr('class', 'fas fa-chevron-up');
        $('.side-nav-list-dropdown1 div').html('Rút gọn');
        $('.side-nav-list1').css('display', 'block');
        $('.side-nav-list1').css('animation', 'expandDropdown 0.3s forwards');
        $('.side-nav-list1').css('transition', 'height 0.3s');
        $('.side-nav-list1').css('height', '410px');
    }else{
        $('.side-nav-list-dropdown1 i').attr('class', 'fas fa-chevron-down');
        $('.side-nav-list-dropdown1 div').html('Xem thêm');
        $('.side-nav-list1').css('animation', 'collapseDropdown 0.2s forwards');
        $('.side-nav-list1').css('transition', 'height 0.2s');
        $('.side-nav-list1').css('height', '0px');
    }
}
$('.side-nav-list-see-more').each(function(){
    $(this).on('click', function(){
        firstDropdownOpen = !firstDropdownOpen;
        var department_id = $(this).data('side-nav-department-id');
        if(firstDropdownOpen) {
            $(this).children('i').attr('class', 'fas fa-chevron-up');
            $(this).children('div').html('Rút gọn');
            $(`ul[data-side-nav-department-id = ${department_id}]`).css('height', 'auto');
            $(`ul[data-side-nav-department-id = ${department_id}]`).css('animation', 'expandDropdown 0.3s forwards');
        }else{
            $(this).children('i').attr('class', 'fas fa-chevron-down');
            $(this).children('div').html('Xem thêm');
            $(`ul[data-side-nav-department-id = ${department_id}]`).css('height', '240px');
            $(`ul[data-side-nav-department-id = ${department_id}]`).css('transition', 'height 0.2s');
            // $(`ul[data-side-nav-department-id = ${department_id}]`).css('animation', 'collapseDropdown 0.3s forwards');
        }
    })
})
$('.side-nav-list-item').each(function(){
    $(this).on('click', function(){
        var section_id = $(this).data('side-nav-section-id');
        $('#side-nav-main-container').css('animation', 'mainAway 0.3s forwards');
        $(`div[data-sub-menu-id = ${section_id}]`).css('animation', 'subBack 0.3s forwards');
        $(`div[data-sub-menu-id = ${section_id}]`).css('visibility', 'visible');
    })
})
$('.main-menu-back').each(function(){
    $(this).on('click', function(){
        var section_id = $(this).data('nav-section-id');
        $(`div[data-sub-menu-id = ${section_id}]`).css('animation', 'subPush 0.3s forwards');
        $(`div[data-sub-menu-id = ${section_id}]`).css('visibility', 'invisible');
        $('#side-nav-main-container').css('animation', 'mainBack 0.3s forwards');
    })
})


  $(document).on('click', '.heart', function(){
    $(this).css('color', '#D81525');
})
$(document).on('click', '.like', function(){
    $(this).css('color', '#0d6efd');
})
$(document).on('click', '.dislike', function(){
    $(this).css('color', '#0d6efd');
})
    //add product specs field
    //add or remove fields jquery
    var max_product_specs_field = 10; //Input fields increment limitation
    var addButton = $('.add_product_specs_button'); //Add button selector
    var product_specs_wrapper = $('.field_product_specs_wrapper'); //Input field wrapper
    var max_product_specs_field_html = '<div><input type="text" name="header[]" placeholder="Tên thông số"  required style = "max-width: 240px;"/><input type="text" name="data[]" placeholder="Mô tả thông số" required = "" style = "max-width: 240px;"/><br><a href="javascript:void(0);" class="add_product_specs_button" title="Add spec">Thêm</a><a href="javascript:void(0);" class="remove_button" title="" style = "margin-left:12px;">Xóa</a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < max_product_specs_field){ 
            x++; //Increment field counter
            $(product_specs_wrapper).append(max_product_specs_field_html); //Add field html
        }
        //Once remove button is clicked
        $(product_specs_wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
        //add product features
    })

    $(document).on('click', '#append-feature-input', function(e){
        e.preventDefault();
        $('#add-product-feature').append('<div class="input-group mt-2"><input type="text" class="form-control"  name="features[]" placeholder = "Nhập đặc điểm sản phẩm"><div class="input-group-append m-1"><a class="btn btn-outline-secondary delete-feature-input" >Xóa</button></div></div>');
    })
    $(document).on('click', '.delete-feature-input', function(e){
        e.preventDefault();
        var div = $(this).parent();
        $(div).parent().remove();
    })
    $(document).on('click', '.delete-current-feature', function(e){
        e.preventDefault();
        if(confirm('Bạn có muốn xóa đặc điểm sản phẩm này?')) {
            var feature_id = $(this).data('feature-id');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'post',
                url: '/admin/delete-current-feature',
                data: {feature_id:feature_id},
                success: function(resp){
                    $("#ajax_loading_overlay").fadeOut(300);
                    alert(resp.success_message)
                },
                error: function(){
                    $("#ajax_loading_overlay").fadeOut(300);
                    alert('error');
                }
            })
            $(this).parent().parent().remove();
        }else{
            return false;
        }
    })
    $(document).on('click', '.update-current-feature', function(e){
        e.preventDefault();
            var feature_id = $(this).data('feature-id');
            var content = $(`input[data-feature-id = ${feature_id}]`).val();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'post',
                url: '/admin/update-current-feature',
                data: {feature_id:feature_id, content:content},
                success: function(resp){
                    $("#ajax_loading_overlay").fadeOut(300);
                    alert(resp.success_message)
                },
                error: function(){
                    $("#ajax_loading_overlay").fadeOut(300);
                    alert('error');
                }
            })
    })


