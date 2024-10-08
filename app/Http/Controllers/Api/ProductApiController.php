<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    //
    public function index(Request $request)
    {
        $products = Product::getRecordProduct(); // Gunakan metode yang ada untuk mendapatkan semua produk
        return response()->json($products);
    }

    public function show($id)
    {
        $product = Product::getSingle($id); // Menggunakan metode yang ada untuk mendapatkan produk berdasarkan ID
        if ($product) {
            return response()->json($product);
        }
        return response()->json(['message' => 'Product tidak ditemukan'], 404);
    }
}
