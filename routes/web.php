<?php
use App\Http\Controllers\ClickTrackerController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/go/{target}', [ClickTrackerController::class, 'track']);
Route::get('/track/{platform}', [ClickTrackerController::class, 'track']);