<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\EmailController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\RequestController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DocController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/logOut', [LoginController::class , 'logout']);


Route::get('/', [DocController::class , 'index'])->name('home');
Route::get('/partners', [DocController::class , 'partners'])->name('partners');
Route::get('/about-us', [DocController::class , 'us'])->name('about_us');
Route::get('/form', [DocController::class , 'form'])->name('form');
Route::post('/form/create', [DocController::class , 'store'])->name('form.create');
Route::get('/doctors', [DocController::class , 'doc'])->name('doc');
Route::post('/doctors/add', [DocController::class , 'storeDoc'])->name('doc.create');
Route::post('/form/createMail', [DocController::class , 'storeEmail'])->name('form.createMail');
Route::get('/articles', [DocController::class , 'articles'])->name('articles');
Route::get('/article/{id}', [DocController::class , 'article'])->name('article');
Route::get('/docServ', [DocController::class , 'docServ'])->middleware('doc')->name('doc.serv');
Route::post('/docServ/store', [DocController::class , 'storeDocServ'])->middleware('doc')->name('doc.serv.store');

Auth::routes();
Route::get('/welcome', function () {
    return view('welcome');
});

//dashboard 
Route::group(['prefix' => 'admin' , 'middleware' => 'isAdmin'] , function() {
// Users 
Route::get('/users', [UserController::class , 'index'])->name('admin.users');
Route::get('/user/create', [UserController::class , 'create'])->name('admin.user.create');
Route::get('/user/edit/{id}', [UserController::class , 'edit'])->name('admin.user.edit');
Route::get('/user/destroy/{id}', [UserController::class , 'destroy'])->name('admin.user.destroy');
Route::post('/user/store', [UserController::class , 'store'])->name('admin.user.store');
Route::post('/user/update{id}', [UserController::class , 'update'])->name('admin.user.update');

// Admins 
Route::get('/admins', [UserController::class , 'Adminindex'])->name('admin.admins');
Route::get('/admin/create', [UserController::class , 'Admincreate'])->name('admin.admin.create');
Route::get('/admin/edit/{id}', [UserController::class , 'Adminedit'])->name('admin.admin.edit');
Route::get('/admin/destroy/{id}', [UserController::class , 'Admindestroy'])->name('admin.admin.destroy');
Route::post('/admin/store', [UserController::class , 'Adminstore'])->name('admin.admin.store');
Route::post('/admin/update{id}', [UserController::class , 'Adminupdate'])->name('admin.admin.update');


// Articles 
Route::get('/articles', [ArticleController::class , 'index'])->name('admin.articles');
Route::get('/article/create', [ArticleController::class , 'create'])->name('admin.article.create');
Route::get('/article/edit/{id}', [ArticleController::class , 'edit'])->name('admin.article.edit');
Route::get('/article/destroy/{id}', [ArticleController::class , 'destroy'])->name('admin.article.destroy');
Route::post('/article/store', [ArticleController::class , 'store'])->name('admin.article.store');
Route::post('/article/update{id}', [ArticleController::class , 'update'])->name('admin.article.update');

// Banners
Route::get('/banners', [BannerController::class , 'index'])->name('admin.banners');
Route::get('/banner/edit/{id}', [BannerController::class , 'edit'])->name('admin.banner.edit');
Route::get('/banner/destroy/{id}', [BannerController::class , 'destroy'])->name('admin.banner.destroy');
Route::get('/banner/create', [BannerController::class , 'create'])->name('admin.banner.create');
Route::post('/banner/store', [BannerController::class , 'store'])->name('admin.banner.store');
Route::post('/banner/update/{id}', [BannerController::class , 'update'])->name('admin.banner.update');

// Cities
Route::get('/cities', [CityController::class , 'index'])->name('admin.cities');
Route::get('/city/edit/{id}', [CityController::class , 'edit'])->name('admin.city.edit');
Route::get('/city/destroy/{id}', [CityController::class , 'destroy'])->name('admin.city.destroy');
Route::get('/city/create', [CityController::class , 'create'])->name('admin.city.create');
Route::post('/city/store', [CityController::class , 'store'])->name('admin.city.store');
Route::post('/city/update/{id}', [CityController::class , 'update'])->name('admin.city.update');

// doctors
Route::get('doctors', [DoctorController::class , 'index'])->name('admin.doctors');
Route::get('doctor/accept/{id}', [DoctorController::class , 'accept'])->name('admin.doctor.accept');
Route::get('doctor/reject/{id}', [DoctorController::class , 'reject'])->name('admin.doctor.reject');
Route::get('doctor/destroy/{id}', [DoctorController::class , 'destroy'])->name('admin.doctor.destroy');

// E-mails
Route::get('emails',[EmailController::class,'index'])->name('admin.emails');
Route::get('email/destroy/{id}',[EmailController::class,'destroy'])->name('admin.emails.destroy');

// Requests 
Route::get('requests',[RequestController::class,'index'])->name('admin.requests');
Route::get('requests/destroy/{id}',[RequestController::class,'destroy'])->name('admin.requests.destroy');

// Services 
Route::get('services',[ServiceController::class,'index'])->name('admin.services');
Route::get('services/destroy/{id}',[ServiceController::class,'destroy'])->name('admin.services.destroy');

// Partners
Route::get('/partners', [PartnerController::class , 'index'])->name('admin.partners');
Route::get('/partner/edit/{id}', [PartnerController::class , 'edit'])->name('admin.partner.edit');
Route::get('/partner/destroy/{id}', [PartnerController::class , 'destroy'])->name('admin.partner.destroy');
Route::get('/partner/create', [PartnerController::class , 'create'])->name('admin.partner.create');
Route::post('/partner/store', [PartnerController::class , 'store'])->name('admin.partner.store');
Route::post('/partner/update/{id}', [PartnerController::class , 'update'])->name('admin.partner.update');

});

