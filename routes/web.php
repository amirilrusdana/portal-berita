<?php

use App\Http\Controllers\AdminCategoryController;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $bloging =[
        [
        "title" => "Cover your page.",
        "isi" => "Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.",
        "button" => "Learn more"
    ],
];
    return view('home', [
        "tittle" => "Home",
        "posting" => $bloging
    ]);
});

Route::get('/posting', function () {
    return view('posting', [
        "active" => "Posts",
        "title" => "Posts"
    ]);
});

Route::get('/categories', function(){
    return view('categories', [
        'active' => "Category",
        'title' => "Category",
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('about', [
        'active' => "Category",
        'title' => "Post Category : $category->name",
        'posts' => $category->posts->load('category', 'author')
    ]);
});

Route::get('/authors/{author:username}', function(User $author){
    return view('about', [
        'title' => "Post by Author : $author->name",
        'posts' => $author->posts->load('category', 'author')
    ]);
});

//halaman single post
// Route::get('/about/{post:slug}', [PostController::class, 'show']);
Route::get('/show/{post:slug}', [PostController::class, 'show']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/about', [PostController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::delete('/dashboard/categories/{id}', [AdminCategoryController::class, 'destroy']);
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
