<?php

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
use App\Http\Controllers\ProjectController;

use App\Http\Controllers\CustomerController;

use App\Http\Controllers\ContactController;

Route::get('/', function()
{
    return view('welcome');
})->name('index');

Route::post('/', function()
{
    return view('welcome');
});

Route::get('/Python/Wormy', [ProjectController::class, 'Wormy'])->name('Wormy');

Route::get('/Python/Pong', [ProjectController::class, 'Pong'])->name('Pong');

Route::get('/Python/{Project}', [ProjectController::class, 'Python']);

Route::get('/UE4/BuildingEscape', [ProjectController::class, 'BuildingEscape'])->name('BuildingEscape');

Route::get('/UE4/Battle-Tank', [ProjectController::class, 'BattleTank'])->name('BattleTank');

Route::get('/UE4/{Project}',  [ProjectController::class, 'UE4']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', function()
{
    return view('profile');
});

Route::get('/contact', [ContactController::class, 'get'])->name('contact')->middleware('auth');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.submit');

Route::get('send-mail', function () {

   

    $details = [

        'title' => 'Mail from ItSolutionStuff.com',

        'body' => 'This is for testing email using smtp'

    ];

   

    \Mail::to('aliengunz41@gmail.com')->send(new \App\Mail\TestMail($details));

   

    dd("Email is Sent.");

});

Route::get('/about', function() {
    return view('about');
})->name('about');