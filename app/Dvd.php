<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dvd extends Model
{
    //
//    protected $
    public function genre(){
        return $this->belongsto('App\Genre');
    }
    public function label(){
        return $this->belongsto('App\Label');

    }
    public function rating(){
        return $this->belongsto('App\Rating');
    }
}
