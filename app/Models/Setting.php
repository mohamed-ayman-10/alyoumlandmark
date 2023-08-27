<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function address()
    {
        if (app()->getLocale() == 'ar') {
            return $this->address_ar;
        } else {
            return $this->address_en;
        }
    }

    public function title()
    {
        if (app()->getLocale() == 'ar') {
            return $this->title_ar;
        } else {
            return $this->title_en;
        }
    }
}
