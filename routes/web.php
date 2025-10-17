<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\WorkersController;
use App\Http\Controllers\TimelinesController;
use App\Http\Controllers\AssignmentsController;
use App\Http\Controllers\ReportsController;

Route::get('/', [DashboardController::class, 'index'])->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/projects', [ProjectsController::class, 'index'])->name('projects.index');
Route::get('/workers', [WorkersController::class, 'index'])->name('workers.index');
Route::get('/timelines', [TimelinesController::class, 'index'])->name('timelines.index');
Route::get('/assignments', [AssignmentsController::class, 'index'])->name('assignments.index');
Route::get('/reports', [ReportsController::class, 'index'])->name('reports.index');
