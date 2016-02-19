<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sound extends Model
{

//    protected $table = array('genres');

    public function dvds(){


        return $this->hasmany('App\DVD');
    }
}
