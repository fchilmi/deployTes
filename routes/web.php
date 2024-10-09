<?php

use App\Http\Controllers\kontaksController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\UsersController;
use App\Models\Category;
use App\Models\kontak;
use App\Models\Post;
use App\Models\produk;
use App\Models\profil;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page', 'titles' => 'Halaman Home']);
});
Route::get('/about', function () {
    return view('about', ['name' => 'Sandi Rp', 'title' => 'About', 'titles' => 'Halaman About']);
});
Route::get('/posts', function () {
    // $posts = Post::with(['author', 'category'])->latest()->get();
    // $posts = Post::all();
    return view('posts', ['name' => 'Sandi Rp', 'title' => 'Blog', 'titles' => 'Halaman Blog', 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(10)->withQueryString()]);
});
Route::get('/posts/{post:slug}', function (Post $post) {
    // $post = Post::find($slug);
    return view('post', ['title' => 'Single Post', 'titles' => 'Halaman Post', 'post' => $post]);
});
Route::get('/authors/{user:username}', function (User $user) {
    // $posts = $user->posts->load('category', 'author');
    return view('posts', ['title' => count($user->posts) . ' Articles by ' . $user->name, 'titles' => 'Halaman Post', 'posts' => $user->posts]);
});
Route::get('/categories/{category:slug}', function (Category $category) {
    // $posts = $category->posts->load('category', 'author');
    return view('posts', ['title' => ' Articles in ' . $category->name, 'titles' => 'Halaman Post', 'posts' => $category->posts]);
});
Route::get('/contact', function () {
    return view('contact', ['name' => 'Sandi Rp', 'title' => 'Contact', 'titles' => 'Halaman Contact']);
});



//USERS FITUR
Route::get('/user/login', [UsersController::class, 'login'])->name('users.login')->middleware('guest');
Route::get('/login', [UsersController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [UsersController::class, 'auth_login'])->middleware('guest');
Route::post('/user/login', [UsersController::class, 'auth_login'])->middleware('guest');
Route::post('/logout', [UsersController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/logout2', [UsersController::class, 'logout'])->name('logout2');
//Add
Route::get('/user/create', [UsersController::class, 'create'])->name('user.create');
Route::post('/users', [UsersController::class, 'store'])->name('users.store');
//delete
Route::delete('/users/{id}/destroy', [UsersController::class, 'destroy'])->name('users.destroy');
//edit update
Route::get('/users/{id}/edit', [UsersController::class, 'edit'])->name('users.edit');
Route::put('/users/update/{id}', [UsersController::class, 'update'])->name('users.update');
//all
Route::get('/users', [UsersController::class, 'index'])->name('users');


//Produk guest
Route::get('/user/dashboard', function () {
    // $posts = Post::with(['author', 'category'])->latest()->get();
    // $posts = Post::all();
    // return view('/user/dashboard', ['name' => 'Sandi Rp', 'title' => 'Blog', 'titles' => 'Halaman Blog', 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(10)->withQueryString()]);
    return view('/user/dashboard', ['name' => 'Sandi Rp', 'title' => 'Produks', 'titles' => 'Halaman Produk', 'produks' => produk::all()->first()->paginate(9)]);
});
//Detail produk
Route::get('/user/detail/{produk:slug}', function (Produk $produk) {
    return view('user/detail', ['name' => 'Sandi Rp', 'title' => 'About', 'titles' => 'Halaman About', 'kontaks' => kontak::all(), 'produk' => $produk, 'produkKategori' => produk::inRandomOrder()->limit('4')->get()]);
});

//Page Produk
Route::get('/user/dataproduk', [produkController::class, 'index'])->name('users');
Route::post('/addProduk', [produkController::class, 'addProduks'])->name('produkAdd');
Route::put('/updateProduk/{id}', [produkController::class, 'updateProduk'])->name('produkUpdate');
Route::put('/updateProdukGambar/{id}', [produkController::class, 'updateProdukGambar'])->name('produkUpdateGambar');
Route::delete('/produk/{id}/destroy', [produkController::class, 'destroy'])->name('produkDestroy');
Route::get('/produk/{id}/edit', [produkController::class, 'edit'])->name('produksEdit');

//Page Profil
Route::get('/user/profilperusahaan', function () {
    return view('user/profilPerusahaan', ['name' => 'Sandi Rp', 'title' => 'About', 'titles' => 'Halaman About']);
})->name('profilPerusahaan');
Route::get('/profil/edit', function () {
    return view('user/editProfil', ['profil' => profil::first()]);
})->name('editProfil');
// Route::get('/user/addproduk', function () {
//     return view('user/addProduk', ['name' => 'Sandi Rp', 'title' => 'Add Produk', 'titles' => 'Halaman Add Produk']);
// });
Route::put('/user/updateProfil/{id}', [kontaksController::class, 'updateProfil'])->name('updateProfil');
Route::put('/user/updateGambar/{id}', [kontaksController::class, 'updateGambar'])->name('updateGambar');

//Page kontak
Route::get('/user/kontak', function () {
    return view('user/kontak', ['name' => 'Sandi Rp', 'title' => 'Kontak', 'titles' => 'Halaman Kontak', 'kontaks' => kontak::all()]);
})->name('user/kontak');
Route::post('/addKontak', [kontaksController::class, 'addKontak'])->name('addKontak');
Route::put('/user/updateKontak/{id}', [kontaksController::class, 'updateKontak'])->name('updateKontak');
