<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;



class BlogController extends Controller
{
    public function blog(){
        $data['getArticle'] = Blog::getArticle();
        return view("backend.blog.list", $data);
    }
    public function add_blog(Request $request){
        $blog = Blog::getArticle();
        return view("backend.blog.add", compact('blog'));
    }
    
    public function add_blog_action(Request $request) {
        $validator = Validator::make($request->all(), [
            'blog_title' => 'required',
            'blog_content' => 'required',
            'blog_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'blog_readtime' => 'required',
        ]);
    
        // Validasi rasio aspek gambar
        $validator->after(function ($validator) use ($request) {
            $targetWidth = 1920; // Lebar yang diinginkan untuk rasio 16:9
            $targetHeight = 1080; // Tinggi yang diinginkan untuk rasio 16:9
            $aspectRatio = $targetWidth / $targetHeight;
    
            if ($request->hasFile('blog_img')) {
                $image = getimagesize($request->file('blog_img'));
                $width = $image[0];
                $height = $image[1];
    
                if (abs($width / $height - $aspectRatio) > 0.01) { // Toleransi sedikit
                    $validator->errors()->add('blog_img', 'Gambar harus memiliki rasio aspek 16:9 (1920x1080 piksel).');
                }
            }
        });
    
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
    
        // Define a maximum length for the meta description
        $maxMetaLength = 100;
    
        // Create a new instance of the Blog model
        $blog = new Blog();
        $blog->user_id = Auth::user()->id;
        $blog->blog_title = trim($request->blog_title);
        $blog->blog_content = trim($request->blog_content);
        $blog->meta_description = trim(Str::limit($request->meta_description, $maxMetaLength));
        $blog->meta_keywords = trim($request->meta_keywords);
        $blog->blog_readtime = trim($request->blog_readtime);
    
        // Generate a unique slug for the blog title
        $slug = Str::slug($request->blog_title); 
        $checkSlug = Blog::where('blog_slug', '=', $slug)->first();
        if (!empty($checkSlug)) {
            $dbslug = $slug . '-' . $blog->id; 
        } else {
            $dbslug = $slug;
        }
        $blog->blog_slug = $dbslug;
    
        // Handle the image file upload
        if (!empty($request->file('blog_img'))) {
            $ext = $request->file('blog_img')->getClientOriginalExtension();
            $file = $request->file('blog_img');
            $filename = $dbslug . '.' . $ext;
            $file->move('upload/blogs', $filename);
    
            $blog->blog_img = $filename;
        }
    
        // Save the blog instance to the database
        $blog->save();
    
        // Redirect to the blog list page with a success message
        return redirect("dashboard/blog/list")->with("success", "Blog added successfully.");
    }
    

    public function edit_blog($id){
        $data['getArticle'] = Blog::getSingle($id);
        return view('backend.blog.edit', $data);
        
    }

    public function edit_blog_action(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'blog_title' => 'required',
            'blog_content' => 'required',
            'blog_readtime' => 'required',
            'blog_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
    
        // Validasi rasio aspek gambar
        $validator->after(function ($validator) use ($request) {
            $targetWidth = 1920; // Lebar yang diinginkan untuk rasio 16:9
            $targetHeight = 1080; // Tinggi yang diinginkan untuk rasio 16:9
            $aspectRatio = $targetWidth / $targetHeight;
    
            if ($request->hasFile('blog_img')) {
                $image = getimagesize($request->file('blog_img'));
                $width = $image[0];
                $height = $image[1];
    
                if (abs($width / $height - $aspectRatio) > 0.01) { // Toleransi sedikit
                    $validator->errors()->add('blog_img', 'Gambar harus memiliki rasio aspek 16:9 (1920x1080 piksel).');
                }
            }
        });
    
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
    
        // Define a maximum length for the meta description
        $maxMetaLength = 100;
    
        // Find the existing blog post by ID
        $blog = Blog::findOrFail($id);
    
        // Update the blog post with new values
        $blog->user_id = Auth::user()->id;
        $blog->blog_title = trim($request->blog_title);
        $blog->blog_content = trim($request->blog_content);
        $blog->meta_description = trim(Str::limit($request->meta_description, $maxMetaLength));
        $blog->meta_keywords = trim($request->meta_keywords);
        $blog->blog_readtime = trim($request->blog_readtime);
    
        // Generate a unique slug if the title has changed
        if ($blog->blog_title != $request->blog_title) {
            $slug = Str::slug($request->blog_title);
            $checkSlug = Blog::where('blog_slug', '=', $slug)->first();
            if (!empty($checkSlug) && $checkSlug->id != $blog->id) {
                $dbslug = $slug . '-' . $blog->id;
            } else {
                $dbslug = $slug;
            }
            $blog->blog_slug = $dbslug;
        }
    
        // Handle the image file upload if a new image is provided
        if ($request->hasFile('blog_img')) {
            // Delete the old image if it exists
            if ($blog->blog_img) {
                unlink(public_path('upload/blogs/' . $blog->blog_img));
            }
            $ext = $request->file('blog_img')->getClientOriginalExtension();
            $file = $request->file('blog_img');
            $filename = $blog->blog_slug . '.' . $ext;
            $file->move('upload/blogs', $filename);
    
            $blog->blog_img = $filename;
        }
    
        // Save the changes to the blog post
        $blog->save();
    
        // Redirect to the blog list page with a success message
        return redirect("dashboard/blog/list")->with("success", "Blog updated successfully.");
    }
    
    

    public function delete_blog($id){
        $blog = Blog::getSingle($id);

        if ($blog) {
            $blog->is_deleted = 1;
            $blog->save();
            return redirect()->back()->with("success", "Blog deleted successfully.");
        } else {
            return redirect()->back()->with("error", "blog not found.");
        }
    }
}
