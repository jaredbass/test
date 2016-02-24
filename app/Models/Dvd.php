<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dvd extends Model
{
    //
    protected $hidden = [ 'updated_at', 'created_at', 'release_date', 'format_id', 'label_id', 'sound_id'];

    public function genre(){
        return $this->belongsTo('App\Models\Genre');
    }

    public function rating(){
        return $this->belongsTo('App\Models\Rating');
    }
}
