<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BookTest extends TestCase
{

    private $books = [
            [ 'title' => 'Introduction to HTML and CSS', 'pages' => 432 ],
            [ 'title' => 'Learning JavaScript Design Patterns', 'pages' => 32 ],
            [ 'title' => 'Object Oriented JavaScript', 'pages' => 42 ],
            [ 'title' => 'JavaScript Web Applications', 'pages' => 99 ],
            [ 'title' => 'PHP Object Oriented Solutions', 'pages' => 80 ],
            [ 'title' => 'PHP Design Patterns', 'pages' => 300 ],
            [ 'title' => 'Head First Java', 'pages' => 200 ]
        ];

    public function testVerifyResultsIsSubsetOfBooks(){
        $search = new \App\Services\BookSearch($this->books);
        $results = $search->find('javascript', false);
//        dd($results);
//        $titles = [];

        $this->assertArraySubset( [
            [ 'title' => 'Learning JavaScript Design Patterns', 'pages' => 32 ],
            [ 'title' => 'Object Oriented JavaScript', 'pages' => 42 ],
            [ 'title' => 'JavaScript Web Applications', 'pages' => 99 ]
        ], $results);
//        $resultsString = $search->toString();
//dd($results);

//        foreach ($results as $result) {
//            dd($results);

//            $allLowerCase = strtolower($result['title']);
//            $key = 'title';
//            if (strpos($allLowerCase, 'javascript')) {
//                $titles[] = $result;

//            }
//            dd($titles);
//            $key = 'title';
//        }
//        dd($titles);
//        $this->assertEquals($titles, $theResults);


    }


    public function testForExactMatch()
    {


        $search = new \app\Services\BookSearch($this->books);
        $results = $search->find('javascript web applications', true);
//        dd($results);
//        $resultsString = $search->toString();
//        $titles = [];

        $this -> assertArraySubset( [
            ['title' => 'JavaScript Web Applications', 'pages' => 99]
        ], $results);

//        foreach ($results as $result) {
//
//            $allLowerCase = strtolower($result->title);
//            if (strpos($allLowerCase, 'the javascript web applications')) {
//                $titles[] = $result;
//
//            }
//        }
//        dd($titles);
//        $this->assertEquals($titles, $theResults);

    }

    public function testForMissingMatch(){

        $search = new \app\Services\BookSearch($this->books);
        $results = $search->find('The Definitive Guide to Symfony', true);
        $this->assertFalse($results);
    }



}


