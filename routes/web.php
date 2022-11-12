<?php

use App\Http\Controllers\AdminCategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view("home", [
    "title" => "home",
    'active' => 'home'
  ]);
});

Route::get('/about', function () {
  return view("about", [
    'active' => 'about',
    "nama" => "Muhammad Afif",
    "email" => "muhammadafifjpr@gmail.com",
    "image" => "profile.jpeg",
    "title" => "about"
  ]);
});

Route::get('/blogs', [PostController::class, 'index']);

Route::get('/post/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
  return view('categories', [
    'title' => 'Post Categories',
    'active' => 'categories',
    'categories' => Category::all(),
  ]);
});

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticated']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
  return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkslug', [DashboardPostController::class, 'checkslug'])->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('isAdmin');

// Route::get('/categories/{category:slug}', function(Category $category){
//   return view('posts', [
//     'active' => 'categories',
//     'title' => "Post By Category : $category->name",
//     'posts' => $category->posts->loadMissing('category', 'author'),
//   ]);
// });

// Route::get('/authors/{author:username}', function(User $author){
//   return view('posts', [
//     'title' => "Post By Author : $author->name",
//     'posts' => $author->post->loadMissing('category', 'author'),
//   ]);
// });