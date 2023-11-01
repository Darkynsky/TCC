
@extends('layouts.layoutdefault')
@section('content')

<div class="container_B">

    <form action="/Cliente" method="post" id="formCliente" >
        {{ csrf_field() }}
        <h1>Cadastro de Clientes</h1>
        <label for="cadClienteNome">Nome: </label>
        <input type="text" name="txNomeCliente" id="cadClienteNome"><br>
        
        <label for="cadClienteCelular">Celular: </label>
        <input type="tel" name="txCelularCliente" id="cadClienteCelular"><br>
        
        <label for="cadClienteCEP">CEP: </label>
        <input type="text" name="txCepCliente" id="cadClienteCEP"><br>
        
        <label for="cadClienteLogradouro">Logradouro: </label>
        <input type="text" name="txLogradouroCliente" id="cadClienteLogradouro"><br>
        
        <label for="cadClienteNumero">Nº:</label>
        <input type="text" name="txNumeroCsCliente" id="cadClienteNumero"><br>
        
        <label for="cadClienteMunicipio">Município: </label>
        <input type="text" name="txMunicipioCliente" id="cadClienteMunicipio">
        
        
        
        <input type="reset" value="Limpar todos os campos">
        <input type="submit" value="Salvar">
    </form>
</div>
<div class="container_A">


    <table class="table_lista">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Celular</th>
            <th>Endereço</th>
            <th>Número</th>
            <th>Cidade</th>
            <th>CEP</th>
        </tr>
        @foreach($clientes as $cl)
        <tr>
            <td>{{$cl->idCliente}}</td>
            <td>{{$cl->cliente}}</td>
            <td>{{$cl->celular}}</td>
            <td>{{$cl->logradouro}}</td>
            <td>{{$cl->casa}}</td>
            <td>{{$cl->cidade}}</td>
            <td>{{$cl->cep}}</td>
        </tr>
        @endforeach
    </table>
</div>
        
@endsection