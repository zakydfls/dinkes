<?php

use App\Http\Controllers\Admin\InternDataController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\InternController;

Route::get('/', function () {
    return view('home');
})->name('root');

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin', [ApplicantController::class, 'index'])->name('admin.dashboard');
    Route::get('/applicants/{applicant}/edit', [ApplicantController::class, 'edit'])->name('applicants.edit');
    Route::put('/applicants/{applicant}/update', [ApplicantController::class, 'update'])->name('applicants.update');
    Route::post('/applicants/{applicant}/generate', [ApplicantController::class, 'generateIntern'])->name('applicants.generate');
    Route::delete('/applicants/{applicant}', [ApplicantController::class, 'destroy'])->name('applicants.destroy');

    Route::get('/admin/intern-data', [InternDataController::class, 'index'])->name('intern.data.index');
    Route::get('/admin/intern-data/{intern}/edit', [InternDataController::class, 'edit'])->name('intern.data.edit');
    Route::put('/admin/intern-data/{intern}/update', [InternDataController::class, 'update'])->name('intern.data.update');
    Route::delete('/admin/intern-data/{intern}', [InternDataController::class, 'destroy'])->name('intern.data.destroy');

    Route::get('/forms', function () {
        return view('admin.forms');
    })->name('admin.forms');
    Route::get('/tables', function () {
        return view('admin.tables');
    })->name('admin.tables');
    Route::get('/ui-elements', function () {
        return view('admin.ui-elements');
    })->name('admin.ui-elements');
});

// Group routes that need admin role and authentication
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
});

// frontend
Route::get('/persyaratan', fn() => view('persyaratan'))->name('persyaratan');
Route::get('/bidang', fn() => view('bidang'))->name('bidang');
Route::get('/bidang/sekertariat', [DepartmentController::class, 'sekertariat'])->name('sekertariat');
Route::get('/bidang/kesmas', [DepartmentController::class, 'kesmas'])->name('kesmas');
Route::get('/bidang/pelkes', [DepartmentController::class, 'pelkes'])->name('pelkes');
Route::get('/bidang/pencegahan-pengendalian-penyakit', [DepartmentController::class, 'pencegahan_pengendalian_penyakit'])->name('pencegahan_pengendalian_penyakit');
Route::get('/bidang/sumber-daya-kesehatan', [DepartmentController::class, 'sumber_daya_kesehatan'])->name('sumber_daya_kesehatan');


Route::get('/applicant', [ApplicantController::class, 'index'])->name('applicants.index');
Route::get('/applicants/upload', [ApplicantController::class, 'create'])->name('applicants.create');
Route::post('/applicants/upload/post', [ApplicantController::class, 'store'])->name('applicants.store');

Route::middleware(['auth', 'role:intern'])->group(function () {
    Route::get('/intern/dashboard', [InternController::class, 'index'])->name('intern.dashboard');
    Route::get('/intern/report', [InternController::class, 'create'])->name('intern.report.create');
    Route::post('/intern/report', [InternController::class, 'store'])->name('intern.report.store');
    Route::delete('/intern/report/{id}', [InternController::class, 'destroy'])->name('intern.report.destroy');

    Route::get('/intern/profile', [InternController::class, 'profile'])->name('intern.profile');
    Route::get('/intern/profile/{user}/edit', [InternController::class, 'editProfile'])->name('intern.profile.edit');
    Route::put('/intern/profile/{user}', [InternController::class, 'updateProfile'])->name('intern.profile.update');
});

require __DIR__ . '/auth.php';
