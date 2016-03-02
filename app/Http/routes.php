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

Route::group(['prefix' => 'api/v1', 'namespace' => 'API'], function(){
   Route::get('dvds', 'DvdController@index');
    Route::get('dvds/{id}', 'DvdController@show');
    Route::get('genres', 'DvdController@genres');
    Route::get('genres/{id}', 'DvdController@showGenre');

    Route::post('dvds', 'DvdController@store');

});

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
    Route::get('/dvds/search', 'DvdController@search');
    Route::get('/dvds/results', 'DvdController@results');
    Route::get('/dvds/create', 'DVDController@create');
    Route::post('/dvds/create', 'DVDController@store2');
    Route::get('/dvds/genres', 'DVDController@genres');
    Route::get('/reviews/new', 'DvdController@reviews');
    Route::get('/dvds/index', 'DvdController@index');
    Route::post('/reviews', 'DvdController@store');
    //
});
