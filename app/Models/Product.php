<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function title()
    {
        if (app()->getLocale() == 'en') {
            return $this->title_en;
        } else {
            return $this->title_ar;
        }
    }

    public function description()
    {
        if (app()->getLocale() == 'en') {
            return $this->description_en;
        } else {
            return $this->description_ar;
        }
    }

    public function product_details()
    {
        if (app()->getLocale() == 'ar') {
            return $this->product_details_ar;
        } else {
            return $this->product_details_en;
        }
    }

    public function images() {
        return $this->hasMany(Image::class);
    }
}
