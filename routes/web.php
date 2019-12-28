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

use App\Http\Controllers\ChallengeController;

Route::get('/', 'ExternalPagesController@index');

Route::get('/ambassadors', function () {
    return view('ambassadors');
})->name('ambassadors');

Auth::routes(["register" => false]);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {    
    Route::get('/home', 'HomeController@index')->name('dashboard');
    Route::post(
        '/challenge/create',
        'ChallengeController@create'
    )->name('challenges.create');
    Route::post('/challenges/delete', 'ChallengeController@delete')->name('challenge.delete');
    Route::post(
        '/event/create',
        'EventController@create'
    )->name('event.create');
    Route::get('/challenges', 'ChallengeController@index')->name('admin.challenges');
    Route::get('/events', 'EventController@index')->name('admin.events');
    Route::post('/events/delete', 'EventController@delete')->name('event.delete');
    Route::get('/challenges/{id}/', 'ChallengeController@entries')->name('challenge.view');
    Route::post('/challenges/entry', 'ChallengeController@addEntry')->name('entry.add');
});
