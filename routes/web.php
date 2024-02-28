<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;


if (in_array(request()->segment(1), config()->get('app.alt_langs'))) {
    App::setLocale(request()->segment(1));
    config()->set('app.locale', request()->segment(1));
}

Route::get('/', function () {
    return redirect(config()->get('app.locale') . '/');
});

Route::group(['prefix' => config()->get('app.locale')], function () {
    Route::get('/', function () {
        return view(App::getLocale() . '.index');
    });

    Route::get('/{page}', function ($page) {
        return view(App::getLocale() .'.'. $page);
    });


      Route::get('/{folder}/{page}', function ($folder, $page) {
        return view(App::getLocale() . '.'. $folder. '.'. $page);
    });
});




Route::post('/{lang}/subscribe', [HomeController::class, 'subscribe'])->name('subscribe');
Route::post('/{lang}/quote', [HomeController::class, 'getQuote'])->name('getQuote');
