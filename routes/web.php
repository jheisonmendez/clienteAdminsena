<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreasController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\TrainingCentersController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ApprenticesController;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('welcome');
});

/* ===================== AREAS ===================== */
Route::get('areas', [AreasController::class, 'index'])->name('areas.index');
Route::get('area/create', [AreasController::class, 'create'])->name('area.create');
Route::post('area', [AreasController::class, 'store'])->name('area.store');
Route::get('area/{area}', [AreasController::class, 'show'])->name('area.show');
Route::get('area/{area}/editar', [AreasController::class, 'edit'])->name('area.edit');
Route::put('area/{area}', [AreasController::class, 'update'])->name('area.update');
Route::delete('area/{area}', [AreasController::class, 'destroy'])->name('area.destroy');

/* ================= TRAINING CENTERS ================= */
Route::get('trainingcenters', [TrainingCentersController::class, 'index'])->name('trainingcenters.index');
Route::get('trainingcenter/create', [TrainingCentersController::class, 'create'])->name('trainingcenter.create');
Route::post('trainingcenter', [TrainingCentersController::class, 'store'])->name('trainingcenter.store');
Route::get('trainingcenter/{trainingcenter}', [TrainingCentersController::class, 'show'])->name('trainingcenter.show');
Route::get('trainingcenter/{trainingcenter}/editar', [TrainingCentersController::class, 'edit'])->name('trainingcenter.edit');
Route::put('trainingcenter/{trainingcenter}', [TrainingCentersController::class, 'update'])->name('trainingcenter.update');
Route::delete('trainingcenter/{trainingcenter}', [TrainingCentersController::class, 'destroy'])->name('trainingcenter.destroy');

/* ===================== COMPUTERS ===================== */
Route::get('computers', [ComputerController::class, 'index'])->name('computers.index');
Route::get('computer/create', [ComputerController::class, 'create'])->name('computer.create');
Route::post('computer', [ComputerController::class, 'store'])->name('computer.store');
Route::get('computer/{computer}', [ComputerController::class, 'show'])->name('computer.show');
Route::get('computer/{computer}/editar', [ComputerController::class, 'edit'])->name('computer.edit');
Route::put('computer/{computer}', [ComputerController::class, 'update'])->name('computer.update');
Route::delete('computer/{computer}', [ComputerController::class, 'destroy'])->name('computer.destroy');

/* ===================== TEACHERS ===================== */
Route::get('teachers', [TeacherController::class, 'index'])->name('teachers');
Route::get('teachers/{teacher}', [TeacherController::class, 'show'])->name('teacher.show');

/* ===================== COURSES ===================== */
Route::get('courses', [CourseController::class, 'index'])->name('courses');
Route::get('courses/{course}', [CourseController::class, 'show'])->name('course.show');

/* ==================== APPRENTICES ==================== */
Route::get('apprentices', [ApprenticesController::class, 'index'])->name('apprentices');
Route::get('apprentices/{apprentice}', [ApprenticesController::class, 'show'])->name('apprentice.show');
