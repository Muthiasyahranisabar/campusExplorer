<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class PostController extends Controller
{
    public function index() {

        $title ='';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title= ' in ' .$category->nama;
        }

        $title ='';
        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title= ' in ' .$author->name;
        }

        return view('post', [
            "title" => "All Post" . $title,
            "active" => 'post',
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
         ]);
        
    }

    public function show(Post $post)
    {
        return view('posts', [
            "title" => " Show Post",
            "active" => 'post',
            "posts" => $post
        ]);
    }

}
