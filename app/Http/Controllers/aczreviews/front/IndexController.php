<?php

namespace App\Http\Controllers\aczreviews\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
class IndexController extends Controller
{
    public function index(){
        Session::put('page', 'home');
        return view('aczreviews.front.layout.test');
    }
}
