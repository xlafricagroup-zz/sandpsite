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
    return view('index');
});

Route::get('/about', 'pagesController@about')->name('about');
Route::get('/static-man-guarding', 'pagesController@manguarding')->name('manguarding');
Route::get('/journey-management', 'pagesController@journeyManagement')->name('journeyManagement');
Route::get('/armed-response', 'pagesController@armedResponse')->name('armedResponse');
Route::get('/investigation-and-background-profile', 'pagesController@investigation')->name('investigation');
Route::get('/armed-escort', 'pagesController@armedEscort')->name('armedEscort');
Route::get('/in-country-emergency-response', 'pagesController@emergency')->name('emergency');
Route::get('/cctv-installation-and-servicing', 'pagesController@cctv')->name('cctv');
Route::get('/security-vehicle-rental-services', 'pagesController@vehicleRental')->name('vehicleRental');
Route::get('/vehicle-tracking-services', 'pagesController@tracking')->name('tracking');
Route::get('/event-security', 'pagesController@eventSecurity')->name('eventSecurity');
Route::get('/security-advisory-services', 'pagesController@advisory')->name('advisory');
Route::get('contact', 'pagesController@contact')->name('contact');
Route::post('contactSiteOwner', 'pagesController@contactSiteOwner')->name('contactSiteOwner');
Route::get('team', 'pagesController@team')->name('team');

