<?php

namespace App\Http\Controllers;

use App\Models\General;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index() {
        $general = General::getPage(); // Mengambil data General
        $getProduct = Product::getRecordProduct();
        return view('frontend.index', compact('general', 'getProduct'));
    }
    public function about() {
        $general = General::getPage(); // Mengambil data General
        return view('frontend.about', compact('general'));
    }
    public function product() {
        $getProduct = Product::getRecordProduct();
        return view('frontend.product', compact('getProduct'));
    }
    public function product_detail($slug){
        $productdetail = Product::where('product_slug', $slug)->first();
        
        if (!empty($productdetail)) {
            $data['productdetail'] = $productdetail;
            $data['meta_tit'] = $productdetail->product_name;
            $data['meta_keys'] = ''; // Tambahkan meta keywords jika tersedia
            $data['meta_desc'] = $productdetail->product_desc;
    
            return view('frontend.productdetail', $data);
        } else {
            abort(404);
        }
    }
    public function blog() {
        return view('frontend.blog');
    }
    public function contact() {
        $general = General::getPage();
        return view('frontend.contact', compact('general'));
    }
}
