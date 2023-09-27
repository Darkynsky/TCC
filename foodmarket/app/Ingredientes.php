<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredientes extends Model
{
    protected $table = 'tbingredientes';    
    protected $fillable = ['idIngrediente','ingrediente','quantidade','custo','dtCadastro'];
    public $timestamps = false;
}
