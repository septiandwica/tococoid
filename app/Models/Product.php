<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_varian',
        'product_desc',
        'product_selling',
        'faq_question_1',
        'faq_answer_1',
        'faq_question_2',
        'faq_answer_2',
        'faq_question_3',
        'faq_answer_3',
        'product_img_1',
        'product_img_2',
        'product_img_3',
        'status',
        'is_deleted',
    ];

    static public function getSingle($id)
    {
        return self::find($id);
    }

    static public function getRecordProduct(){
        return self::select('products.*')
        ->where('is_deleted','=','0')
        ->orderBy('id','desc')
        ->paginate(10);
    }
    public function getImage($index = 1){
        $imageColumn = 'product_img_'.$index;
        
        if(!empty($this->$imageColumn) && file_exists('upload/products/'.$this->$imageColumn)){
            return url('upload/products/'.$this->$imageColumn);
        } else {
            return url('upload/placeholder/seo.jpg');
        }
    }
}
