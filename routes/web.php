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
Route::get('itm', function () {
    return view('s');
});
Route::get('s','EmployeeController@create');  //@ method
Route::get('o','EmployeeController@display');
Route::get('d','MyController@my');
Route::get('if','ConditionController@aif');
Route::get('else','ConditionController@aelse');
Route::get('elseif','ConditionController@aelseif');
Route::get('isset','ConditionController@aisset');
Route::get('empty','ConditionController@aempty');
route::get('unless','ConditionController@aunless');
route::get("for",'ConditionController@bfor');
route::get('foreach','ConditionController@bforeach');
route::get('forelse','ConditionController@bforelse');
route::get('while','ConditionController@bwhile');
route::get('loopindex','ConditionController@bloopindex');
route::get('pratice','PracticeController@pratice');
// dbcontroller
route::get('db','dbController@insert');
route::get('display','dbController@display');
route::get('update','dbController@update');
route::get('delete','dbController@delete');


//curd
route::get('curd/create','CurdController@create');
route::post('curd/insert','CurdController@save');
route::get('curd/display','CurdController@display');
route::get('curd/show/{id}','CurdController@show');
route::get('curd/delete/{id}','CurdController@delete');
route::get('curd/edit/{id}','CurdController@edit');
route::post('curd/update','CurdController@update');
//banner 
route::get('banner/form','BannerController@form');
route::post('banner/inser','BannerController@inser');
route::get('banner/display','BannerController@display');
route::get('banner/show/{id}','BannerController@show');
route::get('banner/edit/{id}','BannerController@edit');
route::post('banner/update','BannerController@update');
route::get('banner/delete/{id}','BannerController@delete');

//test
route::get('test/form','TeacherController@form');
route::post('test/insert','TeacherController@save');
route::get('test/display','TeacherController@display');
route::get('test/show/{id}','TeacherController@show');
route::get('test/edit/{id}','TeacherController@edit');
route::post('test/update','TeacherController@update');
route::get('test/delete/{id}','TeacherController@delete');

//sudhanshu
route::get('sud/form','SudhanshuController@form');
route::post('sud/insert','SudhanshuController@insert');
route::get('sud/show','SudhanshuController@show');
route::get('sud/detail/{id}','SudhanshuController@detail');
route::get('sud/edit/{id}','SudhanshuController@edit');
route::post('sud/update','SudhanshuController@update');
route::get('sud/delete/{id}','SudhanshuController@delete');

//department
route::get('image/create','DepartmentController@create');
route::post('image/insert','DepartmentController@save');
