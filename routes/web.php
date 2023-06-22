<?php

use App\Http\Controllers\Student_Controller;
use App\Http\Controllers\Lecture_Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main_Controller;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Welcome;

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

Route::get('/', Welcome::class);
// Route::get('/Login', Login::class)->name('Login');
// Route::get('/Register', Register::class)->name('Register');


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/test', [Lecture_Controller::class, 'test']);


Route::get('/Login', [Main_Controller::class, 'login_View'])->name('Login');
Route::post('/Login', [Main_Controller::class, 'Login_user'])->name('Login');

Route::get('/Register', [Main_Controller::class, 'register_View'])->name('Register');
Route::post('/Register', [Main_Controller::class, 'Register_user'])->name('Register');


Route::get('/New-Password', [Main_Controller::class, 'password_View'])->name('password_creation');
Route::post('/New-Password', [Main_Controller::class, 'Pass_View'])->name('password_creation');


Route::get('/Registration-Success', [Main_Controller::class, 'reg_success_view'])->name('reg_success_view');





Route::get('/Student/Dashboard', [Student_Controller::class, 'dashboard'])->name('Student_Dashboard');

Route::get('/Student/Create-Application', [Student_Controller::class, 'application'])->name('Student_Application');
Route::post('/Student/Create-Application', [Student_Controller::class, 'Application_Student'])->name('Student_Application');



Route::get('/Student/History', [Student_Controller::class, 'history'])->name('Student_History');
Route::get('/Student/Profile', [Student_Controller::class, 'profile'])->name('Student_Profile');

Route::get('/Student/Signout', [Student_Controller::class, 'signout'])->name('Student_Signout');
Route::post('/Student/Signout', [Student_Controller::class, 'logout'])->name('Student_Signout');






Route::get('/Lecturer/Dashboard', [Lecture_Controller::class, 'dashboard'])->name('Lecturer_Dashboard');


Route::get('/Lecturer/Profile', [Lecture_Controller::class, 'profile'])->name('Lecturer_Profile');

Route::get('/Lecturer/Signout', [Lecture_Controller::class, 'signout'])->name('Lecturer_Signout');
Route::post('/Lecturer/Signout', [Lecture_Controller::class, 'logout'])->name('Lecturer_Signout');



Route::get('/Lecturer/History', [Lecture_Controller::class, 'history'])->name('Lecturer_History');
// Route::get('/Lecturer/Applications/New', [Lecture_Controller::class, 'applications'])->name('Lecturer_Applications');


Route::get('/Lecturer/History-Sick', [Lecture_Controller::class, 'historySick'])->name('Lecturer_Applications');

Route::get('/Lecturer/Applications/New/ID', [Lecture_Controller::class, 'application_view'])->name('Application_View');
Route::post('/Lecturer/Applications/New/ID', [Lecture_Controller::class, 'application_action'])->name('Application_View');











Route::get('/Lecturer/New-sicktest', [Lecture_Controller::class, 'new_test'])->name('Create_Test');
Route::post('/Lecturer/New-sicktest', [Lecture_Controller::class, 'NewTest'])->name('Create_Test');

Route::get('/Lecturer/previous-test', [Lecture_Controller::class, 'past_test'])->name('pastTest');
Route::post('/Lecturer/previous-test', [Lecture_Controller::class, 'Previous_Test'])->name('pastTest');


Route::get('/Lecturer/test-applications', [Lecture_Controller::class, 'sick_applications'])->name('sick_applications');
