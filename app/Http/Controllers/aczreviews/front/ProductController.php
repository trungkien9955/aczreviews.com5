<?php

namespace App\Http\Controllers\aczreviews\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function detail(){
        // $str = 'Dù giành giải Á Khôi 2 Hoa khôi Áo dài Việt Nam 2022 nhưng Hồ Yến Nhi lựa chọn cuộc sống khá kín tiếng.
        // ';
        // $str = trim(mb_strtolower($str));
        // $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
        // $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
        // $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
        // $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
        // $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
        // $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
        // $str = preg_replace('/(đ)/', 'd', $str);
        // $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
        // $str = preg_replace('/([\s]+)/', '-', $str);
        return view('aczreviews.front.products.detail');
    }
}
