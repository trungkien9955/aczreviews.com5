<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\aczreviews\GuestRatingInfo;
class GuestRatingInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $guest_rating_info_records = [
        //     ['id'=>1, 'product_id'=> 11, 'name'=>'Ngọc Thảo', 'email' => 'thao@gmail.com','phone'=> '0888999333','rating'=> 4,'comment'=>'abcxyz','status'=>1],
        //     ['id'=>2, 'product_id'=> 3, 'name'=>'Thùy Linh', 'email' => 'linh@gmail.com','phone'=> '0888555666','rating'=> 5,'comment'=>'abcxyzdef','status'=>1],
        // ];
        $guest_rating_info_records = [
            ['id'=>3, 'product_id'=> 1, 'name'=>' Thảo', 'email' => 'thao@gmail.com','phone'=> '0888999333','rating'=> 5,'comment'=>'abcxyz','status'=>1],
            ['id'=>4, 'product_id'=> 2, 'name'=>'Thùy Linh', 'email' => 'linh@gmail.com','phone'=> '0888555666','rating'=> 3,'comment'=>'abcxyzdef','status'=>1],
        ];
        GuestRatingInfo::insert($guest_rating_info_records);
    }
}
