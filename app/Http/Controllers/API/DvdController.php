<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Dvd;
use App\Models\Genre;
use Response;
use Validator;

class DvdController extends Controller
{
    //
    public function index() {

     $dvds = Dvd::take(20)->get();
     $genres = $this->findUniqueGenres($dvds);
        $ratings = $this->findUniqueRatings($dvds);
//        $genre = Genre::with('dvds')->take(20)->get();


        return [ 'Dvds' => $dvds,
            'Genres' => $genres,
            'Ratings' => $ratings
        ];
    }

    public function findUniqueGenres($dvds){

        $added = [];
        $genres = [];

        foreach ($dvds as $dvd){
            if (!array_key_exists($dvd->genre->id, $added)) {
                $added[$dvd->genre->id] = true;
                $genres[] = $dvd->genre;
            }
        }
        return $genres;

    }

    public function findUniqueRatings($dvds){

        $added = [];
        $ratings = [];

        foreach ($dvds as $dvd){
            if (!array_key_exists($dvd->rating->id, $added)) {
                $added[$dvd->rating->id] = true;
                $ratings[] = $dvd->rating;
            }
        }
        return $ratings;

    }

    public function show($id) {
//        $dvds = Dvd::with('Genre', 'Rating')->take(20)->get();
        $dvd = Dvd::find($id);


        if (!$dvd) {
            return Response::json([
                'error' => 'DVD not found, dude!'

            ], 404);
        }

        $genres = $this->findUniqueGenre($dvd);
        $ratings = $this->findUniqueRating($dvd);
        return [ 'Dvd' => $dvd,
        'Genres' => $genres,
        'Ratings' => $ratings];

    }

    public function findUniqueRating($dvd){

        $added = [];
        $ratings = [];



                $ratings[] = $dvd->rating;



        return $ratings;

    }

    public function findUniqueGenre($dvd){

        $added = [];
        $genres = [];



                $genres[] = $dvd->genre;




        return $genres;

    }


    public function store(Request $request){

        $validator = Validator::make($request->all(), [
           'title' =>  'required|unique:dvds,title'
        ]);

        if ($validator->passes()) {

            $dvd = new Dvd();
            $dvd->title = $request->input('title');
            $dvd->save();

            return [
                'dvd' => $dvd
            ];

        }


            return Response::json([
                'errors' => [
                  'title' => $validator->errors()->get('title')
                    ]
        ], 422);

    }


    public function genres() {

        return [ 'Genres' =>
            Genre::all() ];
    }

    public function showGenre($id) {

        $genre = Genre::find($id);

        if(!$genre) {
            return Response::json([
                'error' => 'That is like, not a valid genre, man!'
            ], 404);
        }

        return [ 'Genre' =>
            $genre ];

    }
}
