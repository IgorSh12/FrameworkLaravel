<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\MainController;
use \App\Http\Controllers\TestController;
use App\Http\Controllers\MyController;
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


Route::middleware('SizeVerification')->group(function (){
    Route::get('test', function (){
        return 'Its okey';
    });
});

#Создаем правило проверки на прослойку
#Внутри group будут маршруты
Route::middleware('validationToken')->group(function (){
    Route::get('/project', function (){return 'Project One';});
});
#прописали маршрутдо MainController метода test
# Ссылка: http://domain/main
Route::get('main', [MainController::class, 'test']);
Route::get('ip', [MainController::class, 'index']);

#Маршрут с параметром для ID пользователя
Route::get('user/{id}', [MainController::class,  'user'])->whereNumber('id');

//1
Route::get('my', [MyController::class, 'education']);
//2
Route::get('Name/{name}', [MyController::class, 'name']);
//3
Route::get('my-name/{name}/{fruit}', [MyController::class, 'name_fruit']);
//4
Route::get('sum', [MyController::class, 'summa']);
//5
Route::get('sum/{one}/{two}', [MyController::class, 'sum']);
//6
Route::get('check/{cipher}', [MyController::class, 'CheckKey']);
//2 часть
//1
Route::get('document', [TestController::class, 'MyDoc']);
//2
Route::get('organisation', [TestController::class, 'DocOrg']);
//3
Route::get('Mybook', [TestController::class, 'MyBook']);
//4
Route::get('Mus', [TestController::class, 'Mus']);
//5
Route::get('Array', [TestController::class, 'Temp5']);
//5
Route::get('Span', [TestController::class, 'Temp6']);

