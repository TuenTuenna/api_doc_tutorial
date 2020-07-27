<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('categories', 'Api\CategoryController@index');
//Route::get('categories/{category}', 'Api\CategoryController@show');

Route::apiResource('category', 'Api\CategoryController');

//Route::get('blogs', 'Api\TodoController@index')->name('blog.index');
//Route::get('blogs/{blog}', 'Api\TodoController@show')->name('blog.show');
//Route::post('blogs', 'Api\TodoController@store')->name('blog.store');
//Route::put('blogs/{blog}', 'Api\TodoController@update')->name('blog.update');
//Route::delete('blogs/{blog}', 'Api\TodoController@destroy')->name('blog.destroy');

// 뷰 전용 즉 blade 전용
// resource 로 하면 생성 화면 create, 수정화면 edit 도 만들어 준다.
//Route::resource('blogs', 'Api\TodoController');

// api 전용
// apiResource 로 하면 index(목록), show(아이템), store(생성), update(수정), delete(삭제)
// 즉 로직에 해당되는 api만 만들게 된다.
//Route::apiResource('blogs', 'Api\TodoController');

Route::prefix('/v1/')->group(function () {
//    Route::get('users', function () {
//        // Matches The "/admin/users" URL
//    });
    Route::apiResource('blogs', 'Api\BlogController');

});


