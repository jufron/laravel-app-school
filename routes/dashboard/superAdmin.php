<?php

use App\Http\Controllers\Dashboard\AppManejement\BannerController;
use App\Http\Controllers\Dashboard\AppManejement\GaleriController;
use App\Http\Controllers\Dashboard\AppManejement\GeneralController;
use App\Http\Controllers\Dashboard\AppManejement\SocialMediaController;
use App\Http\Controllers\Dashboard\AppManejement\TeleponController;
use App\Http\Controllers\Dashboard\AppManejement\TestimoniController;
use Illuminate\Support\Facades\Route;

// dashboard/

Route::get('/', function () {
    return view('dashboard.home');
})->name('dashboard.home');

// app manajement
// * banner
Route::prefix('banner')->controller(BannerController::class)->group( function () {
    Route::get('/', 'index')->name('dashboard.banner');
    Route::post('/', 'store')->name('dashboard.banner.store');
    Route::get('/download/{id}', 'download')->name('dashboard.banner.download');
    Route::delete('/{id}', 'destroy')->name('dashboard.banner.destroy');
});

// * galery
Route::prefix('galeri')->controller(GaleriController::class)->group( function () {
    Route::get('/', 'index')->name('dashboard.galeri');
    Route::post('/', 'store')->name('dashboard.galeri.store');
    Route::get('/download/{galery}', 'download')->name('dashboard.galeri.download');
    Route::delete('/{galery}', 'destroy')->name('dashboard.galeri.destroy');
});

// * testimonial
Route::prefix('testimoni')->controller(TestimoniController::class)->group( function () {
    Route::get('/', 'index')->name('dashboard.testimoni');
    Route::post('/', 'store')->name('dashboard.testimoni.store');
    Route::get('/show/{testimonial}', 'get')->name('dashboard.testimoni.get');
    Route::get('/edit/{testimonial}', 'edit')->name('dashboard.testimoni.edit');
    Route::patch('{testimonial}', 'update')->name('dashboard.testimoni.update');
    Route::delete('/{testimonial}', 'destroy')->name('dashboard.testimoni.destroy');
});

// * social media
Route::prefix('social-media')->controller(SocialMediaController::class)->group( function () {
    Route::get('/', 'index')->name('dashboard.social-media');
    Route::post('/', 'store')->name('dashboard.social-media.store');
    Route::delete('/{socialMedia}', 'destroy')->name('dashboard.social-media.destroy');
});

// * telepon
Route::prefix('telepon')->controller(TeleponController::class)->group( function () {
    Route::get('/', 'index')->name('dashboard.telepon');
    Route::post('/', 'store')->name('dashboard.telepon.store');
    Route::delete('/{telepon}', 'destroy')->name('dashboard.telepon.destroy');
});

// * general
Route::prefix('general')->controller(GeneralController::class)->group( function () {
    Route::get('/', 'index')->name('dashboard.general');
    ROute::get('/edit', 'edit')->name('dashboard.general.edit');
    Route::post('/', 'update')->name('dashboard.general.update');
    // todo upload image CKEDITOR upload and delete via ajax
    Route::post('/upload', 'upload')->name('dashboard.general.upload.image');
    Route::delete('/upload', 'destroy')->name('dashboard.general.destroy.image');
});

Route::get('visi-misi', function () {

})->name('visi-misi');

Route::get('test/kategory', function () {
    return view('dashboard.blogManejement.blog.kategory');
})->name('dashboard.kategory');

Route::get('test/blog', function () {
    return view('dashboard.blogManejement.blog');
})->name('dashboard.blog');

Route::get('test/blog/publish', function () {
    return view('dashboard.blogManejement.blog.publish');
})->name('dashboard.publish');

Route::get('test/mata-pelajaran', function () {
    return view('dashboard.akademik.mata-pelajaran');
})->name('dashboard.mata_pelajaran');

Route::get('test/guru', function () {
    return view('dashboard.akademik.guru');
})->name('dashboard.guru');

Route::get('test/siswa', function () {
    return view('dashboard.akademik.siswa');
})->name('dashboard.siswa');


Route::get('test/profile', function () {
    return view('dashboard.profile');
})->name('dashboard.profile.test');
