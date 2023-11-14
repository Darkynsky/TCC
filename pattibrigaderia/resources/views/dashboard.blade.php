@extends('layouts.layoutdefault')
@section('content')


<table class="table_vendas">

    @foreach($vendas as $v)
    <tr>
        <th>ID</th>
        <th>Cliente</th>
        <th>Tipo de venda</th>
        <th>Data da venda</th>
        <th>Data da entrega</th>
        <th>Total da Venda</th>
        <th>Forma de Pagamento</th>
        <th>Status</th>
    </tr>

    <tr>
        <td>{{$v->idVenda}}</td>
        <td>{{$v->cliente}}</td>
        <td>{{$v->tpVenda}}</td>
        <td>{{$v->dtVenda}}</td>
        <td>{{$v->dtEntrega}}</td>
        <td>{{$v->totalVenda}}</td>
        <td>{{$v->fPagamento}}</td>
        <td>{{$v->status}}</td>
    </tr>

    <tr>
        <th></th>
        <th></th>
        <th>produto</th>
        <th>quantidade</th>
        <th>Valor total do produto</th>
    </tr>
        @foreach($carrinho as $c)
            @if($c->idVenda == $v->idVenda)

                <tr>
                    <td>{{$v->idVenda}}</td>
                    <td>{{$v->cliente}}</td>
                    <td>{{$c->produto}}</td>
                    <td>{{$c->qtd}}</td>
                    <td>{{$c->valor_total}}</td>
                </tr>
            @endif
    @endforeach
    
    @endforeach
</table>

@endsection