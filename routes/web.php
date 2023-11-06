<?php
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\TicketController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('/auth.register');
});


Route::resource('empleado', EmpleadoController::class);
Auth::routes();
Route::group(['middleware'=>'auth'],function () {
    Route::get('/home', [EmpleadoController::class,'index'])->name('home');
});

Route::prefix('empleado')->group(function () {
    Route::resource('ticket', TicketController::class);
});