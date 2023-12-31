<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\aczreviews\admin\Admin;
use Hash;
class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRecords = [
            ['id'=>1, 'name' =>'John',  'phone'=> '9800000000000', 'email'=>'johndoe@admin.com', 'password'=>Hash::make('123456'), 'image'=>'', 'status' =>1],
            ['id'=>2, 'name' =>'Jane',  'phone'=> '9800000000888', 'email'=>'jane@admin.com', 'password'=>Hash::make('123456'), 'image'=>'', 'status' =>1],
        ];
        Admin::insert($adminRecords);
    }
}
