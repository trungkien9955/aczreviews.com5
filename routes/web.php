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
        Route::post('delete-ProductImage/{id}', 'ProductController@delete_image');
        //product_specs
        Route::match(['get', 'post'], 'add-edit-product-specs/{id}', 'ProductController@add_edit_product_specs');
        //product features
        Route::match(['get', 'post'], 'add-edit-product-features/{id}', 'ProductController@add_edit_product_features');
        Route::post('delete-current-feature', 'ProductController@delete_current_feature');
        Route::post('update-current-feature', 'ProductController@update_current_feature');
        //vendors
        Route::get('vendors', 'VendorController@vendors');
        Route::post('update-vendor-status', 'VendorController@update_vendor_status');
        Route::post('delete-Vendor/{id}', 'VendorController@delete_vendor');
        Route::match(['get', 'post'],'add-edit-vendors/{id?}', 'VendorController@add_edit_vendors');
        //select province
        Route::post('province-selected', 'VendorController@get_districts_after_province');
        Route::post('district-selected', 'VendorController@get_wards_after_district');

    });
    Route::get('/back', 'ProductController@detail');
});
Route::prefix('/vendor')->namespace('App\Http\Controllers\aczreviews\vendor')->group(function(){
    Route::match(['get', 'post'],'login', 'VendorController@login');
    Route::group(['middleware'=>['vendor']], function(){
        Route::get('dashboard', 'VendorController@dashboard');
        Route::get('logout', 'VendorController@logout');
        Route::match(['get', 'post'],'create-offer', 'VendorController@create_offer');
        Route::match(['get', 'post'],'edit-offers/{id}', 'VendorController@edit_offers');
        Route::post('get-sections-after-department-selection', 'VendorController@get_sections_after_department_selection');
        Route::post('get-categories-after-section-selection', 'VendorController@get_categories_after_section_selection');
        Route::post('get-products-after-category-selection', 'VendorController@get_products_after_category_selection');
        //offers
        Route::get('offers', 'VendorController@offers');
        Route::post('update-offer-status', 'VendorController@update_offer_status');
        Route::post('update-freeship-status', 'VendorController@update_freeship_status');
        Route::post('update-gift-status', 'VendorController@update_gift_status');
        Route::post('update-coupon-status', 'VendorController@update_coupon_status');
        //statistics
        Route::get('statistics', 'VendorController@statistics');
        //products
        Route::get('products', 'VendorController@products');
        //info
        Route::get('info', 'VendorController@info');
    });
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
    //amazon choice
    Route::get('/amazon-choice', 'ProductController@amazon_choice');
    //acz choice
    Route::get('/acz-choice', 'ProductController@acz_choice');
    //vendor
    Route::get('/vendor/{id}', 'VendorController@vendor');
    //ajax vendor prices change
    Route::post('vendor-prices-filter', 'ProductController@vendor_prices_filter');
    Route::post('vendor-province-filter', 'ProductController@vendor_province_filter');
    //rating
    Route::post('guest-rating', 'RatingController@guest_rating');
});
