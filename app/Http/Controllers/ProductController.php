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

    public function edit_product($id) {
        // Fetch the product details
        $product = Product::findOrFail($id);
    
        // Pass the product data to the view
        return view('backend.product.edit', compact('product'));
    }
    public function edit_product_action(Request $request, $id){
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
            'product_img_1' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg',
            'product_img_2' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg',
            'product_img_3' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
    
        // Fetch the existing product
        $product = Product::findOrFail($id);
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
        if (!empty($checkSlug) && $checkSlug->id != $product->id) {
            $dbSlug = $slug . '-' . $product->id;
        } else {
            $dbSlug = $slug;
        }
        $product->product_slug = $dbSlug;
    
        // Update product images
        for ($i = 1; $i <= 3; $i++) {
            if (!empty($request->file('product_img_' . $i))) {
                $ext = $request->file('product_img_' . $i)->getClientOriginalExtension();
                $file = $request->file('product_img_' . $i);
                $filename = $dbSlug . '_img_' . $i . '.' . $ext;
                $file->move('upload/products', $filename);
    
                // Update the image file name in the respective column
                $product->{'product_img_' . $i} = $filename;
            }
        }
    
        // Save the updated product to the database
        $product->save();
    
        // Redirect back with a success message
        return redirect()->route('dashboard/product/list')->with('success', 'Product updated successfully.');
    }
    
    public function delete_product($id){
        $product = Product::getSingle($id);

        if ($product) {
            $product->is_deleted = 1;
            $product->save();
            return redirect()->back()->with("success", "Product deleted successfully.");
        } else {
            return redirect()->back()->with("error", "Product not found.");
        }
    }

}
