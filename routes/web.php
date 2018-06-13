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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/','WebsiteController@index');


Route::get('Aim_Mission','WebsiteController@aimAndmission');
Route::get('FacultyTeam','WebsiteController@FacultyTeam');
Route::get('Board_of_governous','WebsiteController@BOG');
Route::get('legal_advisor','WebsiteController@legal_advisor');
Route::get('about_sdc','WebsiteController@about_sdc');
Route::get('about_ttpc','WebsiteController@about_ttpc');
Route::get('legal_status_iisciences','WebsiteController@legal_status_iisciences');
Route::get('recognition_of_professional_diploma','WebsiteController@ropd');
Route::get('affiliation','WebsiteController@affiliation');
Route::get('chairmen','WebsiteController@chairmen');
Route::get('director_Monitoring','WebsiteController@director_Monitoring');
Route::get('director_finance','WebsiteController@director_finance');
Route::get('director_programs','WebsiteController@director_programs');

//forms//
Route::get('coordinator_form','WebsiteController@coordinator_form');
Route::get('frenchise_business_form','WebsiteController@FBF');

//education system//
Route::get('apl','WebsiteController@apl');
Route::get('dl_pros_cons','WebsiteController@dl_procon');
Route::get('ebe','WebsiteController@ebe');
Route::get('fies','WebsiteController@fies');
Route::get('priorityAward','WebsiteController@priorityAward');
Route::get('recognition_of_prior_learning','WebsiteController@ropl');
Route::get('regular_education_sys','WebsiteController@regularesys');

//Student servic

Route::get('Examination','WebsiteController@examination');
Route::get('generalInfo','WebsiteController@generalInfo');
Route::get('Online_verify','WebsiteController@Online_verify');
Route::post('findStudent','StudentsController@find');


//Admissions//
Route::get('admission_forms','WebsiteController@ad_forms');
Route::get('Threemnth','WebsiteController@Threemnth');
Route::get('SixMontn','WebsiteController@Sixmnth');
Route::get('OneYear','WebsiteController@OneYear');
Route::get('TwoYear','WebsiteController@TwoYear');
Route::get('DegreeProgram','WebsiteController@DegreeProg');
Route::get('FeeStructure','WebsiteController@FeeStructure');
Route::get('document_requird','WebsiteController@document_requird');


//ContactUs//
Route::get('headOffice','WebsiteController@headOffice');
Route::get('BusinessFrenchise_Pak','WebsiteController@BusinessFrenchise_Pak');
Route::get('BusinessFrenchise_overSea','WebsiteController@BusinessFrenchise_overSea');
Route::get('Coordinator_pak','WebsiteController@Coordinator_pak');
Route::get('Coordinator_OverSea','WebsiteController@Coordinator_OverSea');

//gallery//
Route::get('gallery','WebsiteController@gallery');

Auth::routes();

Route::group(['middleware' => ['auth']], function() {

Route::get('/home', 'HomeController@index')->name('home');
//Admin panel//
Route::post('createStudent','StudentsController@create');
Route::get('addSTU','StudentsController@addSTU');
Route::get('allStudents','StudentsController@viewStudents');
Route::get('deleteStudent&{id}','StudentsController@delete');
Route::get('editStudentInfo&{id}','StudentsController@edit');
Route::post('updateStu&{id}','StudentsController@update');
});
