<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;

use App\Http\Livewire\AcademicClass\ClassCreate;
use App\Http\Livewire\AcademicClass\ClassEdit;
use App\Http\Livewire\AcademicClass\ClassIndex;
use App\Http\Livewire\AcademicClass\ClassShow;

use App\Http\Livewire\AcademicClassStudent\AcdemicClassStudentCreate;
use App\Http\Livewire\AcademicClassStudent\AcdemicClassStudentEdit;
use App\Http\Livewire\AcademicClassStudent\AcdemicClassStudentIndex;
use App\Http\Livewire\AcademicClassStudent\AcdemicClassStudentShow;

use App\Http\Livewire\AcademicYear\YearCreate;
use App\Http\Livewire\AcademicYear\YearEdit;
use App\Http\Livewire\AcademicYear\YearIndex;
use App\Http\Livewire\AcademicYear\YearShow;

use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Verify;
use App\Http\Livewire\Role;

use App\Http\Livewire\Students\StudentCreate;
use App\Http\Livewire\Students\StudentEdit;
use App\Http\Livewire\Students\StudentIndex;
use App\Http\Livewire\Students\StudentShow;

use App\Http\Livewire\Teachers\Create;
use App\Http\Livewire\Teachers\Edit;
use App\Http\Livewire\Teachers\Index;
use App\Http\Livewire\Teachers\Show;
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

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    // Route::get('register', Register::class)
    //     ->name('register');
});

Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
     Route::get('/', [DashboardController::class, 'index'])->name('home');
        Route::resource('/users', UsersController::class);


        Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
            ->middleware('signed')
            ->name('verification.verify');

        Route::post('logout', LogoutController::class)
            ->name('logout');
    Route::get('role', Role::class)->name('role');
    //teachers
    Route::get('teacher/index', Index::class)->name('index');
    Route::get('teahcer/create',Create::class)->name('create');
    Route::get('teacher/edit/{id}', Edit::class)->name('edit');
    Route::get('teacher/show/{id}', Show::class)->name('show');

    //students
    Route::get('studnet/index', StudentIndex::class)->name('student_index');
    Route::get('student/create', StudentCreate::class)->name('student_create');
    Route::get('student/edit/{id}', StudentEdit::class)->name('student_edit');
    Route::get('student/show/{id}', StudentShow::class)->name('student_show');

    //Academin_years
    Route::get('academin_year/index', YearIndex::class)->name('year_index');
    Route::get('academic_year/create', YearCreate::class)->name('year_create');
    Route::get('academic_year/edit{id}', YearEdit::class)->name('year_edit');
    Route::get('academic_year/show{id}', YearShow::class)->name('year_show');

    //Academic_class

    Route::get('academic_class/index', ClassIndex::class)->name('class_index');
    Route::get('academic_class/create', ClassCreate::class)->name('class_create');
    Route::get('academic_class/edit{id}',ClassEdit::class)->name('class_edit');
    Route::get('academic_class/show/{id}', ClassShow::class)->name('class_show');

    //academic class student

    Route::get('academic_class_student/index', AcdemicClassStudentIndex::class)->name('class_student_index');
    Route::get('academic_class_student/create/{id}', AcdemicClassStudentCreate::class)->name('class_student_create');
    Route::get('academic_class_student/edit{id}', AcdemicClassStudentEdit::class)->name('class_student_edit');
    Route::get('academic_class_student/show/{id}',AcdemicClassStudentShow::class)->name('class_student_show');

});
