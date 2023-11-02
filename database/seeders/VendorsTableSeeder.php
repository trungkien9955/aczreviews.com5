<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\aczreviews\Vendor;
class VendorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vendor_records = [
            // ['id'=>1, 'name'=> 'Chiaki', 'email'=>'chiaki@gmail.com', 'phone' => '0965555666','address'=> 'Số 1','ward'=> 'Khương Thượng','district'=>'Đống Đa', 'province'=> 'Hà Nội','inventory_count'=> 10, 'sales_count'=> 12,'heart_count'=> 10,'like_count'=> 12,'dislike_count'=> 12,'comment_count'=> 12,'report_count'=> 12,'status'=>1],
            // ['id'=>2, 'name'=> 'Hasaki', 'email'=>'hasaki@gmail.com', 'phone' => '0965555888','address'=> 'Số 2','ward'=> 'Khương Hạ','district'=>'Hai Bà Trưng', 'province'=> 'Bắc Giang','inventory_count'=> 20, 'sales_count'=> 20,'heart_count'=> 20,'like_count'=> 20,'dislike_count'=> 20,'comment_count'=> 20,'report_count'=> 10,'status'=>1]
            ['id'=>3, 'name'=> 'Vendor1', 'email'=>'vendor1@gmail.com', 'phone' => '0965555888','address'=> 'Số 2','ward'=> 'Khương Hạ','district'=>'Hai Bà Trưng', 'province'=> 'Bắc Giang','inventory_count'=> 20, 'sales_count'=> 20,'heart_count'=> 20,'like_count'=> 20,'dislike_count'=> 20,'comment_count'=> 20,'report_count'=> 10,'status'=>1],
            ['id'=>4, 'name'=> 'Vendor2', 'email'=>'vendor1@gmail.com', 'phone' => '0965555888','address'=> 'Số 2','ward'=> 'Khương Hạ','district'=>'Hai Bà Trưng', 'province'=> 'Bắc Giang','inventory_count'=> 20, 'sales_count'=> 20,'heart_count'=> 20,'like_count'=> 20,'dislike_count'=> 20,'comment_count'=> 20,'report_count'=> 10,'status'=>1],
            ['id'=>5, 'name'=> 'Vendor3', 'email'=>'vendor1@gmail.com', 'phone' => '0965555888','address'=> 'Số 2','ward'=> 'Khương Hạ','district'=>'Hai Bà Trưng', 'province'=> 'Bắc Giang','inventory_count'=> 20, 'sales_count'=> 20,'heart_count'=> 20,'like_count'=> 20,'dislike_count'=> 20,'comment_count'=> 20,'report_count'=> 10,'status'=>1],
            ['id'=>6, 'name'=> 'Vendor4', 'email'=>'vendor4@gmail.com', 'phone' => '0965555888','address'=> 'Số 2','ward'=> 'Khương Hạ','district'=>'Hai Bà Trưng', 'province'=> 'Bắc Giang','inventory_count'=> 20, 'sales_count'=> 20,'heart_count'=> 20,'like_count'=> 20,'dislike_count'=> 20,'comment_count'=> 20,'report_count'=> 10,'status'=>1],
        ];
        Vendor::insert($vendor_records);
    }
}
