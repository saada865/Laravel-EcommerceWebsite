<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            'name'=>'LG mobile',
            'price'=>'200',
            'description'=>'A smartphone that is very good!',
            'category'=>'mobile',
            'gallery'=>'https://media.wired.com/photos/62d75d34ddaaa99a1df8e61d/master/pass/Phone-Camera-Webcam-Gear-GettyImages-1241495650.jpg'
            ],
            [
                'name'=>'Samsung Note',
                'price'=>'500',
                'description'=>'A smartphone that is excellent!',
                'category'=>'mobile',
                'gallery'=>'https://media.wired.com/photos/62d75d34ddaaa99a1df8e61d/master/pass/Phone-Camera-Webcam-Gear-GettyImages-1241495650.jpg'
                ],
                [
                    'name'=>'Oppo mobile',
                    'price'=>'200',
                    'description'=>'A smartphone that is decent!',
                    'category'=>'mobile',
                    'gallery'=>'https://media.wired.com/photos/62d75d34ddaaa99a1df8e61d/master/pass/Phone-Camera-Webcam-Gear-GettyImages-1241495650.jpg'
                    ],[
                        'name'=>'LG TV',
                        'price'=>'2000',
                        'description'=>'A TV that is very good!',
                        'category'=>'Tv',
                        'gallery'=>'https://media.wired.com/photos/62d75d34ddaaa99a1df8e61d/master/pass/Phone-Camera-Webcam-Gear-GettyImages-1241495650.jpg'
                        ],
    
    
    
    ]);
    }
}
