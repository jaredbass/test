<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Label extends Model {
//    protected $table = 'labels';
    /**
 * Created by PhpStorm.
 * User: jaredbass
 * Date: 2/16/16
 * Time: 10:57 AM
 */

public function dvds(){
    return $this->hasmany('App\DVD');
}}