<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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

    return view('blogs',[
        "blogs"=>Blog::with('category')->get()

    ]);

});
Route::get('/blogs/{blog:slug}', function (Blog $blog) {

    return view('blog',[
        "blog"=>$blog
    ]);
})->where('blog','[A-z\d\-_]+');

Route::get('/categories/{category:slug}',function(Category $category){
    // dd($category->blogs);
    return view('blogs',[
        "blogs"=>$category->blogs

    ]);
});
Route::get('/users/{user:id}',function(User $user){
    // dd($category->blogs);
    return view('blogs',[
        "blogs"=>$user->blogs

    ]);
});
