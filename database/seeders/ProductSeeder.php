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
                'title_ar' => 'البطاطس مجمدة و نصف مقلية مجمدة فى عبوات طبقا لطلبات العملاء.',
                'title_en' => 'Frozen potatoes and half frozen fried in packages according to customer requests.',
                'description_ar' => 'بطاطس نصف مقلية كيس 2.5 كيلو',
                'description_en' => 'Half fried potatoes bag 2.5 kg',
                'product_details_ar' => '5cm',
                'product_details_en' => '5cm',
                'image' => 'images/products/product-1.png'
            ],
            [
                'title_ar' => 'الفراولة المجمدة المحلله الصالحة للتصدير للدول العربية و الاتحاد الاوروبى و الولايات المتحدة الامريكية',
                'title_en' => 'Frozen analyzed strawberries, suitable for export to Arab countries, the European Union and the United States of America',
                'description_ar' => 'المقاسات المتاحة: فراولة مجمدة كاملة غير معايرة فراولة مجمدة مقاس 15-25 مم فراولة مجمدة مقاس 25-35 مم فراولة قطع أو شرائح',
                'description_en' => 'Sizes available: Frozen strawberries whole, uncalibrated Frozen strawberries 15-25mm Frozen strawberries 25-35mm Strawberries cut or sliced',
                'product_details_ar' => '5cm',
                'product_details_en' => '5cm',
                'image' => 'images/products/product-1.png'
            ],
            [
                'title_ar' => 'المانجة الشرائح و المكعبات ',
                'title_en' => 'Mango slices and cubes',
                'description_ar' => 'مانجو مجمد حبه مانجو كامله - شرائح شرائح تصدير المانجو المجمدة وزن الكيس: 1 كجم / 10 أكياس في الكرتون وزن الكرتون: 10 كجم IQF مانجو',
                'description_en' => 'Frozen Mango Whole Mango - Sliced Frozen Mango Export Slices Bag weight: 1 kg / 10 bags per carton Carton weight: 10 kg IQF Mango',
                'product_details_ar' => '5cm',
                'product_details_en' => '5cm',
                'image' => 'images/products/product-1.png'
            ],
            [
                'title_ar' => 'الرمان المنفلوطى ( حب) ',
                'title_en' => 'Manfalouti pomegranate (love)',
                'description_ar' => 'وزن الكيس: 400 جم عدد الأكياس بالكرتونة: 20 كيس وزن الكرتونة : 8 كيلوجرام',
                'description_en' => 'Bag weight: 400 gm, number of bags per carton: 20 bags, carton weight: 8 kg',
                'product_details_ar' => '5cm',
                'product_details_en' => '5cm',
                'image' => 'images/products/product-1.png'
            ],
            [
                'title_ar' => 'الخضار المشكل بجميع مكوناته طبقا لمتطلبات العملاء.',
                'title_en' => 'Mixed vegetables with all its ingredients according to customer requirements.',
                'description_ar' => 'نقوم بأختيار أجود أصناف البسلة الطازجة و الجزر و الفاصوليا الخضراء.وادي النيل تطبق مناهج تصنيع الخضار المشكل بحيث يتفق مع بداية الموسم حينما تكون طازجة و بها نسبة تركيز سكر عالية . التخزين : حجرة تجميد شديد أو فريزر عند درجة حرارة قدرها ناقص 18 درجة مئوية لمدة لا تزيد عن 18 شهر . و غير مسموح بإعادة التجميد
                نقوم بأختيار أجود أصناف البسلة الطازجة و الجزر و الفاصوليا الخضراء.وادي النيل تطبق مناهج تصنيع الخضار المشكل بحيث يتفق مع بداية الموسم حينما تكون طازجة و بها نسبة تركيز سكر عالية . التخزين : حجرة تجميد شديد أو فريزر عند درجة حرارة قدرها ناقص 18 درجة مئوية لمدة لا تزيد عن 18 شهر . و غير مسموح بإعادة التجميد',
                'description_en' => 'We choose the finest varieties of fresh peas, carrots and green beans. The Nile Valley applies the methods of processing mixed vegetables so that it corresponds to the beginning of the season when they are fresh and have a high sugar concentration. Storage: a deep freezer or freezer at a temperature of minus 18 degrees Celsius for a period not exceeding 18 months. Re-freezing is not allowed',
                'product_details_ar' => '5cm',
                'product_details_en' => '5cm',
                'image' => 'images/products/product-1.png'
            ],
            [
                'title_ar' => 'فاصوليا خضراء مجمدة',
                'title_en' => 'Frozen Green Beans',
                'description_ar' => 'فاصوليا خضراء مجمدة للتصدير من مصر الى جميع انحاء العالم , جودة عاليه مستوفيه جميع الشهادات والمقاييس الدوليه للتصدير افضل انواع الفاصوليا الخضراء المجمدة للتصدير من مصر الى جميع انحاء العالم حاصله على شهادة FDA العالميه للمنتجات المسموحه لها بالتدوال في امريكا',
                'description_en' => 'Frozen green beans for export from Egypt to all parts of the world, high quality that meets all international certificates and standards for export.',
                'product_details_ar' => '5cm',
                'product_details_en' => '5cm',
                'image' => 'images/products/product-1.png'
            ],
            [
                'title_ar' => 'البامية الخضراء المجمدة بجميع درجاتها و احجامها.',
                'title_en' => 'Frozen green okra in all grades and sizes.',
                'description_ar' => 'دجاج مشوي ، طماطم ، رقائق بارميزان ، جبنة بارميزان مبشورة ، كالي مبشور ، رومين مقطع ، عصير ليمون ، صلصة سيزر',
                'description_en' => 'Roasted chicken, tomatoes, parmesan crisps, shaved parmesan, shredded kale, chopped romaine, lime squeeze, caesar dressing',
                'product_details_ar' => '5cm',
                'product_details_en' => '5cm',
                'image' => 'images/products/product-1.png'
            ],

            [
                'title_ar' => 'السبانخ',
                'title_en' => 'spinach',
                'description_ar' => 'مدة الصلاحية: 2 سنوات في التخزين عند -18 درجة مئوية المكونات: السبانخ 100% خالية من المواد الحافظة و الألوان الصناعية المنكهة متنوعة: كاماروسا. موسم الحصاد: منتصف نوفمبر – نهاية مايو. التخزين: مخزن التجميد العميق (-18 درجة مئوية) لأكثر من 18 شهرا ولا يسمح باعادة التجميد المنشأ: مصر بلد الصنع:Egypt',
                'description_en' => 'Shelf life: 2 years in storage at -18°C Ingredients: Spinach 100% free of preservatives and artificial colors Flavoring Variety: Camarosa. Harvest season: mid-November - end of May. Storage: Deep Freeze (-18°C) for more than 18 months, no re-freezing is allowed. Origin: Egypt Country of Manufacture: Egypt',
                'product_details_ar' => '5cm',
                'product_details_en' => '5cm',
                'image' => 'images/products/product-1.png'
            ],
            [
                'title_ar' => 'الملوخية',
                'title_en' => 'mallow',
                'description_ar' => 'وزن الكيس: 400 جم عدد الأكياس بالكرتونة: 20 كيس وزن الكرتونة : 8 كيلوجرام',
                'description_en' => 'Bag weight: 400 gm, number of bags per carton: 20 bags, carton weight: 8 kg',
                'product_details_ar' => '5cm',
                'product_details_en' => '5cm',
                'image' => 'images/products/product-1.png'
            ],
            [
                'title_ar' => 'البسلة السكرى',
                'title_en' => 'Sugar pea',
                'description_ar' => 'بسلة سكرية - بسلة دراي',
                'description_en' => 'Sugar pea - Dry pea',
                'product_details_ar' => '5cm',
                'product_details_en' => '5cm',
                'image' => 'images/products/product-1.png'
            ],
            [
                'title_ar' => 'البسلة الدراى',
                'title_en' => 'Dry peas',
                'description_ar' => 'بسلة سكرية - بسلة دراي',
                'description_en' => 'Sugar pea - Dry pea',
                'product_details_ar' => '5cm',
                'product_details_en' => '5cm',
                'image' => 'images/products/product-1.png'
            ],
            [
                'title_ar' => 'الباذنجان المشوى',
                'title_en' => 'Grilled eggplant',
                'description_ar' => 'دجاج مشوي ، طماطم ، رقائق بارميزان ، جبنة بارميزان مبشورة ، كالي مبشور ، رومين مقطع ، عصير ليمون ، صلصة سيزر',
                'description_en' => 'Roasted chicken, tomatoes, parmesan crisps, shaved parmesan, shredded kale, chopped romaine, lime squeeze, caesar dressing',
                'product_details_ar' => '5cm',
                'product_details_en' => '5cm',
                'image' => 'images/products/product-1.png'
            ],
            [
                'title_ar' => 'الخرشوف المجمد قرص و مكعبات',
                'title_en' => 'Frozen artichoke disc and cubes',
                'description_ar' => 'أنصاف قلوب الخرشوف المجمدة خرشوف مجمد شرائح الخرشوف المجمدة نصف القلب شرائح الخرشوف في محلول ملحي معبأة في براميل أو علب',
                'description_en' => 'Frozen Artichoke Hearts Halves Frozen Artichoke Frozen Artichoke Slices Frozen Artichoke Half Heart Sliced Artichokes In Brine Packed In Barrels Or Cans',
                'product_details_ar' => '5cm',
                'product_details_en' => '5cm',
                'image' => 'images/products/product-1.png'
            ],
            [
                'title_ar' => 'البروكلى',
                'title_en' => 'broccoli',
                'description_ar' => 'وزن الكيس: 400 جم عدد الأكياس بالكرتونة: 20 كيس وزن الكرتونة : 8 كيلوجرام',
                'description_en' => 'Bag weight: 400 gm, number of bags per carton: 20 bags, carton weight: 8 kg',
                'product_details_ar' => '5cm',
                'product_details_en' => '5cm',
                'image' => 'images/products/product-1.png'
            ],
            [
                'title_ar' => 'الفول الأخضر',
                'title_en' => 'green beans',
                'description_ar' => 'فول مجمد',
                'description_en' => 'Frozen beans',
                'product_details_ar' => '5cm',
                'product_details_en' => '5cm',
                'image' => 'images/products/product-1.png'
            ],
            [
                'title_ar' => 'القلقاس المكعبات المجمد',
                'title_en' => 'Frozen diced taro',
                'description_ar' => 'وزن الكيس: 400 جم عدد الأكياس بالكرتونة: 20 كيس وزن الكرتونة : 8 كيلوجرام',
                'description_en' => 'Bag weight: 400 gm, number of bags per carton: 20 bags, carton weight: 8 kg',
                'product_details_ar' => '5cm',
                'product_details_en' => '5cm',
                'image' => 'images/products/product-1.png'
            ],
            [
                'title_ar' => 'الجوافة الشرائح و المكعبات و المفرومة',
                'title_en' => 'Guava slices, cubes and chopped',
                'description_ar' => 'الأصل: مزارعنا في مصر المنتج: الجوافة الطازجة متنوعة: الجوافة المصرية الحلوة اللون: أصفر أخضر طبيعي التعبئة: 2.5 ، 2 كجم كرتون تلسكوبي',
                'description_en' => 'Origin: Our farms in Egypt Product: Fresh Guava Variety: Sweet Egyptian Guava Color: Yellow Green Natural Packing: 2.5, 2 kg telescopic carton',
                'product_details_ar' => '5cm',
                'product_details_en' => '5cm',
                'image' => 'images/products/product-1.png'
            ],
        ];

        foreach ($products as $product) {
            Product::query()->create($product);
        }
    }
}
