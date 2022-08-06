<?php
use App\Http\Controllers\role;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\RoutinController;
use App\Http\Controllers\AttendenceController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ExamTypeController;
use App\Http\Controllers\ResultController;

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
    return view('pages/erp/index');
});
Route::post('/signin',[AuthController::class,'signin'])->name("signin");
Route::get('/signout',[AuthController::class,'signout']);

Route::get('/home', function () {
    return view('pages/home');
})->name("home");
Route::get('/tries', function () {
    return view('pages/erp/admitcard/show');
});
Route::get('/contact', function () {
    return view('pages/erp/contact');
});
Route::get('user/show',[User::class, 'show']);

Route::resource('users',UserController::class);

Route::resource('roles',role::class);
Route::resource('teachers',TeacherController::class);
Route::resource('clases',ClasController::class);
Route::resource('students',StudentController::class);
Route::resource('rooms',RoomController::class);
Route::resource('admissions',AdmissionController::class);
Route::resource('payments',PaymentController::class);
Route::resource('subjects',SubjectController::class);
Route::resource('routins',RoutinController::class);
Route::resource('attendences',AttendenceController::class);
Route::resource('accounts',AccountController::class);
Route::resource('exams',ExamController::class);
Route::resource('results',ResultController::class);
Route::resource('resultTypes',ExamTypeController::class);