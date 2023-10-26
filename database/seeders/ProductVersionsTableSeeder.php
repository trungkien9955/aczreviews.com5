<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\aczreviews\ProductVersion;
class ProductVersionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product_versions_record = [
            ['id'=>1, 'product_id'=> 1, 'size'=>'Small', 'price'=>100000,'color'=>'Đỏ','image'=>'', 'stock'=> 10, 'sku'=>'PD01-S-R', 'status'=>1],
            ['id'=>2, 'product_id'=> 1, 'size'=>'Medium', 'price'=>200000,'color'=>'Xanh lá','image'=>'', 'stock'=> 20, 'sku'=>'PD01-M-G', 'status'=>1],
            ['id'=>3, 'product_id'=> 1, 'size'=>'Large', 'price'=>300000,'color'=>'Xanh','image'=>'', 'stock'=> 30, 'sku'=>'PD01-L-B', 'status'=>1],
            ['id'=>4, 'product_id'=> 2, 'size'=>'Small', 'price'=>200000,'color'=>'','image'=>'', 'stock'=> 10, 'sku'=>'PD02-S', 'status'=>1],
            ['id'=>5, 'product_id'=> 2, 'size'=>'Medium', 'price'=>300000,'color'=>'','image'=>'', 'stock'=> 15, 'sku'=>'PD02-M', 'status'=>1],
            ['id'=>6, 'product_id'=> 2, 'size'=>'', 'price'=>400000,'color'=>'','image'=>'', 'stock'=> 20, 'sku'=>'PD02-L', 'status'=>1],
            ['id'=>7, 'product_id'=> 3, 'size'=>'', 'price'=>250000,'color'=>'Đỏ','image'=>'', 'stock'=> 10, 'sku'=>'PD03-R', 'status'=>1],
            ['id'=>8, 'product_id'=> 3, 'size'=>'', 'price'=>350000,'color'=>'Trắng','image'=>'', 'stock'=> 20, 'sku'=>'PD03-W', 'status'=>1],
            ['id'=>9, 'product_id'=> 3, 'size'=>'', 'price'=>450000,'color'=>'Xanh','image'=>'', 'stock'=> 6, 'sku'=>'PD03-B', 'status'=>1],
        ];
        ProductVersion::insert($product_versions_record);
    }
}
