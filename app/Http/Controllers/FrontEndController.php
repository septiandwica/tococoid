<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\General;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index() {
        $general = General::getPage(); // Mengambil data General
        $getProduct = Product::getRecordProduct();
        $getArticle = Blog::getArticle()->shuffle()->take(3);
        return view('frontend.index', compact('general', 'getProduct', 'getArticle'));
    }
    public function about() {
        $general = General::getPage();
        $productinfo = Product::getRecordProduct(); // Mengambil data General
        return view('frontend.about', compact('general', 'productinfo'));
    }
    public function product() {
        $general = General::getPage(); // Mengambil data General
        $getProduct = Product::getRecordProduct();
        return view('frontend.product', compact('getProduct', 'general'));
    }
    public function product_detail($slug){
        
        $productdetail = Product::where('product_slug', $slug)->first();
        
        if (!empty($productdetail)) {
            $data['featured'] = Product::getRecordProduct()->shuffle()->take(4);
            $data['productdetail'] = $productdetail;
            $data['general'] = General::getPage(); // Mengambil data General


            return view('frontend.productdetail', $data);
        } else {
            abort(404);
        }

    }
    public function blog() {
        $data['getArticle'] = Blog::getArticle();
        $data['general'] = General::getPage(); // Mengambil data General

        return view('frontend.blog', $data);
    }
    public function blog_detail($slug){
        $blogdetail = Blog::getArticleSlug($slug);
        
        if (!empty($blogdetail)) {
            $featuredBlogs = Blog::getArticle()
            ->where('blogs.id', '!=', $blogdetail->id)
            ->shuffle()
            ->take(3);

            $data['featuredBlog'] = $featuredBlogs;
            $data['blogdetail'] = $blogdetail;
            $data['general'] = General::getPage(); // Mengambil data General

    
            return view('frontend.blogdetail', $data);
        } else {
            abort(404);
        }
    }

    public function contact() {
        $general = General::getPage();

        return view('frontend.contact', compact('general'));
    }
}
