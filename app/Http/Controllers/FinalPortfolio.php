<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use DB;
use URL;
use Redirect;
use App\Users;
use App\Main;

class FinalPortfolio extends Controller
{
    //
    public function search()
    {

        return view('search', [



        ]);
    }

    public function results(Request $request)

    {


        $title = $request->input('title');
//
//        $results = Main::where("mains.type_id" , "=", "lookup.idlookup")
//
//            ->where("lookup.type", "like", $title)
//            ->get();

//        $results = Main::where("main.type_id" , "=", "lookup.idLookup");
//        $results = Main::where("mains.type_id", "=", "lookup.idlookup")->get();
//    dd($results);

        $results = DB::table('mains')
            ->select('id')
            ->leftJoin('lookup', 'lookup.idLookup', '=', 'mains.type_id')
            ->where('type', 'LIKE' , $title)
            ->get();

        if (!$results) {
            return Redirect::to('/home')
                ->with('message', 'Try again!');

        }

        return view('results',[
            'results' => $results,
            'title' => $title,



        ]);
    }

    public function entry(Request $request)

    {

        $title = $request->input('title');


        $entry = DB::table('mains')
            ->select('id','type_desc', 'type_url' )
            ->leftJoin('lookup', 'lookup.idLookup', '=', 'mains.id')
            ->where('id', 'LIKE' , "$title")
            ->get();


        return view('entry',[
            'entry' => $entry,
            'title' => $title,


        ]);
    }

    public function admin()

    {


        return view('admin',[



        ]);
    }

//    public function signup(Request $request)
//
//    {
//
////        $username = $request->input('username');
////        $password = $request->input('password');
//
//        $validation =Validator::make($request->all(),[
//            'username' => 'required',
//            'password' => 'required',
//
//        ]);
//

//        $user = new Users;
//        $user->username = 'username';
//        $user->password = 'password';
//        $user->save();
//
//
//        return Redirect::back()->with('success', true);
//
//    }

    public function profile(Request $request)

    {



        $username = $request->input('username');
        $password = $request->input('password');


        $title = $request->input('title');

        $results = DB::table('users')
            ->select('username', 'password')
            ->where('username', '=' , "$username")
            ->where('password', '=', "$password")
            ->get();

        if ($results == true){


        return view('profile',[

       'username' => $username,

            'password' => $password,
            'results' => $results

        ]);
    }

        if(!$results) {
            return Redirect::to('/admin')
                ->with('message', 'Try again!');


}}

    public function change($username)
    {
        $loggedin = URL::previous();


        $results = DB::table('mains')
            ->select('id', 'id', 'id')
            ->leftJoin('lookup', 'lookup.idLookup', '=', 'mains.id')
            ->leftJoin('users', 'users.users_id', '=', 'mains.users_id')
            ->where('users.username', '=', "$username")
            ->get();
        if ($loggedin == "http://localhost:8000/profile") {

            return view('change', [
                'username' => $username,
                'results' => $results,


            ]);
        }

        else {
            echo "no";
        }
    }

    public function music()
    {

        return view('music', [



        ]);
    }

    public function delete(Request $request)
    {
        $username = $request->segment(1);
        $title = $request->segment(3);
        $title = urldecode($title);

        Main::find($title)->delete();

//        Session::flash('message', "Delected succesfully!");
        return Redirect::back()->with('success', true);

    }

    public function edit(Request $request){

        $loggedin = URL::previous();

        $username = $request->segment(1);
        $title = $request->segment(3);
        $title = urldecode($title);

        http://localhost:8000/change/admin

        if ($loggedin == "http://localhost:8000/change/admin"){
        return view ('edit', [
            'title' => $title,
            'username' => $username

        ]);}

    }

    public function update(Request $request)
    {

        ////        $username = $request->input('username');
////        $password = $request->input('password');
//
//        $validation =Validator::make($request->all(),[
//            'username' => 'required',
//            'password' => 'required',
//
//        ]);
//

//        $user = new Users;
//        $user->username = 'username';
//        $user->password = 'password';
//        $user->save();
//
//
//        return Redirect::back()->with('success', true);
//
//    }

        $validation = Validator::make($request->all(), [

            'type_desc' => 'required',

        ]);

        if ($validation->fails()) {
            return redirect('/home')->
            with('msg', 'That was a wrong update, are you sure you meant to go there?');

        }


        else {
        $username = $request->segment(2);
        $title = $request->input('title');
        $description = $request->input('type_desc');




        $update = Main::find($title);
        $update->type_desc = $description;
        $update->save();


        return view('update', [

            'username' => $username,
            'title' => $title,
            'description' => $description

        ]);

    }}


//    public function add()
//    {
//        $add = new Main;
//        $add->type_desc = $description
//
//        return view('add', [
//
//
//
//        ]);
//    }

}
