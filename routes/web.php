<?php

use Illuminate\Support\Facades\Route;
use App\Models\aczreviews\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::prefix('/admin')->namespace('App\Http\Controllers\aczreviews\admin')->group(function(){
    Route::match(['get', 'post'],'login', 'AdminController@login');
    Route::group(['middleware'=>['admin']], function(){
        Route::get('dashboard', 'AdminController@dashboard');
        Route::get('logout', 'AdminController@logout');
        //departments
        Route::get('departments', 'DepartmentController@departments');
        Route::match(['get', 'post'],'add-edit-departments/{id?}', 'DepartmentController@add_edit_departments');
        Route::post('update-department-status', 'DepartmentController@update_department_status');
        Route::post('delete-Department/{id}', 'DepartmentController@delete_department');
        //sections
        Route::get('sections', 'SectionController@sections');
        Route::post('update-section-status', 'SectionController@update_section_status');
        Route::match(['get', 'post'],'add-edit-sections/{id?}', 'SectionController@add_edit_sections');
        Route::post('delete-Section/{id}', 'SectionController@delete_section');
        //categories
        Route::get('categories', 'CategoryController@categories');
        Route::post('update-category-status', 'CategoryController@update_category_status');
        Route::match(['get', 'post'],'add-edit-categories/{id?}', 'CategoryController@add_edit_categories');
        Route::post('get-sections-after-department-selection', 'CategoryController@get_sections_after_department_selection');
        Route::post('delete-Category/{id}', 'CategoryController@delete_category');
        //products
        Route::get('products', 'ProductController@products');
        Route::post('update-product-status', 'ProductController@update_product_status');
        Route::match(['get', 'post'],'add-edit-products/{id?}', 'ProductController@add_edit_products');
        Route::post('update-product-feature-status', 'ProductController@update_product_feature_status');
        Route::post('update-product-versions-status', 'ProductController@update_product_versions_status');
        Route::post('get-categories-after-section-selection', 'ProductController@get_categories_after_section_selection');
        Route::post('delete-Product/{id}', 'ProductController@delete_product');
        //product_images
        Route::match(['get', 'post'], 'add-images/{id}', 'ProductController@add_images');
    });
    Route::get('/back', 'ProductController@detail');


});

Route::namespace('App\Http\Controllers\aczreviews\front')->group(function(){
    Route::match(['get', 'post'],'/', 'IndexController@index');
    $category_url = Category::select('url')->where('status', 1)->get()->pluck('url')->toArray();
    // dd($section_url); 
    foreach($category_url as $key => $url) {
        Route::match(['get', 'post'],'/'.$url, 'ProductController@listing');
    }
    //detail
    Route::match(['get', 'post'],'/product/{id}', 'ProductController@detail');
});
