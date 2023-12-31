<?php

use App\Http\Controllers\Api\{
    PostController,
    TodoController,
    UserController,
};
use App\Http\Controllers\Auth\AuthApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResources([
    'users'     => UserController::class,
    'todos'     => TodoController::class,
]);

Route::resource('posts', PostController::class);
Route::post('/auth/forgot-password',[ AuthApiController::class, 'forgotPassword']);
