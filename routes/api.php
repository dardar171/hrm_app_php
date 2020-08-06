<?php

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->resource("employees","EmployeeController")->except(['create','edit']);
Route::middleware('auth:api')->put('/employeeDetails/{employeeDetail}','EmployeeDetailController@update');
Route::post("auth/login","AuthController@login");
