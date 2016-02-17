<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
//    protected $table = 'ratings';
//    protected $table = array('genres');

    public function dvds(){


        return $this->hasmany('App\DVD');
    }
}
