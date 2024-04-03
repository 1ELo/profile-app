<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
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


Route::get('/tes', function () {
    // echo "tes123";
    return view('tes');
});

Route::get('/bio_kel', [MainController::class, 'HomePage']);



Route::get('/login',function(){
    return view('login');
}) ->name('login');


Route::get('/login',function(){
    return view('login');
}) ->name('login');

Route::post('/authenticate', [LoginController::class,'authenticate']);
Route::get('/logout', [LoginController::class,'logout']);
Route::get('/registration', [LoginController::class, 'registration']);
Route::middleware(['auth'])->group(function () {
    Route::get('profile/{anggota}', [MainController::class, 'ProfilePage']);

    // Route::get('/profile/{username}', 'ProfileController@show')->name('profile');
});




// Route::get('/daniel', function () {
//     // echo "Welcome";
//     return view('daniel');
// });

// Route::get('/syam', function () {
//     // echo "Welcome";
//     return view('syam');
// });

// Route::get('/levi', function () {
//     // echo "Welcome";
//     return view('levi');
// });

// Route::get('/sekar', function () {
//     // echo "Welcome";
//     return view('sekar');
// });

// Route::get('/regina', function () {
//     // echo "Welcome";
//     return view('regina');
// });

