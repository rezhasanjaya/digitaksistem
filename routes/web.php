<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KontrakController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SanksiController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UserController;
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
  Route::get('/user-profile', [UserProfileController::class, 'create']);
	Route::post('/user-profile', [UserProfileController::class, 'store']);
  Route::resource('department', DepartmentController::class);
	Route::resource('user-management', UserController::class);
  Route::resource('kontrak', KontrakController::class);
  Route::resource('sanksi', SanksiController::class);
  Route::resource('karyawan', KaryawanController::class);
  Route::get('/laporan', [LaporanController::class, 'index']);
  Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');
});

// Route::group(['middleware' => 'admin'], function () {
// 	// Route::group(['prefix' => 'department'], function () {
// 	// 	Route::get('/', [DepartmentController::class, 'index']);
// 	// 	Route::get('/tambah', [DepartmentController::class, 'tambah']);
// 	// 	//Route::get('/edit/{department:id}', ['department' => 'DepartmentController@edit'])->name('edit');
// 	// 	//Route::get('/destroy/{department:id}', ['department' => 'DepartmentController@destroy'])->name('destroy');
// 	// 	Route::get('/edit/{department:kode}', [PostController::class, 'edit']);
// 	// 	Route::get('/destroy/{department:kode}', [PostController::class, 'destroy']);
// 	// 	Route::get('/update/{department:kode}', [PostController::class, 'update']);
// 	// });

// 	Route::resource('department', DepartmentController::class);
// 	Route::get('user-management', [UserController::class, 'index']);

// 	// Route::get('user-management', function () {
// 	// 	return view('laravel-examples/user-management', ["title" => "Account Management"]);
// 	// })->name('user-management');
// 	// Route::group(['prefix' => 'karyawan'], function () {
// 	// 	Route::get('/', [KaryawanController::class, 'index']);
// 	// 	Route::get('/tambah', [KaryawanController::class, 'tambah']);
// 	// 	//Route::get('/edit', [KaryawanController::class], 'edit');
// 	// 	Route::get('/edit/{karyawan:id}', ['karyawan' => 'KaryawanController@edit'])->name('edit');
// 	// 	Route::get('/destroy/{karyawan:id}', ['karyawan' => 'KaryawanController@destroy'])->name('destroy');
// 	// 	Route::resource('karyawan', KaryawanController::class);
// 	// });
// });

// Route::group(['middleware' => 'hrd'], function () {
//   Route::resource('kontrak', KontrakController::class);
//   Route::resource('sanksi', SanksiController::class);
//   Route::resource('karyawan', KaryawanController::class);
//   //Route::put('{kode}/edit', 'KaryawanController@update')->name('karyawan.update');
//   Route::get('/laporan', [LaporanController::class, 'index']);
// });

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
