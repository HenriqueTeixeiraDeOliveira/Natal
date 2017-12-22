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

Route::delete('/perguntas/{question}', 'CompetitorController@destroy');

//COMPETITOR CONTROLLER

Route::get('/competidores', 'CompetitorController@index');

Route::get('/competidores/cadastro', 'CompetitorController@create');

Route::post('/competidores', 'CompetitorController@store');

Route::delete('/competidores/{competitors}', 'CompetitorController@destroy');

