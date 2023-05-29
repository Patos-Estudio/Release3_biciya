<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\BicycleController;
use App\Http\Controllers\Admin\CrudController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EstacionController;


// Ruta de inicio
Route::get('/', function () {
    return view('inicio.index');
});

Route::middleware('auth')->group(function () {
    // Ruta de acceso
    Route::get('/acceso', function () {
        return view('acceso.acceso');
    })->name('acceso');
});

// Rutas para autenticación y registro de usuarios
Auth::routes();

// Ruta para el inicio de sesión
Route::get('/home', function () {
    // Redireccionar al dashboard correspondiente según el rol del usuario
    if (Auth::check()) {
        $user = Auth::user();
        if ($user->hasRole('Admin')) {
            return redirect()->route('usuarios.index');
        } else {
            return redirect()->route('acceso');
        }
    } else {
        return redirect()->route('inicio.index');
    }
});

// Ruta para generar el PDF de usuarios
Route::get('/usuarios/pdf', [UsuariosController::class, 'generatePDF'])->name('usuarios.pdf');

// Rutas para CRUD de usuarios
Route::group(['middleware' => 'admin'], function () {
    Route::resource('users', CrudController::class)->names('admin.users');
    Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios.index');
    Route::post('/usuarios', [UsuariosController::class, 'store'])->name('usuarios.store');
    Route::resource('usuarios', '\App\Http\Controllers\UsuariosController')->except(['index', 'create', 'store']);

    
    Route::get('/home', [App\Http\Controllers\Admin\UsersController::class, 'index'])->name('admin.cruds');
    Route::post('/admin/cruds/store', [App\Http\Controllers\Admin\UsersController::class, 'store'])->name('admin.cruds.store');
    Route::resource('usuarios', UsuariosController::class)->except(['show']);
    Route::get('/usuarios/{usuario}/edit', [UsuariosController::class, 'edit'])->name('usuarios.edit');
    Route::put('/usuarios/{usuario}', [UsuariosController::class, 'update'])->name('usuarios.update');

    Route::get('/bicycles/grafica', [BicycleController::class, 'graficaBicicletas'])->name('bicycles.grafica');
    Route::get('/bicycles/pdf', [BicycleController::class, 'generatePDF'])->name('bicycles.pdf');
    Route::resource('bicycles', BicycleController::class)->except(['show']);

    Route::resource('estaciones', EstacionController::class);
    Route::get('/estaciones/pdf', [EstacionController::class, 'generatePDF'])->name('estaciones.pdf');
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

