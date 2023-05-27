<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('inicio.index');
});

// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('login2', function () {
    return view('login.login2');
});

Route::get('/index', function () {
    return view('inicio.index');
})->name('index');

Route::get('/acceso', function () {
    return view('acceso.acceso');
});



Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\Admin\UsersController::class, 'index'])->name('admin.cruds');

Route::post('/admin/cruds/store', [App\Http\Controllers\Admin\UsersController::class, 'store'])->name('admin.cruds.store');
Route::resource('usuarios', '\App\Http\Controllers\UsuariosController');

Route::get('descargar-pdf', '\App\Http\Controllers\DescargasController@generar_pdf')->name('descargar-pdf');


// Ruta para mostrar el formulario de edición de un usuario específico
Route::get('/usuarios/{id}/edit', [UsuariosController::class, 'edit'])->name('usuarios.edit');

// Ruta para actualizar los datos de un usuario específico
Route::put('/usuarios/{id}', [UsuariosController::class, 'update'])->name('usuarios.update');

Route::post('/usuarios', [UsuariosController::class, 'store'])->name('usuarios.store');






