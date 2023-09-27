<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'tbproduto';    
    protected $fillable = ['idProduto','produto','descricao','valor_unitario','valor_venda','foto'];
    public $timestamps = false;
}