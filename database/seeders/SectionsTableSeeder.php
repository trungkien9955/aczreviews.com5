<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\aczreviews\Section;
class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $section_records = [
            // ['id'=>1, 'department_id' => 1,'section_name'=>'Trang điểm', 'url' => 'trang-diem','status'=>1],
            // ['id'=>2, 'department_id' => 1,'section_name'=>'Làm trắng da', 'url' => 'lam-trang-da','status'=>1],
            // ['id'=>3, 'department_id' => 1,'section_name'=>'Chăm sóc tóc', 'url' => 'cham-soc-toc','status'=>1],
            // ['id'=>4, 'department_id' => 1,'section_name'=>'Nước hoa', 'url' => 'nuoc-hoa','status'=>1],
            // ['id'=>5, 'department_id' => 1,'section_name'=>'Tẩy, triệt lông', 'url' => 'tay-triet-long','status'=>1],
            // ['id'=>6, 'department_id' => 1,'section_name'=>'Chăm sóc răng miệng', 'url' => 'cham-soc-rang-mieng','status'=>1],
            // ['id'=>7, 'department_id' => 2,'section_name'=>'Làm trắng da', 'url' => 'lam-trang-da','status'=>1],
            // ['id'=>8, 'department_id' => 2,'section_name'=>'Skin care', 'url' => 'skin-care','status'=>1],
            // ['id'=>9, 'department_id' => 2,'section_name'=>'Chăm sóc tóc', 'url' => 'cham-soc-toc','status'=>1],
            // ['id'=>10, 'department_id' => 1,'section_name'=>'Nước hoa', 'url' => 'nuoc-hoa','status'=>1],
            // ['id'=>11, 'department_id' => 2,'section_name'=>'Sáp vuốt tóc', 'url' => 'sap-vuot-toc','status'=>1],
            // ['id'=>12, 'department_id' => 3,'section_name'=>'Collagen', 'url' => 'collagen','status'=>1],
            // ['id'=>13, 'department_id' => 3,'section_name'=>'Thảo dược', 'url' => 'thao-duoc','status'=>1],
            // ['id'=>14, 'department_id' => 3,'section_name'=>'Chống lão hóa', 'url' => 'chong-lao-hoa','status'=>1],
            // ['id'=>15, 'department_id' => 4,'section_name'=>'Multivitamins', 'url' => 'multivitamins','status'=>1],
            // ['id'=>16, 'department_id' => 4,'section_name'=>'Vitamin A', 'url' => 'vitamin-a','status'=>1],
            ['id'=>17, 'department_id' => 5,'section_name'=>'Whey/Protein', 'url' => 'whey-protein','status'=>1],
            ['id'=>18, 'department_id' => 5,'section_name'=>'Amino Acid', 'url' => 'amino-acid','status'=>1],
            ['id'=>19, 'department_id' => 5,'section_name'=>'Whey/Protein', 'url' => 'whey-protein','status'=>1],
            ['id'=>20, 'department_id' => 5,'section_name'=>'Giảm cân', 'url' => 'giam-can','status'=>1],
            ['id'=>21, 'department_id' => 5,'section_name'=>'Phục hồi sau tập luyện', 'url' => 'phuc-hoi-sau-tap-luyen','status'=>1],


        ];
        Section::insert($section_records);
    }
}
