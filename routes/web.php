<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SubscriberController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [
    PageController::class,'home'
])->name('home');

Route::get('/our-activities', [
    PageController::class,'ourActivities'
])->name('our-activities');

Route::get('/our-achievements', [
    PageController::class,'ourAchievements'
])->name('our-achievements');

Route::get('/partnerships', [
    PageController::class,'partnerships'
])->name('partnerships');

Route::get('/future-plans', [
    PageController::class,'futurePlans'
])->name('future-plans');

Route::get('/contact-info', [
    PageController::class,'contactInfo'
])->name('contact-info');

Route::get('/objectives', [
    PageController::class,'objectives'
])->name('objectives');

Route::get('/ngo-management', [
    PageController::class,'ngoManagement'
])->name('ngo-management');

Route::get('/funding-guarantee', [
    PageController::class,'fundingGuarantee'
])->name('funding-guarantee');

Route::get('/rsdf-region-office', [
    PageController::class,'rsdfRegionOffice'
])->name('rsdf-region-office');

Route::post('/pages', [
    PageController::class,'uploadPhoto'
])->name('pages.upload-photo')->middleware(['auth']);

Route::post('/contact-us', [
    PageController::class,'contact'
])->name('contact-us');

Route::get('/subscribers', [
    SubscriberController::class,'index'
])->name('subscribers')->middleware(['auth']);

Route::post('/subscribe', [
    SubscriberController::class,'store'
])->name('subscribe');

Route::post('/change-password', [
    PageController::class,'changePassword'
])->name('change-password')->middleware(['auth']);

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/
Route::group(['prefix'=>'news'],function (){

    Route::get('/', [
        NewsController::class,'index'
    ])->name('news');

    Route::get('/view/{slug}', [
        NewsController::class,'show'
    ])->name('news.show');


    Route::group(['middleware'=>'auth'],function (){

        Route::get('/create', [
            NewsController::class,'create'
        ])->name('news.create');


        Route::get('/edit/{slug}', [
            NewsController::class,'edit'
        ])->name('news.edit');

        Route::post('/store', [
            NewsController::class,'store'
        ])->name('news.store');

        Route::post('/update/{slug}', [
            NewsController::class,'update'
        ])->name('news.update');

        Route::post('/delete/{slug}', [
            NewsController::class,'destroy'
        ])->name('news.delete');
    });
});




require __DIR__.'/auth.php';
