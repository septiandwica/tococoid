<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request; 
use Illuminate\Support\Str;


class ProductController extends Controller
{

    public function product(){
        $data['getProduct'] = Product::getRecordProduct();
        return view("backend.product.list", $data);
    }
    public function add_product(){
        return view("backend.product.add");
    }

    public function add_product_action(Request $request){
        $request->validate([
            'product_name' => 'required|string|max:255',
            'product_varian' => 'required|string|max:255',
            'product_desc' => 'required|string',
            'product_selling' => 'required|numeric',
            'faq_question_1' => 'required|string|max:255',
            'faq_answer_1' => 'required|string|max:255',
            'faq_question_2' => 'required|string|max:255',
            'faq_answer_2' => 'required|string|max:255',
            'faq_question_3' => 'required|string|max:255',
            'faq_answer_3' => 'required|string|max:255',
            'product_img_1' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'product_img_2' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'product_img_3' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

       

        // Create a new product
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->product_varian = $request->product_varian;
        $product->product_desc = $request->product_desc;
        $product->product_selling = $request->product_selling;
        $product->faq_question_1 = $request->faq_question_1;
        $product->faq_answer_1 = $request->faq_answer_1;
        $product->faq_question_2 = $request->faq_question_2;
        $product->faq_answer_2 = $request->faq_answer_2;
        $product->faq_question_3 = $request->faq_question_3;
        $product->faq_answer_3 = $request->faq_answer_3;
        $product->is_deleted = 0;

        $slug = Str::slug($request->product_name);
        $checkSlug = Product::where('product_slug', '=', $slug)->first();
        if (!empty($checkSlug)) {
            $dbSlug = $slug . '-' . $product->id;
        } else {
            $dbSlug = $slug;
        }
        $product->product_slug = $dbSlug;

        // Simpan gambar produk
        for ($i = 1; $i <= 3; $i++) {
            if (!empty($request->file('product_img_' . $i))) {
                $ext = $request->file('product_img_' . $i)->getClientOriginalExtension();
                $file = $request->file('product_img_' . $i);
                $filename = $dbSlug . '_img_' . $i . '.' . $ext;
                $file->move('upload/products', $filename);

                // Simpan nama file gambar di kolom yang sesuai
                $product->{'product_img_' . $i} = $filename;
            }
        }


        // Save the product to the database
        $product->save();

        // Redirect back with a success message
        return redirect()->route('dashboard/product/list')->with('success', 'Product added successfully.');
    }
}
