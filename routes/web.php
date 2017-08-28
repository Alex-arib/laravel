<?php

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

//Route::get('/', function () {
 //   return view('welcome');
//});

//задаем контроллер для страницы
Route::get('/', 'IndexController@index');

//календарь
Route::get('calendar', 'IndexController@calendar');

//article/1
// ->name('articleShow') - это ссылка
Route::get('article/{id}', 'IndexController@show')->name('articleShow');

Route::get('page/add', 'IndexController@add');



//POST отправка с формы
Route::post('page/add', 'IndexController@store')->name('articleStore');
//POST отправка с формы
Route::post('project/add', 'ProjectController@store')->name('projectStore');



Route::delete('page/delete/{article}', function (\App\Article $article){
   // dump($article);
    //$article_tmp = \App\Article::where('id', $article)->first();
    $article->delete();

    return redirect('/');
})->name('articleDelete');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::resource('events', 'EventsController');
