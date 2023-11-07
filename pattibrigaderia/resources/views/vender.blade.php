@extends('layouts.layoutdefault')
@section('content')

<div class="vitrine">

    @foreach($produto as $p)
        <div class="box_exibidor_produto">
            <div class="produto_part1exibe">
                <img class="img_produto" src="img/produtos/{{ $p->foto }}">
            </div>
                
            <div class="produto_part2exibe">
                <p class="title_produto">{{ $p->produto }}</p><br/>
                <p class="descricao_produto">{{ $p->descricao }}</p>
            </div>
                
            <div class="produto_part3exibe">
                <p class="valor_do_produto">R$ {{ $p->valor_venda }}</p>
                <button>Add</button>
            </div>
        </div>
    @endforeach
    </div>
        
    <div class="carrinho">
        <table></table>
    </div>
        
@endsection