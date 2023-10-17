<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\aczreviews\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category_records = [
            // ['id'=>1, 'section_id' => 1,'category_name'=>'Trang điểm mắt/lông mày', 'url' => 'trang-diem-mat-long-may','status'=>1],
            // ['id'=>2, 'section_id' => 1,'category_name'=>'Trang điểm mặt', 'url' => 'trang-diem-mat','status'=>1],
            // ['id'=>3, 'section_id' => 1,'category_name'=>'Trang điểm môi', 'url' => 'trang-diem-moi','status'=>1],
            // ['id'=>4, 'section_id' => 1,'category_name'=>'Bộ trang điểm', 'url' => 'bo-trang-diem','status'=>1],
            // ['id'=>5, 'section_id' => 10,'category_name'=>'Chanel', 'url' => 'chanel','status'=>1],
            // ['id'=>6, 'section_id' => 10,'category_name'=>'Dior', 'url' => 'dior','status'=>1],
            ['id'=>7, 'section_id' => 10,'category_name'=>'Dior', 'url' => 'dior','status'=>1],

        ];
        Category::insert($category_records);
    }
}
