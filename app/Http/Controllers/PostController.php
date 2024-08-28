<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    //
    public function index(){

        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('auhor')){
            $author = User::firstWhere('username', request('category'));
            $title = ' in ' . $author->name;
        }

        return view('about', [
            "title" => "All Post",
            'active' => "About",
            //"posts" => Post::all(),
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(10)->withQueryString()
        ]);
    }
    public function show(Post $post){
        return view('show', [
            'title' => 'Single Post',
            'active' => 'About',
            'post' => $post
        ]);
    }
}
