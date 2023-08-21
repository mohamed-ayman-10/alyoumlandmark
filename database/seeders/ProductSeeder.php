<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'title_ar' => 'بطاطس مجمدة (الومت)',
                'title_en' => 'Frozen Potatoes (Allumettes)',
                'description_ar' => 'دجاج مشوي ، طماطم ، رقائق بارميزان ، جبنة بارميزان مبشورة ، كالي مبشور ، رومين مقطع ، عصير ليمون ، صلصة سيزر',
                'description_en' => 'Roasted chicken, tomatoes, parmesan crisps, shaved parmesan, shredded kale, chopped romaine, lime squeeze, caesar dressing',
                'price' => '100',
                'image' => 'images/products/product-1.png'
            ],
            [
                'title_ar' => 'فراولة مجمدة',
                'title_en' => 'Frozen Strawberry',
                'description_ar' => 'دجاج مشوي ، طماطم ، رقائق بارميزان ، جبنة بارميزان مبشورة ، كالي مبشور ، رومين مقطع ، عصير ليمون ، صلصة سيزر',
                'description_en' => 'Roasted chicken, tomatoes, parmesan crisps, shaved parmesan, shredded kale, chopped romaine, lime squeeze, caesar dressing',
                'price' => '100',
                'image' => 'images/products/product-1.png'
            ],
            [
                'title_ar' => 'فاصوليا خضراء مجمدة',
                'title_en' => 'Frozen Green Beans',
                'description_ar' => 'دجاج مشوي ، طماطم ، رقائق بارميزان ، جبنة بارميزان مبشورة ، كالي مبشور ، رومين مقطع ، عصير ليمون ، صلصة سيزر',
                'description_en' => 'Roasted chicken, tomatoes, parmesan crisps, shaved parmesan, shredded kale, chopped romaine, lime squeeze, caesar dressing',
                'price' => '100',
                'image' => 'images/products/product-1.png'
            ]
        ];

        foreach($products as $product) {
            Product::query()->create($product);
        }
    }
}
