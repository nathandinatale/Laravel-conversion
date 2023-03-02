<?php

use App\Models\Bus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/buses', function () {
    return view('buses', ['buses' => Bus::all()]);
});

Route::get('/buses/{id}', function($id) {
    return view('bus', ['bus' => Bus::find($id)]);
});