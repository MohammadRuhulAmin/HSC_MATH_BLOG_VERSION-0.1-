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
Route::get('/frontPage','LogRegistrationController@logRegView');
Route::post('/log-varification','LogRegistrationController@logVarify');
Route::post('/user-registration','LogRegistrationController@register');
Route::post('/insert-post/{id}','PostController@savePost');
Route::get('/view-posts/{id}','PostController@viewPost');
Route::get('/view-all-user-post-list','PostController@allPostList');
Route::post('/comment-saving/{id}','CommentController@saveComment');
Route::get('/view-Solution/{id}','CommentController@viewSolution');
Route::post('/comment-reply/{id}','ReplyController@insertReply');
Route::get('/view-comment-reply/{id}','ReplyController@viewReply');
