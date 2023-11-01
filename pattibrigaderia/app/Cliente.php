<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{    
    protected $table = 'tbcliente';    
    protected $fillable = ['idCliente','cliente','celular'];
    public $timestamps = false;
}
