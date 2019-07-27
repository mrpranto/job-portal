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

Route::get('/', 'WelcomeController@index');
Route::get('/job-details/{id}', 'WelcomeController@job_details')->name('job.details');
Route::get('/job-list', 'WelcomeController@job_list')->name('job.list');

Auth::routes();
Route::get('/logout', 'Auth\LoginController@applicantLogout')->name('applicant.logout');


Route::group([ 'middleware' => 'auth' ], function (){
    Route::get('profile', 'ApplicantController@profile')->name('profile');
    Route::get('view-resume', 'ApplicantController@view_resume')->name('view.resume');
    Route::get('edit-resume', 'ApplicantController@edit_resume')->name('edit.resume');
    Route::post('add-resume', 'ApplicantController@addResume')->name('add.resume');
    Route::post('update-resume', 'ApplicantController@updateResume')->name('updated.resume');
    Route::post('apply-job', 'JobApplyController@apply_job')->name('apply.job');
    Route::get('applied-job', 'JobApplyController@applied_job')->name('applied.job');
});





Route::get('/employer-login', 'EmployerLoginController@login_form')->name('employer.login');
Route::post('/employer-login', 'EmployerLoginController@processEmployerLogin')->name('employer.login');
Route::get('/employer-logout', 'EmployerLoginController@logout')->name('employer.logout');
Route::get('/employer-register', 'EmployerLoginController@register_form')->name('employer.register');
Route::post('/employer-register', 'EmployerLoginController@processEmployerRegister')->name('employer.register');

Route::group([ 'prefix' => 'employer', 'middleware' => 'auth:employer'], function (){

    Route::get('/dashboard', 'EmployerDashboardController@employerDashboard')->name('employer.dashboard');

    Route::resource('job', 'JobsController');
    Route::get('job/publish/{id}', 'JobsController@publish')->name('employer.job.publish');
    Route::get('job/un-publish/{id}', 'JobsController@un_publish')->name('employer.job.un-publish');

    Route::get('/applied-applicant', 'EmployerDashboardController@applied_applicant')->name('employer.applied-applicant');
    Route::get('/job-applied-details/{id}', 'EmployerDashboardController@job_applied_details')->name('employer.job-applied-details');
    Route::get('/applicant/{id}', 'EmployerDashboardController@applicant')->name('employer.applicant');

});




