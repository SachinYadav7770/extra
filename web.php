<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\FirstController;

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

Route::get('test','App\Http\Controllers\FirstController@Index');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/facadeex', function() {
    return SM::getredirect();
 });

// Route::get('social',[FormController::class, 'social']);

Route::get('local/{langu?}',function($langu=null){
    App::setLocale($langu);
    return view('language');
});

Route::get('Form',[FormController::class, 'index']);

Route::get('testcom',[FirstController::class, 'newcom']);
// Route::get('testcom', function () {
//     return view('testcom'); });

Route::post('Form',[FormController::class, 'form_insert']);

Route::middleware(['UnderConstruction'])->group(function(){
    
    Route::get('/new_help', function() {
        return sayHello();
     });
     
    Route::get('social',[FormController::class, 'social']);
});
