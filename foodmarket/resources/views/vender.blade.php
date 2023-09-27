<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="/"><!-- LINK COM IMAGEM PARA IR PARA A HOME -->
            <img class="img_logo" src="img/logo.jpeg" class="logo">
        </a>
    </header>
    <nav>
        <a href="/"><button>Home</button></a>
        <a href="precificador"><button>Precificar</button></a>
        <a href="vender"><button>Vender</button></a>
        <a href=""><button>Visualizar Vendas</button></a>
    </nav>

    <div class="content"><!-- CONTEÚDO DA PÁGINA -->
        <div class="vitrine"> <!-- AQUI EXIBE TODOS OS PRODUTOS INSERIDOS NO BANCO DE DADOS -->
            @foreach($produto as $p)<!-- ESTRUTURA DE REPETIÇÃO PARA EXIBIR TODAS AS LINHAS -->
            <div class="box_exibidor_produto">
                <div class="produto_part1exibe">
                    <img class="img_produto" src="img/produtos/produto.jpeg">
                </div>

                <div class="produto_part2exibe">
                    <p class="title_produto">{{ $p->produto }}</p><!-- EXIBE O NOME DO PRODUTO -->
                    <p class="descricao_produto">{{ $p->descricao }}</p><!-- EXIBE A DESCRIÇÃO DO PRODUTO -->
                </div>

                <div class="produto_part3exibe">
                    <p class="valor_do_produto">R$ {{ $p->valor_venda }}</p><!-- EXIBE O VALOR DO PRODUTO -->
                    <button>Add</button><!-- ADICIONA AO CARRINHO (AINDA NÃO CRIADO) -->
                </div>
            </div>
            @endforeach
        </div>
    </div>


    <footer></footer>
    
</body>
</html>