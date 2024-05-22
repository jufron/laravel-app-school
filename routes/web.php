<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PagesController;
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

Route::controller(PagesController::class)->group( function () {
  Route::get('/', 'home')->name('beranda');

  Route::prefix('profil')->group( function () {
    Route::get('/sejarah', 'sejarah')->name('sejarah');
    Route::get('visi-misi', 'visiMisi')->name('visiMisi');
    Route::get('programKeahlian', 'programKeahlian')->name('programKeahlian');
  });

  Route::get('galeri', 'galeri')->name('galeri');
  Route::get('ppdb', 'ppdb')->name('ppdb');
  Route::get('blog', 'blog')->name('blog');
  Route::get('blog/detail', 'blogDetail')->name('blog.dateil');
  Route::get('kontak', 'kontak')->name('kontak');
  Route::get('pengajar', 'daftar_guru')->name('daftar_guru');
});

require __DIR__.'/auth.php';

Route::middleware('auth')->controller(ProfileController::class)->group(function () {
    Route::get('/profile', 'edit')->name('profile.edit');
    Route::patch('/profile', 'update')->name('profile.update');
    Route::delete('/profile', 'destroy')->name('profile.destroy');
});


// test view email
Route::get('test/email', function () {
    return view('mails.email-test');
});
Route::get('test/alpine', function () {
    return view('test');
});
