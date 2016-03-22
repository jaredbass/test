<?php
/**
 * Created by PhpStorm.
 * User: jaredbass
 * Date: 3/10/16
 * Time: 12:57 PM
 */

namespace App\Services;


class BookSearch
{
    protected $books;


    public function __construct(array $myArray)
    {
        $this->books = $myArray; //construct an array with all of the according books
    }

    public function find($search, $match) //search for a match, should I have two of these?
    {
        $search = strtolower($search); //lower case
        $title = [];

        if ($match) {
            foreach ($this->books as $book) {

                $compare = strtolower($book['title']);
                if ($compare == $search) {
                    $title[] = $book; //compare them to add to array
                }


            }

        }

        else{
            foreach ($this->books as $book) {

                $compare = strtolower($book['title']);
                if (strpos($compare, $search)!==false) {
                    $title[] = $book;
                }


            }

        }
        if(empty($title)){
            return false;
        }
        else {
            return $title;
        }

    }


}