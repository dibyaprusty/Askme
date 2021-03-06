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
Route::get('/home', 'HomeController@index')->middleware('super')->name('home');

//help page
Route::get('/help', function(){ 
	return view('help');
})->name('help');

//Routes for questions.

//show all question
Route::get('/questions','QuestionsController@index')->name('all_question');

//store the question
Route::post('questions','QuestionsController@store')
->middleware('super')
->name('store_question');

//create a post
Route::get('/questions/create','QuestionsController@create')
->middleware('super')
->name('create_question');

//shows edit question form
Route::get('/questions/{question}/edit','QuestionsController@edit')
->middleware('super')
->name('edit_question');

//delete a question
Route::delete('/questions/{question}','QuestionsController@destroy')
->middleware('super')
->name('delete_question');

//update the question in database
Route::put('/questions/{question}','QuestionsController@update')
->middleware('super')
->name('update_question');

//shows a single question
Route::get('/questions/{question}','QuestionsController@show')
->middleware('super')
->name('single_question');


//ckeditor image upload
Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');

//store the answer
Route::post('answers','AnswersController@store')
->middleware('super')
->name('store_answer');

//activity page
Route::get('/activity','ActivityController@activity')
->middleware('super')
->name('activity');

//profile page
Route::get('/profile/{profile}','ActivityController@profile')
->middleware('super')
->name('profile');

