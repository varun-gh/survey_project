<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('index');
     //return view('login');
});

// Route::get('/login', function () {
//     //return view('index2');
//      return view('login');
// });

Route::get('/user-login', function () {
    return view('login');
});
Route::get('/survey', 'SurveyController@index');  
Route::post('/submit-survey', 'SurveyResponseController@store');    
Route::get('survey-thanks/{id}','SurveyResponseController@thanks');
Route::get('/contact-us', function () {
    return view('contact');
});
Route::post('send-otp','CustomerController@sendOtp');
Route::get('resend-otp/{phone}/{email}','CustomerController@reSendOtp');
Route::get('validate','CustomerController@validate_opt');
Route::post('validate-otp','CustomerController@validateOtp');
Route::get('user/profile','CustomerController@profile')->name('profile');
Route::post('update-profile','CustomerController@update_profile');
Route::get('user/health-portfolio','CustomerController@health_portfolio')->name('portfolio');
Route::post('update-portfolio','CustomerController@update_portfolio');
Route::get('user/health-report','CustomerController@health_report');
Auth::routes();



Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    //////////////////////Survey///////////////////////
    Route::get('/survey-list', 'HomeController@surveyList')->name('surveyList');
    Route::post('add-survey','HomeController@addSurvey')->name('addSurvey');
    Route::get('survey/delete/{id}','HomeController@deleteSurvey');
    Route::get('survey/status/{id}/{status}','HomeController@statusSurvey');
    Route::post('survey/edit','HomeController@editSurvey');
    Route::get('survey/question/{id}','HomeController@questionSurvey');
    ///////////////////Question//////////////////////////
    Route::get('/survey-questions', 'HomeController@surveyQuestions')->name('surveyQuestions');
    Route::post('add-questions','HomeController@addQuestion')->name('addQuestion');
    Route::post('edit-question','HomeController@editQuestion')->name('editQuestion');
    Route::get('question/delete/{id}','HomeController@deleteQuestion')->name('deleteQuestion');
    Route::get('question/status/{id}/{status}','HomeController@statusQuestion')->name('statusQuestion');
    
    /////////////////////Options////////////////////////
    Route::get('options/{id}','HomeController@options');
    Route::get('/questions-options/{id}', 'HomeController@questionsOptions')->name('QuestionsOptions');
    Route::post('add-options','HomeController@addOptions')->name('addOptions');
    Route::post('edit-Options','HomeController@editOptions')->name('editOptions');
    Route::get('options/delete/{id}','HomeController@deleteOptions')->name('deleteOptions');
    Route::get('options/status/{id}/{status}','HomeController@statusOptions')->name('statusOptions');
    
    Route::get('category-list','HomeController@category')->name('categoryList');
    Route::post('add-category','HomeController@addCategory');
    Route::post('category/edit','HomeController@editCategory');
    Route::get('category/delete/{id}','HomeController@deleteCategory');
});