<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SolutionController;

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

Route::get('home',[solutionController::class,'home']);
Route::get('about',[solutionController::class,'about']);
Route::get('service',[solutionController::class,'service']);
Route::get('contact',[solutionController::class,'contact']);
Route::get('career',[solutionController::class,'career']);
Route::get('project',[solutionController::class,'project']);
Route::get('team',[solutionController::class,'team']);
Route::get('testimonial',[solutionController::class,'testimonial']);
Route::get('package',[solutionController::class,'package']);
