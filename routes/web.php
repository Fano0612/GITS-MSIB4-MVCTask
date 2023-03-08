<?php

use App\Http\Controllers\StudentListController;
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
Route::get('/student_list', [StudentListController::class, 'index'])->name('student_list');
// Route::get('/addstudent_list', [StudentListController::class, 'addstudent_list'])->name('addstudent_list');
Route::post('/insertstudent_list', [StudentListController::class, 'insertstudent_list'])->name('insertstudent_list');

Route::get('/showstudent_list/{id}', [StudentListController::class, 'showstudent_list'])->name('showstudent_list');
Route::post('/editstudent_list/{id}', [StudentListController::class, 'editstudent_list'])->name('editstudent_list');

Route::get('/deletestudent_list/{id}', [StudentListController::class, 'deletestudent_list'])->name('deletestudent_list');

