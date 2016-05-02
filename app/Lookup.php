<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lookup extends Model
{
    public function main(){
        return $this->hasMany('App\Models\Main');
}

}