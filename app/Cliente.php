<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "customer";
    protected $primaryKey = "CustomerId";
    public $timestamps = false;

    //RELACION 1 -M  CON COMPRA
    public function compra(){
        return $this->HasMany('App\Compra', 'CustomerId');
    }
}
