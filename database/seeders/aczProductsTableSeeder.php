<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\aczreviews\Product;
class aczProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productRecords = [
            ['id'=> 1, 'department_id'=>1,'section_id'=>1,'category_id'=>1,  'name'=>'Product name 1', 'code'=>'PD01', 'color'=>'Đỏ', 'price'=>300000, 'discount'=>20,  'image'=>'', 'video'=>'','description' => 'Description', 'meta_title'=>'Product name 1', 'meta_description'=>'Product name 1', 'meta_keywords'=>'Product name 1', 'is_featured'=>'yes','has_versions' => 'yes', 'status'=>1],
            ['id'=> 2, 'department_id'=>2,'section_id'=>2,'category_id'=>2,  'name'=>'Product name 2', 'code'=>'PD02', 'color'=>'Trắng', 'price'=>200000, 'discount'=>15,  'image'=>'', 'video'=>'','description' => 'Description', 'meta_title'=>'Product name 2', 'meta_description'=>'Product name 2', 'meta_keywords'=>'Product name 2', 'is_featured'=>'yes','has_versions' => 'no', 'status'=>1],
            ['id'=> 3, 'department_id'=>3,'section_id'=>3,'category_id'=>3,  'name'=>'Product name 3', 'code'=>'PD03', 'color'=>'Đen', 'price'=>300000, 'discount'=>10,  'image'=>'', 'video'=>'','description' => 'Description', 'meta_title'=>'Product name 2', 'meta_description'=>'Product name 2', 'meta_keywords'=>'Product name 2', 'is_featured'=>'no','has_versions' => 'yes', 'status'=>1],
        ];
        Product::insert($productRecords);
    }
}
