<?php

use App\Http\Controllers\NotesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request as req;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/notes', function (req $request) {
    $todos = $request->session()->get('todos');

    return view('notes', ['todos' => $todos, 'user' => Auth::user()]);
})->middleware('auth');

Route::get('/', [NotesController::class, 'index']);

Route::post('store-data', [NotesController::class, 'store'])->middleware('auth');

Route::get('delete/{todo}/{redirectTo}', [NotesController::class, 'delete'])->middleware('auth');

Route::get('edit/{todo}', [NotesController::class, 'edit'])->middleware('auth')->name('edit');

Route::post('edit/update', [NotesController::class, 'update'])->middleware('auth');
