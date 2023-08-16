<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\OptionsController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\HouseImageController;
use App\Http\Controllers\Admin\IntegrationController;
use App\Http\Controllers\Admin\NumberController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\PromotionalController;
use App\Http\Controllers\Admin\ResultController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\IndexController;
use UniSharp\Laravel\LaravelFilemanager\Lfm;



Auth::routes();

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['role:admin'])->prefix('dashboard')->group(static function () {
    Route::get('/', [HomeController::class, 'index'])->name('homeAdmin');
    Route::resources([
        'slider' => SliderController::class,
        'page' => PageController::class,
        'article' => ArticleController::class,
        'options' => OptionsController::class,
        'houseimage' => HouseImageController::class,
        'event' => EventController::class,
        'faq' => FaqController::class,
        'integration' => IntegrationController::class,
        'number' => NumberController::class,
        'promotional' => PromotionalController::class,
        'partner' => PartnerController::class,
        'feedback' => ResultController::class
    ]);
});


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 
         Route::get('/', [IndexController::class, 'homepage'])->name('/');
         Route::get('about', [AboutController::class, 'about'])->name('about');
         Route::post('save_callback', [IndexController::class, 'saveCallback'])->name('saveCallback');

    });



Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    UniSharp\LaravelFilemanager\Lfm::routes();
});

