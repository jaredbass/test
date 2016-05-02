<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    //
    public function lookup(){
        return $this->belongsTo('App\Models\Lookup');
    }
}
