```php
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrackingController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/share-location/{token}', [TrackingController::class, 'show'])
    ->name('tracking.show');

Route::post('/share-location/{token}', [TrackingController::class, 'store'])
    ->name('tracking.store');

Route::get('/dashboard/visits', [TrackingController::class, 'dashboard'])
    ->name('tracking.dashboard');

Route::get('/informasi', function () {
    return view('informasi');
})->name('informasi');
