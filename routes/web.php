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

Route::get('/', 'MessagesController@index');

Route::resource('messages', 'MessagesController');




// // CRUD
// //メッセージ個別詳細のページ表示
// Route::get('messages/{id}', 'MessagesController@show');
// //メッセージの新規登録を処理
// Route::post('messages', 'messagesController@store');
// //メッセージ更新処理
// Router::put('messages/{id}', 'MessagesController@update');
// //メッセージを削除
// Route::delete('messages/{id}', 'MessagesController@destroy');   

// //index: showの補助ページ
// Route::get('messages', 'MessagesController@index')->name('messages.index');
// //create: 新規作成のフォームページ
// Route::get('messages/create', 'MessagesController@create')->name('messages.create');
// //edit: 更新用のフォームページ
// Route::get('messages/{id}/edit', 'MessagesController@edit')->name('messages.edit');
