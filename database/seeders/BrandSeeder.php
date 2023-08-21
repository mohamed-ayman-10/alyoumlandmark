<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            [
                'image' => 'images/brand/brand-1.png'
            ], [
                'image' => 'images/brand/brand-2.png'
            ],[
                'image' => 'images/brand/brand-3.png'
            ],[
                'image' => 'images/brand/brand-4.png'
            ],[
                'image' => 'images/brand/brand-5.png'
            ],[
                'image' => 'images/brand/brand-6.png'
            ],[
                'image' => 'images/brand/brand-7.png'
            ],[
                'image' => 'images/brand/brand-8.png'
            ],[
                'image' => 'images/brand/brand-9.png'
            ],[
                'image' => 'images/brand/brand-10.png'
            ],[
                'image' => 'images/brand/brand-11.png'
            ],[
                'image' => 'images/brand/brand-12.png'
            ],[
                'image' => 'images/brand/brand-13.png'
            ],[
                'image' => 'images/brand/brand-14.png'
            ],[
                'image' => 'images/brand/brand-15.png'
            ],[
                'image' => 'images/brand/brand-16.png'
            ],[
                'image' => 'images/brand/brand-17.png'
            ],[
                'image' => 'images/brand/brand-18.png'
            ],[
                'image' => 'images/brand/brand-19.png'
            ],[
                'image' => 'images/brand/brand-20.png'
            ],[
                'image' => 'images/brand/brand-21.png'
            ],[
                'image' => 'images/brand/brand-22.png'
            ],[
                'image' => 'images/brand/brand-23.png'
            ],[
                'image' => 'images/brand/brand-24.png'
            ],[
                'image' => 'images/brand/brand-25.png'
            ],[
                'image' => 'images/brand/brand-26.png'
            ],[
                'image' => 'images/brand/brand-27.png'
            ],[
                'image' => 'images/brand/brand-28.png'
            ],[
                'image' => 'images/brand/brand-29.png'
            ],[
                'image' => 'images/brand/brand-30.png'
            ],[
                'image' => 'images/brand/brand-31.png'
            ],[
                'image' => 'images/brand/brand-32.png'
            ],[
                'image' => 'images/brand/brand-33.png'
            ],[
                'image' => 'images/brand/brand-34.png'
            ],[
                'image' => 'images/brand/brand-35.png'
            ],[
                'image' => 'images/brand/brand-36.png'
            ],[
                'image' => 'images/brand/brand-37.png'
            ],[
                'image' => 'images/brand/brand-38.png'
            ],[
                'image' => 'images/brand/brand-39.png'
            ],
        ];

        foreach($brands as $brand) {
            Brand::query()->create($brand);
        }
    }
}
