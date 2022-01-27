<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'Oppo mobile',
                'price'=>'30000',
                'category'=>'Mobile',
                'description'=>'A smartphone with  4GB ram and much  more festure ',
                'gallery'=>'https://phoneaqua.com/products/oppo-a95.jpg',
            ],
                [
                'name'=>'Panosonic Tv',
                'price'=>'60000',
                'category'=>'Tv',
                'description'=>'A  tv with and much  more festure ',
                'gallery'=>'https://streamtelly.com/wp-content/uploads/2021/01/Change-DNS-Settings-On-Panasonic-Viera-Smart-TV.jpg',
            ],
            [
                'name'=>'Sony Tv',
                'price'=>'50000',
                'category'=>'Tv',
                'description'=>'A  tv with and much  more festure ',
                'gallery'=>'https://www.techinn.com/f/13819/138192974/sony-kd43x81j-43-4k-led-tv.jpg',
            ],
            [
                'name'=>'LG Fridge',
                'price'=>'20000',
                'category'=>'Fridge',
                'description'=>'A Fridge with  4GB ram and much  more festure ',
                'gallery'=>'https://www.dealayo.com/media/catalog/product/cache/1/image/1000x1231/9df78eab33525d08d6e5fb8d27136e95/g/l/gl-c322rspn-1.jpeg',

            ],
           
            // 'name'=>'LG mobile',
            // 'price'=>'20000',
            // 'category'=>'Mobile',
            // 'description'=>'A smartphone with  4GB ram and much  more festure ',
            // 'gallery'=>'https://www.lg.com/in/images/mobile-phones/md06226417/gallery/LMX210LMW_front_view_DZ_01_v1.jpg',
        ]);
    }
}
