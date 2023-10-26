<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\aczreviews\Brand;

class aczBrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brandRecords = [
            ['id'=>1, 'name' => 'Brand 1',  'image'=> '','status' => 1],
            ['id'=>2, 'name' => 'Brand 2', 'image'=> '','status' => 1],
            ['id'=>3, 'name' => 'Brand 3', 'image'=> '','status' => 1],
            ['id'=>4, 'name' => 'Brand 4', 'image'=> '','status' => 1],
            ['id'=>5, 'name' => 'Brand 5', 'image'=> '','status' => 1],
            ['id'=>6, 'name' => 'Brand 6', 'image'=> '','status' => 1],
        ];
        Brand::insert($brandRecords);
    }
}
