<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CategoryController;
use App\Models\Post;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// to index of my blog
Route::get('/blog/blog-index',[BlogController::class,'index'])->name('index-blog.index')->middleware('auth');

//Simple index
Route::get('/',[WelcomeController::class,'index'])->name('welcome.index');

//Create blog post
Route::get('/blog/create',[BlogController::class,'create'])->name('blog.create');

//single post
Route::get('/blog-single/{post:slug}',[BlogController::class,'show'])->name('blog-single.show');

//Store blog post to the database
Route::post('/blog/store',[BlogController::class,'store'])->name('blog.store');

//Users list
Route::get('/blog/dashboard/users-list',[BlogController::class,'users'])->name('users.users')->middleware('auth');

//Users delete
Route::get('/blog/dashboard/users/delete/{user}',[BlogController::class,'delete_user'])->name('users.delete_user');

//Edit single blog post
Route::get('/bog/{post}/edit',[BlogController::class,'edit'])->name('blog.edit');

//Edit single blog post
Route::get('/bog/{post}/delete',[BlogController::class,'delete'])->name('blog.delete');

//show category page single blog post
Route::get('/blog/{category}',[BlogController::class,'show_category'])->name('blog-category.show_category');

// Update single blog post
Route::put('/blog/{post}/update',[BlogController::class,'update'])->name('blog.update');

// Contact form with contact page
Route::post('/contact/form-contact',[BlogController::class,'form'])->name('contact.form');

//show Tag page single blog post
Route::get('/blog-tag-posts/{tag}',[BlogController::class,'show_tag'])->name('blog-tag.show_tag');

//User Related Posts
Route::get('/blog/{user}/related',[BlogController::class,'related'])->name('user.related');

// about page
Route::get('/about',function(){
    // $post = Post::find(2);
    // $post->forceDelete();
    // $posts = Post::withTrashed()->where('id',2)->restore();
    // dd($posts);
    return view('user.about');


//contact page
});Route::get('contact',function(){
    return view('user.contact');
})->middleware(['auth:sanctum','verified']);

//Category resources controller
// Route::resource('/categories',CategoryController::class);

Route::middleware(['isAdmin'])->group(function(){
    // The resources controller above under the hood
    Route::get('/categories',[CategoryController::class,'index'])->name('categories.index');
    Route::get('/categories/create',[CategoryController::class,'create'])->name('categories.create');
    Route::post('/categories',[CategoryController::class,'store'])->name('categories.store');
    Route::get('/categories/{category}',[CategoryController::class,'show'])->name('categories.show');
    Route::get('/categories/{category}/edit',[CategoryController::class,'edit'])->name('categories.edit');
    Route::put('/categories/{category}',[CategoryController::class,'update'])->name('categories.update');
    Route::get('/categories/{category}',[CategoryController::class,'destroy'])->name('categories.destroy');

    //Tags resources controller
    // Route::resource('/categories',CategoryController::class);
    
     
    // The resources controller above under the hood
    Route::get('/tags',[TagController::class,'index'])->name('tags.index');
    Route::get('/tags/create',[TagController::class,'create'])->name('tags.create');
    Route::post('/tags',[TagController::class,'store'])->name('tags.store');
    Route::get('/tags/{tag}',[TagController::class,'show'])->name('tags.show');
    Route::get('/tags/{tag}/edit',[TagController::class,'edit'])->name('tags.edit');
    Route::put('/tags/{tag}',[TagController::class,'update'])->name('tags.update');
    Route::get('/tags/{tag}',[TagController::class,'destroy'])->name('tags.destroy');
});
 



