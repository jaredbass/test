<?php
/**
 * Created by PhpStorm.
 * User: jaredbass
 * Date: 3/1/16
 * Time: 2:59 PM
 */
namespace App\Services\API;

use Cache;

class Spotify {


    protected $clientID;
    public function __construct(array $config = []){
        $this->clientID = $config['clientID'];
    }

    public function tracks($profileURL){
        if (Cache::get($profileURL)){
            $jsonString = Cache::get($profileURL); }

        else {
            $album = $this->album($profileURL);
            $id = $album->id;
//            $clientID = $this->clientID;
            $url = "https://api.spotify.com/v1/albums/$id";
            $jsonString = file_get_contents($url);
            Cache::put($profileURL, $jsonString, 30); }

        $tracks = json_decode($jsonString);
//        dd($tracks);

        return $tracks; }

    protected function album($url){
//        $clientID = $this->clientID;
        $url = "https://api.spotify.com/v1/albums/$url";
//        $url = "https://api.spotify.com/v1/albums/$url&client_id=$clientID";
        $jsonString = file_get_contents($url);
        $album = json_decode($jsonString);
        return $album;
    }

}