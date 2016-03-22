<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class Test1 extends TestCase
{

    public function testVerifyResultsIsSubsetOfBooks(){

        $books = [
            [ 'title' => 'Introduction to HTML and CSS', 'pages' => 432 ],
            [ 'title' => 'Learning JavaScript Design Patterns', 'pages' => 32 ],
            [ 'title' => 'Object Oriented JavaScript', 'pages' => 42 ],
            [ 'title' => 'JavaScript Web Applications', 'pages' => 99 ],
            [ 'title' => 'PHP Object Oriented Solutions', 'pages' => 80 ],
            [ 'title' => 'PHP Design Patterns', 'pages' => 300 ],
            [ 'title' => 'Head First Java', 'pages' => 200 ]
        ];

        $search = new \App\Services\BookSearch($books);
        $results = $search->find('javascript');
//        $resultsString = $search->toString();

        $this->assertContains('book-test', $results);

    }

    public function testForExactMatch(){

        $books = [
            [ 'title' => 'Introduction to HTML and CSS', 'pages' => 432 ],
            [ 'title' => 'Learning JavaScript Design Patterns', 'pages' => 32 ],
            [ 'title' => 'Object Oriented JavaScript', 'pages' => 42 ],
            [ 'title' => 'JavaScript Web Applications', 'pages' => 99 ],
            [ 'title' => 'PHP Object Oriented Solutions', 'pages' => 80 ],
            [ 'title' => 'PHP Design Patterns', 'pages' => 300 ],
            [ 'title' => 'Head First Java', 'pages' => 200 ]
        ];

        $search = new \app\Services\BookSearch($books);
        $results = $search->find('javascript web applications', true);
//        $resultsString = $search->toString();

        $this->assertEquals('book-test', $results);

    }

    public function testForMissingMatch(){

        $books = [
            [ 'title' => 'Introduction to HTML and CSS', 'pages' => 432 ],
            [ 'title' => 'Learning JavaScript Design Patterns', 'pages' => 32 ],
            [ 'title' => 'Object Oriented JavaScript', 'pages' => 42 ],
            [ 'title' => 'JavaScript Web Applications', 'pages' => 99 ],
            [ 'title' => 'PHP Object Oriented Solutions', 'pages' => 80 ],
            [ 'title' => 'PHP Design Patterns', 'pages' => 300 ],
            [ 'title' => 'Head First Java', 'pages' => 200 ]
        ];

        $search = new \app\Services\BookSearch($books);
        $results = $search->find('The Definitive Guide to Symfony', true);
//        $this->assertEquals('book-test', $results);
    }

}
