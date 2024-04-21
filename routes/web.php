<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\ProviderController;
use App\Http\Controllers\geustpgController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\welcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CommentController;

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
    return view('welcome');
});




Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);
Route::get('/auth/{provider}/callback', [ProviderController::class, 'callback']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin/admindashboard', function () {
    return view('/admin/dashboard');
})->middleware(['auth', 'verified', 'admin.credentials'])->name('admin.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';

// WELCOME PAGE
Route::get('/image', [welcomeController::class, 'showImage']);



// Articls page  for guests
Route::get('/guestarticles', [geustpgController::class, 'index'])->name('guestarticles');
// back to home route
Route::get('/', [geustpgController::class, 'home'])->name('home');
// search in guest articles page
Route::get('/search', [geustpgController::class, 'search'])->name('search');
// Route to page details article
Route::get('/articledetails/{id}', [geustpgController::class, 'articledetails'])->name('articledetails');


// ADMIN PAGE 'DASHBOARD'
Route::get('/admin/admindashboard', [AdminController::class, 'index'])->name('admindashboard');
Route::get('/admin/newarticles', [AdminController::class, 'newarticles'])->name('newarticles');
// /////////////////////
// Route to show articles in admin dashboard
Route::get('/admin/articlesadmin', [AdminController::class, 'articlesadmin'])->name('articlesadmin');
// Route to delete articles in admin dashboard view
Route::delete('/admin/articlesadmin/{article}', [AdminController::class, 'deleteArticle'])->name('admin.deleteArticle');

// /////////////////////
// Route to show Users in admin dashboard
Route::get('/admin/usersadmin', [AdminController::class, 'usersadmin'])->name('usersadmin');


// Author User page 
Route::get('author.addPost', [AuthorController::class, 'index'])->name('addPost');
Route::get('author.mangeArticles', [AuthorController::class, 'manageposts'])->name('mangeArticles');
Route::get('/dashboard', [AuthorController::class, 'indexB'])->name('dashboard');

Route::get('dashboard', [AuthorController::class, 'posts'])->name('dashboard');
// managearticles page
// Route::get('managearticles', [AuthorController::class, 'manageposts'])->name('managearticles');

// ADD NEW ARTICLES
Route::post('author.addPost', [AuthorController::class, 'addNewArticle'])->name('addNewArticle');
Route::get('/search', [AuthorController::class, 'searchindashboard'])->name('searchindashboard');
Route::get('/search', [AuthorController::class, 'searchMngarticle'])->name('search');
// delete article
// Route::delete('author.manageArticles', [AuthorController::class, 'deleteArticle']);


// Route::get('author/manageArticles', [AuthorController::class, 'manageArticles'])->name('author.manageArticles');
Route::post('author/manageArticles', [AuthorController::class, 'manageArticles'])->name('author.managearticles');
Route::delete('author/manageArticles/{article}', [AuthorController::class, 'deleteArticle'])->name('author.deleteArticle');
// Details page for auth user 
Route::get('author/detailspg/{id}', [AuthorController::class, 'authorticledetails'])->name('detailspg');

// Route for likes
Route::post('/like', [AuthorController::class, 'likes'])->name('likes');

// COMMENTS 
// post the comments
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');

// Show all the comments in deatailspd
Route::get('/comments', [CommentController::class, 'showComments'])->name('comments.index');

