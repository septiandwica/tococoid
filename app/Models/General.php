<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    protected $table = 'general_pages';

    protected $fillable = [
        'slug', 'title', 'home_img', 'about_desc', 'about_viss', 'about_miss',
        'contact_email', 'contact_phone', 'contact_ig', 'contact_tik', 'contact_linkedin', 'contact_loc',
        'meta_title', 'meta_description', 'meta_keywords'
    ];

    // Metode untuk mendapatkan satu entri General
    public static function getPage()
    {
        // Misalnya, kita mengembalikan entri pertama
        return self::first();
    }

    public function getImage()
    {
        if (!empty($this->home_img) && file_exists('upload/general/' . $this->home_img)) {
            return url('upload/general/' . $this->home_img);
        } else {
            return url('upload/general/default.jpg'); // default image if home_img is not set or doesn't exist
        }
    }
}
