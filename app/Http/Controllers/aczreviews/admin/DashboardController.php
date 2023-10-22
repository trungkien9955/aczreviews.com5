<?php

namespace App\Http\Controllers\aczreviews\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\aczreviews\Section;
use Validator;
class DashboardController extends Controller
{
    public function dashboard(){
        return view('aczreviews.admin.layout.dashboard');
    }
}
