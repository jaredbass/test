<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class DvdController extends Controller
{

    public function search() {
        $genres = DB::table('genres')
        ->select('*')
        ->get();

        $ratings = DB::table('ratings')
            ->select('*')
            ->get();

        return view('search', [

            'ratings' => $ratings,
            'genres' => $genres

        ]);
    }


    //

    public function results(Request $request)
    {
        $title = $request->input('title');
        $rating = $request->input('rating_id');
        $genre = $request->input('genre');


        $dvds = DB::table('dvds')
            ->select('dvds.id', 'title', 'rating_name', 'genre_name', 'label_name', 'sound_name', 'format_name')
//            ->leftJoin('title', 'dvds.title_id', '=', 'title.id')
            ->leftJoin('ratings', 'rating_id', '=', 'ratings.id')
            ->leftJoin('genres', 'genre_id', '=', 'genres.id')
            ->leftJoin('labels', 'label_id', '=', 'labels.id')
            ->leftJoin('sounds', 'sound_id', '=', 'sounds.id')
            ->leftJoin('formats', 'format_id', '=', 'formats.id')
            ->where('title', 'like', "%$title%")
            ->where(function($query)use($rating,$genre){
                if($rating != '0'){ $query->where('rating_name', 'like', "$rating"); }
                if($genre != '0') { $query->where('genre_name', 'like', "$genre"); }
            })
        ->get();


        return view('results', [
            'dvds' => $dvds,
            'title' => $title,
            'rating' => $rating,
            'genre' => $genre
        ]);

    }
        public function create()
        {
            $reviews = DB::table('reviews')
                ->get();

           return view('reviews',[
               'review' => $reviews

           ]);
        }
        public function store(Request $request){
           $validation =Validator::make($request->all(),[
               'rank' => 'integer|between:1,10',
               'title' => 'required|min:5',
               'description' => 'required|min:10',
               'dvd_id' => 'required|integer'
           ]);

            if ($validation->fails()){
                return redirect('/dvds/dvd_id')
                    ->withInput()
                    ->withErrors($validation);
            }

//            $review = new Review([
//                ''
//            ])
        }


}
