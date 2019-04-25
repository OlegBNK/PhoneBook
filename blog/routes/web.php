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

Route::get('/', function () {

        $users = \App\models\user::all();

        foreach ($users as $user){
            echo $user->email. "<br>";
        }
});

/*
Route::get('/', function () {
    return view('index', [
        'title' => 'Главная страница!!!']);
});
Route::get('/contacts', function () {
    return view('contacts',[
        'title' => 'Контакты']);
});
Route::get('/sign-up', 'SignUpController@index');

Route::get('/sign-in', function () {
    echo'Вход пользователя в систему';
});
Route::get('/forgot-password', function () {
    echo'Восстановление пароля';
});
Route::get('/user/create', 'UserController@create');
Route::get('/user/update', 'UserController@update');
Route::get('/user/delete', 'UserController@delete');
