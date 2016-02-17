<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Format extends Model
{
    protected $table = 'formats';
//    protected $table = array('genres');

    public function dvds(){


        return $this->hasmany('App\DVD');
    }
}
