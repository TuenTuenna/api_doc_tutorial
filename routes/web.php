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
//
Route::get('/', function () {
    return view('welcome');
});

//Route::get('/', function () {
//
//    // 컨테이너 인스턴서 생성
//    $container = new \App\Container();
//
//    // bind를 통해 키와 데이터를 연결한다.
//    // 즉 컨테이너가 가지고 있는 bindings 배열에
//    $container->bind('example', function (){
//
//        // Example 인스턴스 생성
//        return new \App\Example();
//
//    });
//
//    $example = $container->get('example');
//
//
//    // 인스턴스가 들어간 bindings 배열이 나온다.
////    ddd($example->go());
//    $example->go();
//
//
//});
