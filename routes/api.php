<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', function () {
    $users = \Illuminate\Support\Facades\Cache::remember('users', 30, function () {
        return \App\Models\User::query()->get();
    });

    return response()->json($users);
});
Route::get('test',function (){
   return \Illuminate\Support\Facades\Cache::get('users');
});
Route::get('remove',function (){
   return \Illuminate\Support\Facades\Cache::forget('users');
});
