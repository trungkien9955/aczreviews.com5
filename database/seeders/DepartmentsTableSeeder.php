<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\aczreviews\Department;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $department_records = [
            ['id'=>1, 'department_name'=>'Mỹ phẩm và chăm sóc cá nhân', 'url' => 'my-pham-va-cham-soc-ca-nhan','status'=>1],
            ['id'=>2, 'department_name'=>'Mỹ phẩm nam', 'url' => 'my-pham-nam','status'=>1],
            ['id'=>3, 'department_name'=>'Thực phẩm chức năng', 'url' => 'thuc-pham-chuc-nang','status'=>1],
            ['id'=>4, 'department_name'=>'Vitamins/Khoáng chất', 'url' => 'vitamins-va-khoang-chat','status'=>1],
            ['id'=>5, 'department_name'=>'Dinh dưỡng thể thao', 'url' => 'dinh-duong-the-thao','status'=>1],
        ];
        Department::insert($department_records);
    }
}
