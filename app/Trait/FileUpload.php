<?php

namespace App\Trait;

trait FileUpload
{
    static public function File($type, $file)
    {
        $extention = strtolower($file->getClientOriginalExtension());
        $name = time() . rand(100, 999) . '.'  . $extention;
        return $file->move($type, $name);
    }

    static public function Delete($file)
    {
        if (file_exists($file)) {
            return unlink($file);
        }
    }
}
