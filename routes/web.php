<?php
use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::view('/dashboard-student', 'dashboard.dashboard-student')->name('dashboard-student');

Route::get('/student', [StudentController::class, 'student'] )->name('student');
Route::get('/login-student', [StudentController::class, 'loginStudent'])->name('login-student');

Route::post('/student-registration', [StudentController::class, 'studentReg'] )->name('student-registration');
Route::post('/student-access', [StudentController::class, 'studentAccess'] )->name('student-access');

