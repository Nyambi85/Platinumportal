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

Route::get('/', 'activitiesController@mainPage');

//Route::get('/','mainController@index');

Route::get('showActivities','activitiesController@index');

Route::get('showTraining','activitiesController@showTraining');

Route::get('showTraining2','activitiesController@showTraining2');

Route::get('blog','activitiesController@showBlog');

Route::get('blogMoreDetails','activitiesController@blogMore');

Route::get('blogMoreDetails2','activitiesController@blogMore2');

Route::get('blogMoreDetails3','activitiesController@blogMore3');

Route::get('blogMoreDetails4','activitiesController@blogMore4');

Route::get('blogMoreDetails5','activitiesController@blogMore5');

Route::get('blogMoreDetails6','activitiesController@blogMore6');

Route::get('blogMoreDetails7','activitiesController@blogMore7');

Route::get('blogMoreDetails8','activitiesController@blogMore8');

Route::get('blogMoreDetails9','activitiesController@blogMore9');

Route::get('blogMoreDetails10','activitiesController@blogMore10');

Route::get('MStraining','activitiesController@showTrainingMS');

Route::get('MSmoreVideo/{id}','activitiesController@showMoreTrainingMS');

Route::get('branch','activitiesController@branchlocation');

Route::get('about','activitiesController@about');

Route::get('aboutHR','activitiesController@about2');

Route::get('aboutBM','activitiesController@about3');

Route::get('mainhome', 'activitiesController@mainhome');

Route::get('lbfpage','activitiesController@lbfpage');

Route::get('cspage','activitiesController@cspage');

Route::get('kukuloan','activitiesController@kukloanpage');

Route::get('ujasiriamaliloan','activitiesController@ujasiriamaliloanpage');

Auth::routes();


Route::post('password/request1',
    ['as' => 'password.request1', 'uses'=>'Auth\ResetPasswordController@reset1']);



Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');


Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', 'HomeController@index')->name('home');
    /*Route::get('/home',function (){
       return "Yunaso";
    });*/

    Route::get('/backEnd', 'HomeController@backEnd')->name('admin');

    Route::get('logout', 'Auth\LoginController@logout');
    Route::get('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('password/request', 'Auth\ForgotPasswordController@showReset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');


    ####User
    Route::get('users/loadCV',
        ['as'=>'users.loadCV','uses'=>'cvController@index']);
  /*Route::get('users/loadCV', function(){
      return 'testNow';
  });*/

    Route::get('users/register',
        ['as' => 'users.register','uses'=>'UserController@create']);

    Route::post('user/create',
        ['as' => 'user.create', 'uses'=>'UserController@store']);



    ###List users
    Route::get('user/listUser',
        ['as' => 'user.listUser', 'uses'=>'UserController@index']);

    ####List Applicants
    Route::get('users/applicants',
        ['as' => 'users.applicants', 'uses'=>'UserController@viewApplicant']);


    ###viewUser
    Route::get('users/{id}', 'UserController@show');

   /* Route::get('users/{id}',function (){
        return  'testtets';
    });*/


    ######Edit users
    Route::get('users/edit/{id}','UserController@editUser');


    #####USer editProfile
    Route::post('user/editProfile',
        ['as' => 'user.editProfile','uses'=>'UserController@editProfile']);

    ######Applicantfilter
    Route::post('applicant/filter',
        ['as' => 'applicant.filter', 'uses'=>'UserController@filterApllicant']);


    ###Role
    Route::get('role/view',
        ['as' => 'role.view','uses'=>'RoleController@index']);

    ###Permision
    Route::get('permission/view',
        ['as' => 'permission.view','uses'=>'PermissionController@index']);

    ######add permission
    Route::get('permission/add',
        ['as' => 'permission.add', 'uses' => 'PermissionController@create']);

    ####Store permission
    Route::post('permission/storePermission',
        ['as' => 'permission.storePermission', 'uses' => 'PermissionController@store']);


    ####upload CV
    Route::post('cvPage/personalDetails',
        ['as' => 'cvPage.personalDetails', 'uses' =>'cvController@store']);


    ######Edit CV
    Route::get('editCV/{id}','cvController@edit');


    ###Job Detauils
    Route::get('job/jobDetails',
        ['as' => 'job.jobDetails' , 'uses' => 'jobController@index']);



    ###Job Details
    Route::get('job/jobDetails/{id}','jobController@show');

    ####Job created
    Route::get('job/jobCreate',
        ['as' => 'job.jobCreate' , 'uses' => 'jobController@create']);


    ####Job store
    Route::get('job/jobStore',
        ['as' => 'job.jobStore' , 'uses' => 'jobController@store']);

    ###view Jobs
    Route::get('job/viewJobs',
        ['as' => 'job.viewJobs' , 'uses' => 'jobController@viewJob']);

    ######Edit Job
    Route::get('job/viewJob/{id}','jobController@edit');



    ####Applayjob
    Route::get('job/applay/{id}', 'jobController@applay');


    Route::post('user/apply',
    ['as' => 'user.applay', 'uses' => 'jobController@userApplay']);

    ###Post
    Route::get('post/postForm',
        ['as' => 'post.postForm' , 'uses' => 'PostController@index']);

    Route::post('post/postCreate',
        ['as' => 'post.create' , 'uses' => 'PostController@create']);

    Route::post('post/postStore',
        ['as' => 'post.store' , 'uses' => 'PostController@Store']);


    ####Announcement
    Route::get('Announcement/{id}','announcement@index');

    Route::get('nominationform','formController@nomintaionform');
    Route::post('postnominationForm','formController@postnomintaionform');

    Route::get('nominationResults','formController@index');

    Route::get('viewNominatio','formController@viewNomination');

    Route::get('viewNominationVote/{id}','formController@viewNominationvote');


    //Route::get('home', 'HomeController@index');

   #Staff Page
   Route::get('mainhome', 'HomeController@index')->name('home');
   /* Route::get('mainhome',function (){
        return 'Test';
    });*/


	Route::get('paytan','HomeController@Paytan');

    ####Abouts
    #Route::get('/about','HomeController@about');
});
