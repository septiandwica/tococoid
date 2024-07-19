<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Blog extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class, "user_id");
    }
    static public function getSingle($id)
    {
        return self::find($id);
    }


    static public function getArticle() {
        // Select blogs and the author's name
        $query = self::select('blogs.*', 'users.name as author')
            ->join('users', 'users.id', '=', 'blogs.user_id')
            ->where('blogs.is_deleted', '=', '0')
            ->orderBy('blogs.id', 'desc');
    
        // Check if the user is authenticated and not an admin
        if (!empty(Auth::check()) && Auth::user()->role_id != 1) {
            $query = $query->where('blogs.user_id', '=', Auth::user()->id);
        }
    
        if (request()->filled('author')) {
            $query->where('users.name', 'like', '%' . request()->input('author') . '%');
        }
        if (request()->filled('title')) {
            $query->where('blogs.blog_title', 'like', '%' . request()->input('title') . '%');
        }
    
        // Paginate the results and ensure we return the paginator object
        return $query->paginate(6);
    }
    static public function getArticleSlug($slug) {
        return self::select('blogs.*', 'users.name as author', 'users.role_id', 'roles.name as role')
            ->join('users', 'users.id', '=', 'blogs.user_id')
            ->join('roles', 'roles.id', '=', 'users.role_id')
            ->where('blogs.is_deleted', '=', '0')
            ->where('blogs.blog_slug', '=', $slug)
            ->first();
    }

    public function getImage(){
        if(!empty($this->blog_img) && file_exists('upload/blogs/'.$this->blog_img)){
            return url('upload/blogs/'.$this->blog_img);
        }else{
            return url('upload/blogs/seo.jpg');;
        }
    }
}
