<?php

namespace App\Http\Controllers\aczreviews\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function detail(){
        return view('aczreviews.front.products.detail');
    }
}
