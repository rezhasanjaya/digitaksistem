<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


Route::group(['middleware' => 'auth'], function () {

	Route::get('/', [DashboardController::class, 'index']);
	Route::get('dashboard', function () {
		return view('dashboard', ["title" => "Dashboard"]);
	})->name('dashboard');

	Route::get('billing', function () {
		return view('billing', ["title" => "Kontrak Kerja"]);
	})->name('billing');

	Route::get('profile', function () {
		return view('profile', ["title" => "Profile"]);
	})->name('profile');

	// Route::group(['prefix' => 'department'], function () {
	// 	Route::get('/', [DepartmentController::class, 'index']);
	// 	Route::get('/tambah', [DepartmentController::class, 'tambah']);
	// 	Route::get('/edit/{department:id}', ['department' => 'DepartmentController@edit'])->name('edit');
	// 	Route::get('/destroy/{department:id}', ['department' => 'DepartmentController@destroy'])->name('destroy');

	// });

	Route::resource('department', DepartmentController::class);

	Route::get('user-management', function () {
		return view('laravel-examples/user-management', ["title" => "Account Management"]);
	})->name('user-management');


	Route::group(['prefix' => 'karyawan'], function () {
		Route::get('/', [KaryawanController::class, 'index']);
		Route::get('/tambah', [KaryawanController::class, 'tambah']);
		//Route::get('/edit', [KaryawanController::class], 'edit');
		Route::get('/edit/{karyawan:id}', ['karyawan' => 'KaryawanController@edit'])->name('edit');
		Route::get('/destroy/{karyawan:id}', ['karyawan' => 'KaryawanController@destroy'])->name('destroy');
		Route::resource('karyawan', KaryawanController::class);
	});

	Route::get('/laporan', [LaporanController::class, 'index']);


	Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);
	Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');
});



Route::group(['middleware' => 'guest'], function () {
	Route::get('/register', [RegisterController::class, 'create']);
	Route::post('/register', [RegisterController::class, 'store']);
	Route::get('/login', [SessionsController::class, 'create']);
	Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');
});

Route::get('/login', function () {
	return view('session/login-session');
})->name('login');
