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

//TOPIC CONTROLLER

Route::get('/','TopicController@index');

Route::get('/topicos','TopicController@show');

//QUESTION CONTROLLER

Route::get('/perguntas','QuestionController@index');

Route::get('/perguntas/criar','QuestionController@create');

Route::get('/perguntas/{topic}', 'QuestionController@show');

Route::post('/perguntas', 'QuestionController@store');

Route::patch('/perguntas/{topic}', 'QuestionController@update');

Route::delete('/perguntas/{question}', 'QuestionController@destroy');

//COMPETITOR CONTROLLER

Route::get('/competidores', 'CompetitorController@index');

Route::get('/competidores/cadastro', 'CompetitorController@create');

Route::post('/competidores', 'CompetitorController@store');

Route::delete('/competidores/{competitor}', 'CompetitorController@destroy');

//BLOOPER CONTROLLER

Route::get('/micos/todos','BlooperController@index');

Route::get('/micos/criar','BlooperController@create');

Route::get('/micos','BlooperController@intro');

Route::get('/micos/{competitor}', 'BlooperController@show');

Route::post('/micos', 'BlooperController@store');

Route::patch('/micos/{competitor}', 'BlooperController@update');

Route::delete('/micos/{blooper}', 'BlooperController@destroy');

