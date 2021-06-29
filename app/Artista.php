<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    protected $table = "artist";
    protected $primaryKey = "ArtistId";
    public $timestamps = false;
//ESTABLECER RELACION 1 ARTISTA - M DISCO
public function bailables(){
    //hasmany:
    //1 modelo a relacionar
    return $this->hasMany('App\Disco', 'ArtistId');
}
//  ESTABLECE RELACION  1 ARTISTA -M CANCION
public function canciones(){
    return $this->hasManyThrough('App\Cancion', 'App\Disco', 'ArtistId', 'AlbumId', 'ArtistId', 'AlbumId');
}
public function discos(){
    return $this->hasMany('App\Disco', 'ArtistId');

    }
}
