<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    //
    protected $hidden = ['updated_at', 'created_at'];

    public function dvd()
    {

        return $this->hasMany('App\Models\Dvd');
    }
}
