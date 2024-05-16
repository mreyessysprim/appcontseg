<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TasksolController;
use App\Http\Controllers\TasksolcongeController;
use Illuminate\Support\Facades\Route;
use App\Models\Tasksol;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;




Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/solsindex', function () {
    return view('sols.solsindex');
})->middleware(['auth', 'verified'])->name('solsindex');

Route::get('/solscreasolbenf', function () {
    return view('sols.solscreasolbenf');
})->middleware(['auth', 'verified'])->name('solscreasolbenf');

Route::get('/solscreadir', function () {
    //dd($request);
    return view('sols.solscreadir');
})->middleware(['auth', 'verified'])->name('solscreadir');

Route::get('/solscreaconcepto', function () {
    return view('sols.solscreaconcepto');
})->middleware(['auth', 'verified'])->name('solscreaconcepto');

Route::get('/solscreaclass', function () {
    return view('sols.solscreaclass');
})->middleware(['auth', 'verified'])->name('solscreaclass');

Route::get('/solscreatipo', function () {
    return view('sols.solscreatipo');
})->middleware(['auth', 'verified'])->name('solscreatipo');

Route::get('/solscreagab', function () {
    return view('sols.solscreagab');
})->middleware(['auth', 'verified'])->name('solscreagab');



Route::get('/solscreaestatuscys', function () {
    return view('sols.solscreaestatuscys');
})->middleware(['auth', 'verified'])->name('solscrea');

Route::middleware('auth')->group(function () {
    //Route::get('/sols.solscreaclass', [TasksolController::class, 'solclasf'])->name('solscreaclass');
    
    Route::post('/storesolbenf', [TasksolController::class, 'storesolbenf'])->name('storesolbenf');
    Route::post('/storesoldir', [TasksolController::class, 'storesoldir'])->name('storesoldir');
    Route::post('/storeconcepto', [TasksolController::class, 'storeconcepto'])->name('storeconcepto');
    Route::post('/storeclasf', [TasksolController::class, 'storeclasf'])->name('storeclasf');
    Route::post('/storetipo', [TasksolController::class, 'storetipo'])->name('storetipo');
    Route::post('/storegab', [TasksolController::class, 'storegab'])->name('storegab');
    Route::post('/storeresp', [TasksolController::class, 'storeresp'])->name('storeresp');
    Route::post('/storecys', [TasksolController::class, 'storecys'])->name('storecys');
    //Route::put('/tasksols/{tasksol}', [TasksolController::class, 'update'])->name('tasksols.update');
    
    //Route::post('/solscrea', [TasksolController::class, 'creasolbenf'])->name('solscreadir');
    
    Route::post('/buscar', [TasksolController::class, 'buscars'])->name('buscar');
    
    Route::post('/gabinete', [TasksolController::class, 'gabinetes'])->name('gabinete');
    Route::post('/solclasf', [TasksolController::class, 'solclasf'])->name('solclasf');
    Route::post('/soltipo', [TasksolController::class, 'soltipo'])->name('soltipo');
    
    
    Route::get('/{tasksol}/versol', [TasksolController::class, 'versols'])->name('versol');
    Route::get('/createdir', [TasksolController::class, 'createdir'])->name('createdir');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/index', [TasksolController::class, 'index'])->name('tasksols.index');
    Route::post('/tasksols', [TasksolController::class, 'store'])->name('tasksols.store');
    Route::get('/tasksols/{tasksol}', [TasksolController::class, 'show'])->name('tasksols.show');
    Route::get('/tasksols', [TasksolController::class, 'create'])->name('tasksols.create');
    Route::put('/tasksols/{tasksol}', [TasksolController::class, 'update'])->name('tasksols.update');
    Route::delete('/tasksols/{tasksol}', [TasksolController::class, 'destroy'])->name('tasksols.destroy');
    Route::get('/tasksols/{tasksol}/edit', [TasksolController::class, 'edit'])->name('tasksols.edit');
});

require __DIR__.'/auth.php';