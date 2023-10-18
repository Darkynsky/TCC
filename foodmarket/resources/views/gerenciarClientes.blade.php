<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script href="/js/consultacep.js"></script>
    <title>Document</title>
</head>
<body>
    <header>
        <a href="/">
            <img class="img_logo" src="img/logo.jpeg" class="logo">
        </a>
    </header>
    <nav>
        <a href="/"><button>Home</button></a>
        <a href="precificador"><button>Precificar</button></a>
        <a href="vender"><button>Vender</button></a>
        <a href="gerenciarClientes"><button>Clientes</button></a>
        <a href=""><button>Visualizar Vendas</button></a>
    </nav>

    <div class="content">

        <form action="/Cliente" method="post" class="formCliente">
        {{ csrf_field() }}
            <h1>Cadastro de Clientes</h1>
            <label for="cadClienteNome">Nome: </label>
            <input type="text" name="txNomeCliente" id="cadClienteNome"><br>
            <label for="cadClienteCelular">Celular:</label>
            <input type="tel" name="txCelularCliente" id="cadClienteCelular"><br>


            <input type="reset" value="Limpar todos os campos">
            <input type="submit" value="Salvar">
        </form>

    </div>

    <footer></footer>
    
</body>
</html>