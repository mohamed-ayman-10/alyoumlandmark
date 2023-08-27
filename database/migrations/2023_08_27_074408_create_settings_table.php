<?php

use App\Models\Setting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('title_ar', 999);
            $table->string('title_en', 999);
            $table->text('address_ar');
            $table->text('address_en');
            $table->string('phone');
            $table->string('email');
            $table->text('facebook');
            $table->string('whatsapp');
            $table->text('logo');
            $table->text('favicon');
            $table->timestamps();
        });

        Setting::query()->create([
            'title_ar' => 'اليوم لاند مارك',
            'title_en' => 'Alyom land mark',
            'address_ar' => '121 عمارات الرقابة الادارية حدائق القبة - القاهرة',
            'address_en' => '121 Administrative Control Buildings Hadayek El Kobba - Cairo',
            'phone' => '02-24511803, 01122022033',
            'email' => 'info@alyomlandmark.com',
            'facebook' => 'https://www.facebook.com/profile.php?id=100093195830235&mibextid=ZbWKwL',
            'whatsapp' => '01122022033',
            'logo' => 'images/logo.png',
            'favicon' => 'images/logo.png',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
