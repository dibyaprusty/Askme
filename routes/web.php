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

//index page
Route::get('/', function () {
    return view('welcome');
})->name('index');

Auth::routes();

//home page
Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');

//help page
Route::get('/help', function(){ 
	return view('help');
})->name('help');

//Routes for questions.

//show all question
Route::get('/questions','QuestionsController@index')->middleware('auth')->name('all_question');

//store the question
Route::post('questions','QuestionsController@store')
->middleware('auth')
->name('store_question');

//create a post
Route::get('/questions/create','QuestionsController@create')
->middleware('auth')
->name('create_question');

//shows a single question
Route::get('/questions/{question}','QuestionsController@show')
->middleware('auth')
->name('single_question');

//ckeditor image upload
Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');

//store the answer
Route::post('answers','AnswersController@store')
->middleware('auth')
->name('store_answer');