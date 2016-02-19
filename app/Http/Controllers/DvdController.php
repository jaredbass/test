<?php

namespace App\Http\Controllers;

use App\DVD;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model as Eloquent;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Validator;
use App\Genre;
use App\label;
use App\sound;
use App\Rating;
use App\Format;
use Redirect;
use View;
use Lists;
use Form;
use Input;
use Insert;



class DvdController extends Controller
{

    public function search() {
        $genres = DB::table('genres')
        ->select('*')
        ->get();

        $ratings = DB::table('ratings')
            ->select('*')
            ->get();

        $listOfGenres = Genre::lists('genre_name', 'id');



        return view('search', [

            'ratings' => $ratings,
            'genres' => $genres,
            'listOfGenres' => $listOfGenres

        ]);
    }


    //

    public function results(Request $request)
    {



        $title = $request->input('title');
        $rating = $request->input('rating_id');
        $genre = $request->input('genre');




        $dvds = DB::table('dvds')
            ->select('dvds.id','title', 'rating_name', 'genre_name', 'label_name', 'sound_name', 'format_name')
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

        if (!$dvds){
            return Redirect::to('dvds/search')
                ->with('message', 'that title does not exist!');

//            return redirect('dvds/search')
//                ->with('message', 'that title does not exist!');

  ;}


        return view('results', [
            'dvds' => $dvds,
            'title' => $title,
            'rating' => $rating,
            'genre' => $genre
        ]);

    }



        public function reviews(Request $request)

        {
            $id = $request->input('id');
            $title = $request->input('title');
            $rating = $request->input('rating');
            $genre = $request->input('genre');
            $sound = $request->input('sound');
            $label = $request->input('label');
            $format = $request->input('format');

            $reviews = DB::table('reviews')
                ->select('reviews.dvd_id', 'reviews.title', 'reviews.description', 'reviews.rating')
                ->leftJoin('dvds', 'dvds.id', '=', 'reviews.dvd_id')
                ->where('dvds.id', '=', "$id")

//                        if ('dvds.id' != "$id"){
//            echo "error!";


                ->get();

           return view('reviews',[
               'reviews' => $reviews,
               'ids' => $id,
               'title' => $title,
               'rating' => $rating,
               'genre' => $genre,
               'sound' => $sound,
               'label' => $label,
               'format' => $format


           ]);
        }
        public function store(Request $request){

//            $id = $request->input('id');


           $validation =Validator::make($request->all(),[
               'rank' => 'integer|between:1,10',
               'titleOfReview' => 'required|min:5',
               'description' => 'required|min:10',
               'dvd_id' => 'required|integer'
           ]);

            if ($validation->fails()){
                return Redirect::back()
                    ->withInput()
                    ->withErrors($validation);
            }

            DB::table('reviews')->insert([
                'title' => $request->input('titleOfReview'),
                'rating' => $request->input('rank'),
                'description' => $request->input('description'),
                'dvd_id' => $request->input('dvd_id')
            ]);
            return Redirect::back()->with('success', true);
//            $review = new Review([
//                ''
//            ])

        }





    public function create(Request $request) {



//        if ($validation->fails()){
//            return Redirect::back()
//                ->withInput()
//                ->withErrors($validation);
//        }

        $genres = Genre::lists('genre_name', 'id');
        $label = Label::lists('label_name', 'id');
        $sounds = Sound::lists('sound_name', 'id');
        $rating = Rating::lists('rating_name', 'id');
        $format = Format::lists('format_name', 'id');



        return View::make('dvds.create')
            ->with('genres', $genres)
            ->with('label', $label)
            ->with('sounds', $sounds)
            ->with('rating', $rating)
            ->with('format', $format);



//return View('dvds.create', compact('genres'), compact('sounds'), compact('label'), compact('rating'), compact('format'));

            }

    public function store2(Request $request){

//            $id = $request->input('id');


        $validation =Validator::make($request->all(),[
            'Title' => 'required',
            'genre' => 'required',
            'sound' => 'required',
            'label' => 'required',
            'rating' => 'required',
            'format' => 'required'

        ]);

        if ($validation->fails()){
            return Redirect::back()
                ->withInput()
                ->withErrors($validation);
        }
        $dvd = new Dvd;
        $dvd->title ='Title';
        $dvd->genre_id ='genre';
        $dvd->sound_id ='sound';
        $dvd->label_id ='label';
        $dvd->rating_id ='rating';
        $dvd->format_id ='format';
        $dvd->save();
//
//        DB::table('dvds')->insert([
//            'title' => $request->input('title'),
//            'genre_id' => $request->input('genre'),
//            'sound_id' => $request->input('sound'),
//            'label_id' => $request->input('label'),
//            'rating_id' => $request->input('rating'),
//            'format_id' => $request->input('format')
//
//        ]);
        return Redirect::back()->with('success', true);
//            $review = new Review([
//                ''
//            ])

    }

    public function storeDVD(Request $request){

        $dvd = new DVD();
//        $genre = $request->input('genres');
//        $label = $request->input('label');
//        $sound = $request->input('sound');
//        $rating = $request->input('rating');
//        $format = $request->input('format');
//        $title = $request->input('title');
//        $dvd->genre_id = $genre;
//        $dvd->label_id = $label;
//        $dvd->sound_id = $sound;
//        $dvd->rating_id = $rating;
//        $dvd->format_id = $format;
//        $dvd->title = $title;
        $input= $request->all();
        $dvd->insert($input);
        $dvd->save();

    }

    public function genres(Request $request){

        $genre = $request->input('genre');

//        dd($genre);

        $dvds = DVD::with('rating', 'genre', 'label')->get();



        return view('dvds.genres', compact('dvds'), compact('genre'));
//        [
//            'dvds' => $dvds,
//            'genre' => $genre
//        ]);

    }

}
