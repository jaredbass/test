<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{


    public function dvds(){


        return $this->hasmany('App\DVD');
    }
}
