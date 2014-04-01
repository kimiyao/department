<?php
//language-----------------------------------------------------------------------------------------
Route::get("lang/{lang}", function($lang)
{
	$cookie = Cookie::forever('lang', $lang);
	(Session::get('redir_url'))? $url = Session::get('redir_url') : $url = "/";
	return Redirect::to($url)->withCookie($cookie);
});
//------------------------------------------------------------------------------------------------


Route::get('/', 'HomeController@Index');

// admin routes---------------------------------------
Route::get ('login' , 'AdminController@Login');
Route::post('login' , 'AdminController@pLogin');
Route::post('logout', 'AdminController@pLogout');
//----------------------------------------------------

// user routes----------------------------------------
Route::get('teachers/{department_id}',        'UserController@DeprtTeachers');
Route::get('teachers/{department_id}/{type}', 'UserController@DeprtStaff');
Route::get('user/{id}'     , 		   		  'UserController@User');
Route::get('user/{id}/edit', 		   		  'UserController@Edit');
Route::put('user/{id}/edit',  		   		  'UserController@putEdit');
//----------------------------------------------------

// course routes--------------------------------------
Route::get('courses/{department_id}', 'CourseController@DeprtCourses');
Route::get('course/{code}', 		  'CourseController@Course');
//----------------------------------------------------

// faculty routes--------------------------------------
Route::get('faculties', 	 'FacultyController@Faculties');
Route::get('faculty/{name}', 'FacultyController@Faculty');
//----------------------------------------------------

// department routes--------------------------------------
Route::get('departments', 		'DepartmentController@Departments');
Route::get('department/{name}', 'DepartmentController@Department');
//----------------------------------------------------

// research routes--------------------------------------
Route::get('researches/{department_id}/{type}', 'ResearchController@Researches');
Route::get('researches/{department_id}', 		'ResearchController@ResearchesAll');
Route::get('research/{id}'			   , 		'ResearchController@Research');
//----------------------------------------------------

// current info routes--------------------------------------
Route::get('infos/{department_id}/{type}',  'InfoController@Infos');
Route::get('info/{id}', 				    'InfoController@Info');
//----------------------------------------------------

// history routes--------------------------------------
Route::get('histories/{department_id}/{type}',  'InfoController@Histories');
Route::get('history/{id}', 				        'InfoController@Info');
//----------------------------------------------------

// prosp_students routes--------------------------------------
Route::get('prosp_students/{department_id}/{type}', 'InfoController@Abiturients');
Route::get('prosp_student/{id}', 			 		'InfoController@Info');
//----------------------------------------------------

// contacts routes--------------------------------------
Route::get('contacts/{department_id}',   'ContactsController@Contacts');
Route::get('directions/{department_id}', 'ContactsController@Directions');
//----------------------------------------------------