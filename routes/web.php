<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OutdoorController;



// Route::get('/', function () {
//     return view('dashboard');
// });
// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/register', function () {
//     return view('register');
// });

// Route::get("/", [UserController::class, 'index']);
Route::get("/", [UserController::class, 'index'])->name("home")->middleware(['auth']);
Route::get("/login", [UserController::class, 'handleLogin'])->name("login");
Route::get("/register", [UserController::class, 'handleRegister'])->name("register");
Route::post("/register", [UserController::class, 'registerUser'])->name("registerUser");
Route::post("/login", [UserController::class, 'login'])->name("login");
Route::get("/logout", [UserController::class, 'logout'])->name("logout");

// Route::get('/', [OutdoorController::class, 'index']);

Route::post('/save-products', [OutdoorController::class, 'saveProducts'])->name("saveProducts")->middleware(['auth']);

Route::get('/delete/{id}', [OutdoorController::class, 'deleteProducts'])->middleware(['auth']);

Route::get('edit/{id}', [OutdoorController::class, 'editProducts'])->middleware(['auth']);

Route::post('edit', [OutdoorController::class, 'updateProducts'])->name("updateProducts")->middleware(['auth']);