<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/addmember', function (){
    return view('addGymMember');
})->name('addmember');
Route::post('add.gym.member','App\Http\Controllers\add_member_controller@addGymMember')->name('add_member_gym');

Route::get('/view.gym.member',function (){
    return view('viewGymMember');
})->name('viewGymMember');

Route::get('/member','App\Http\Controllers\add_member_controller@member');

Route::post('get.member/{id}','App\Http\Controllers\add_member_controller@getMember')->name('getMember');

Route::post('/edit.member', function (){
    return view('editMember');
})->name('editMember');

Route::post('/edit.gym.member','App\Http\Controllers\add_member_controller@updateMember')->name('editGymMember');

Route::delete('/delete.member/{id}','App\Http\Controllers\add_member_controller@deleteMember')->name('deleteMember');
