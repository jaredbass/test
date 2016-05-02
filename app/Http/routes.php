<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Services\API\Spotify;



//try ids like 6G9fHYDCoyEErUkHrFYfs4 or 0sNOF9WDwhWunNAHPD3Baj
Route::get('/spotify/{albumid}', function ($albumid){
    $spotify = new Spotify([
        'clientID' => '71b69dc21d6a474f89d99dc5c300dc9a'
    ]);

$tracks = $spotify->tracks("$albumid");
    // why does this not work?: $tracks = $spotify->tracks("https://api.spotify.com/v1/albums/$albumid");
return view('spotify', [
    'tracks' => $tracks
]);
//    dd($tracks);
//return Response::json($tracks);

});






Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/home', 'FinalPortfolio@search');
    Route::get('/results', 'FinalPortfolio@results');
    Route::get('/admin', 'FinalPortfolio@admin');
    Route::post('/admin', 'FinalPortfolio@signup');
    Route::post('/profile', 'FinalPortfolio@profile');
    Route::get('/entry', 'FinalPortfolio@entry');
    Route::get('/add', 'FinalPortfolio@add');
    Route::get('{username}/edit/{project}/', 'FinalPortfolio@edit');
    Route::get('{username}/delete/{project}/', 'FinalPortfolio@delete');
    Route::get('change/{username}/', 'FinalPortfolio@change');
    Route::post('/update/{username}/', 'FinalPortfolio@update');
    Route::get('/music', 'FinalPortfolio@music');
    Route::get('/add/{username}', 'FinalPortfolio@add');
    //
});

Route::group(['middleware' => 'web'], function () {


    Route::get('/home2', 'HomeController@index');
});
