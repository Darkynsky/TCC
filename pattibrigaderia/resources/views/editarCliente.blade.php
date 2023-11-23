@extends('layouts.layoutdefault')
@section('content')

    <div class="container">
        
        <form action="/cliente/{{ $cliente->idCliente }}" method="POST" >
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">

            <h1>Editar Cliente</h1>
            
            <div class="groupForm">

                <label for="cadClienteNome">Nome: </label>
                <input type="text" name="txNomeCliente" id="cadClienteNome" value="{{ $cliente->cliente }}">

                <label for="cadClienteCelular">Celular: </label>
                <input type="tel" name="txCelularCliente" id="cadClienteCelular" value="{{ $cliente->celular }}">
                

                <label for="cadClienteEmail">Email: </label>
                <input type="text" name="txEmailCliente" id="cadClienteEmail" value="{{ $cliente->email }}"><br>
                

            </div>
            <div class="groupForm">

                <label for="cadClienteCEP">CEP:  </label>
                <input type="text" name="txCepCliente" id="cadClienteCEP" value="{{ $cliente->cep }}">
                

                <label for="cadClienteMunicipio">Município: </label>
                <input type="text" name="txMunicipioCliente" id="cadClienteMunicipio" value="{{ $cliente->municipio }}">
                

                <label for="cadClienteBairro">Bairro: </label>
                <input type="text" name="txBairroCliente" id="cadClienteBairro" value="{{ $cliente->bairro }}"><br>
                

            </div>
            <div class="groupForm">

                <label for="cadClienteLogradouro">Logradouro: </label>
                    <input type="text" name="txLogradouroCliente" id="cadClienteLogradouro" value="{{ $cliente->logradouro }}">
                </label>

                <label for="cadClienteNumero">Nº:</label>
                    <input type="text" name="txNumeroCsCliente" id="cadClienteNumero" value="{{ $cliente->numero }}">
                

                <label for="cadClienteComplemento">Complemento:</label>
                    <input type="text" name="txComplementoCsCliente" id="cadClienteComplemento" value="{{ $cliente->complemento }}">
                
                
            </div>

            <input type="reset" value="Limpar todos os campos">
            <input type="submit" value="Atualizar">
        </form>
    </div>
@endsection
