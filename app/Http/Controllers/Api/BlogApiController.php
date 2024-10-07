<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogApiController extends Controller
{
    //
    public function index(Request $request)
    {
        $blogs = Blog::getArticle(); // Use your existing method to get articles
        return response()->json($blogs);
        
    }

    public function show($slug)
    {
        $blog = Blog::getArticleSlug($slug); // Use your existing method to get a single article by slug
        if ($blog) {
            return response()->json($blog);
        }
        return response()->json(['message' => 'Blog not found'], 404);
    }
}
