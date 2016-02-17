<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
//     protected $table = 'genres';
//    protected $table = array('genres');

    public function dvds(){


        return $this->hasmany('App\DVD');
    }
}
