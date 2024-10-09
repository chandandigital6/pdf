<?php


use App\Http\Controllers\AboutController;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermanentController;

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


Route::get('/',[AuthController::class,'index'])->name('login-form');
Route::get('registration',[AuthController::class,'registration'])->name('registration');
//Route::post('store', [AuthController::class, 'store'])->name('auth.store');
Route::post('auth-store', [AuthController::class, 'store'])->name('auth-store');
Route::post('login',[AuthController::class,'login'])->name('auth.login');
Route::get('logout',[AuthController::class,'logout'])->name('logout');
Route::get('forget',[AuthController::class,'forget'])->name('auth.forget');
Route::post('forget',[AuthController::class,'forget_pass'])->name('auth.forget_pass');
Route::get('reset-password',[AuthController::class,'reset_password'])->name('reset-password');
Route::post('store-password',[AuthController::class,'store_password'])->name('store-password');


Route::get('/{url}',[\App\Http\Controllers\PdfController::class,'show'])->name('pdf.show');
Route::get('dashboard', [AuthController::class, 'dashboard'])
    ->middleware(['auth'])
    ->name('auth.dashboard');

Route::group(['middleware' => ['auth']],function (){

      //  about

    Route::get('about/index',[AboutController::class,'index'])->name('about.index');
    Route::get('about/create',[AboutController::class,'create'])->name('about.create');
    Route::post('about/store',[AboutController::class,'store'])->name('about.store');
    Route::get('about/edit/{about}',[AboutController::class,'edit'])->name('about.edit');
    Route::get('about/delete/{about}',[AboutController::class,'delete'])->name('about.delete');
    Route::get('/about/qrcode/{about}', [AboutController::class, 'generateQrCode'])->name('about.qrcode');

    Route::post('about/update/{about}',[AboutController::class,'update'])->name('about.update');




    Route::get('pdf/index',[PdfController::class,'index'])->name('pdf.index');
    Route::get('pdf/create',[PdfController::class,'create'])->name('pdf.create');
    Route::post('pdf/store',[PdfController::class,'store'])->name('pdf.store');
    Route::get('pdf/edit/{pdf}',[PdfController::class,'edit'])->name('pdf.edit');
    Route::get('pdf/delete/{pdf}',[PdfController::class,'delete'])->name('pdf.delete');
    Route::get('/pdf/qrcode/{pdf}', [PdfController::class, 'generateQrCode'])->name('pdf.qrcode');

    Route::get('pdf/{url}',[PdfController::class,'showQr'])->name('pdf.showQr');
    Route::post('pdf/update/{pdf}',[PdfController::class,'update'])->name('pdf.update');


 // permanrnt
    Route::get('permanent/index', [PermanentController::class, 'index'])->name('permanent.index');
    Route::get('permanent/create',[PermanentController::class,'create'])->name('permanent.create');
    Route::post('permanent/store',[PermanentController::class,'store'])->name('permanent.store');
    Route::get('permanent/edit/{permanent}',[PermanentController::class,'edit'])->name('permanent.edit');
    Route::get('permanent/delete/{permanent}',[PermanentController::class,'delete'])->name('permanent.delete');
    Route::get('/permanent/show/{permanent}', [PermanentController::class, 'show'])->name('permanent.show');
    // Route::get('permanent/{url}',[PermanentController::class,'showQr'])->name('permanent.showQr');
    Route::post('permanent/update/{permanent}',[PermanentController::class,'update'])->name('permanent.update');

});




