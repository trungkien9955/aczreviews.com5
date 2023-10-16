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
        url: '/province-selected',
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
        url: '/district-selected',
        data: {district_id:district_id},
        success: function(resp){
            $("#ajax_loading_overlay").fadeOut(300);
            $.each(resp, function(i){
                $('#ward').append(`<option value = "${resp[i].id}">${resp[i].name}</option>`)
            })
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
$('.main-menu').each(function(){
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