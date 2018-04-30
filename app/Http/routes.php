<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('user', 'UserController');

Route::resource('role', 'RoleController');

Route::resource('cadre', 'CadreController');

Route::resource('personnel', 'PersonnelController');

Route::resource('district', 'DistrictController');

Route::resource('testcategory', 'TestCategoryController');
Route::get("/testcategory/{id}/destroy", array(
            "as"   => "testcategory.destroy",
            "uses" => "TestCategoryController@destroy"
));

Route::resource('facility', 'FacilityController');

Route::resource('specimen', 'SpecimenController');

Route::resource('show', 'SettingController');

Route::resource('drug', 'DrugController');

Route::resource('specimentype', 'SpecimenTypeController');
Route::get("/specimentype/{id}/destroy", array(
            "as"   => "specimentype.destroy",
            "uses" => "SpecimenTypeController@destroy"
));

Route::post('/get_sub_districts', 'ApiController@getSubDistrict');

Route::post('/get_facility_list', 'ApiController@getFacilityList');

Route::post('/get_facility_info', 'ApiController@getFacilityInfo');

Route::post('/get_facility_personnel', 'ApiController@getFacilityPersonnel');

Route::resource('testtype', 'TestTypeController');
