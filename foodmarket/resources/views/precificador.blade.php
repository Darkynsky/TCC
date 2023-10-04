<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/js/scriptprecificador.js"></script>    
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>PattiBrigaderia</title>
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
        <a href=""><button>Visualizar Vendas</button></a>
    </nav>

    <div class="content">

        <div class="container_A">

            <table class="lista_ingredientes">
                <tr>
                    <th colspan="7">Tabela de Ingredientes</th>
                </tr>
                <tr>
                    <th>ingrediente</th>
                    <th>Quantidade (g)</th>
                    <th>Custo (R$)</th>
                    <th>Custo por grama</th>
                    <th>Quantidade(g) utilizada</th>
                    <th>Custo Final (R$)</th>
                    <th>Ações</th>
                </tr>
                @foreach ($ingredientes as $i)
                <tr>
                    <td><p>{{ $i->ingrediente }}<p></td>
                    <td><input type="text" id="QTD_TBI" value="{{ $i->quantidade }}" readonly="readonly"></td><!--Quantidade (A)-->
                    <td><input type="text" id="COST_TBI" value="{{ $i->custo }}" readonly="readonly"></td><!--Custo (B)-->
                    <td><input type="text" id="COSTG_TBI" readonly="readonly"></td><!--Aqui exibe o resultado (X) da Quantidade(A) dividida pelo Custo (B)-->
                    <td><input type="text" id="NQTD_TBI" value="0"></td><!--Aqui insere uma nova Quantidade (Y)-->
                    <td class="C1V" id="RESULTADO_TBI">0</td><!--Aqui exibe o valor (Z) da multiplicação entre Quantidade (Y) pelo custo (X) -->
                    <td>
                        <a href="/precificador/excluir/{{ $i->idIngredientes }}">deletar<img src="img/icon/excluir.png" class="icon_acoes"></a><!-- Exclui o ingrediente do banco de dados -->
                        <a><img src="img/icon/editar.png" class="icon_acoes"></a><!-- Edita o ingrediente do banco de dados -->
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="container_B">

            <table class="tb_precificador_produto">
                <tr>
                    <th colspan="2">Calculo do Produto</th>
                </tr>
                <tr>
                    <td>Total Custo de Ingredientes</td>
                    <td>
                        <input type="text" id="C2V1" readonly="readonly"> <!-- Este campo recebe o resultado da soma dos custos finais da tabela de ingrediente -->
                    </td>
                </tr>
                <tr>
                    <td>Adiciona 25% (custos incalculáveis, gás, luz, etc)</td>
                    <td>
                        <input type="text" id="C2V2" readonly="readonly"><!-- Este campo exibe o resultado do calculo do campo anterior somado com 25% -->
                    </td>
                </tr>
                <tr>
                    <td>Multiplica por 3 (seu lucro e mão de obra)</td>
                    <td>
                        <input type="text" id="C2V3" readonly="readonly"><!-- Este exibe o resultado do campo anterior multiplicado por 3 -->
                    </td>
                </tr>
                <tr>
                    <td>Rendimento / quantas unidades</td>
                    <td>
                        <input type="text" id="C2V4" value="0"><!-- Campo para inserir quantidades -->
                    </td>
                </tr>
                <tr>
                    <td>Preço por Unidade</td>
                    <td>
                        <input type="text" id="C2V5" readonly="readonly"><!-- Resultado de C2V3 dividido por C2V4 -->
                    </td>
                </tr>
                <tr>
                    <td>Preço por Embalagem Individual</td>
                    <td>
                        <input type="text" id="C2V6"><!-- Aqui deve ser inserido o preço de cada embalagem -->
                    </td>
                </tr>
            </table>

            <form action="/Produto" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
                <table class="tb_salvar_produto">
                    <tr>
                        <th colspan="2">Salvar Novo Produto</th>
                    </tr>
                    <tr>
                        <td>Nome do produto</td>
                        <td>
                            <input type="text" name="txNomeProduto"><!-- Inserir o nome do produto -->
                        </td>
                    </tr>
                    <tr>
                        <td>Valor Sugerido</td>
                        <td>
                            <input type="text" name="txValorSProduto" id="C2V7" readonly="readonly"><!-- Aqui mostra o resultado final do cáculo do precificador -->
                        </td>
                    </tr>
                    <tr>
                        <td>Valor de Venda</td>
                        <td>
                            <input type="text" name="txValorVProduto"><!-- Aqui insere o valor final do produto que pode ser o mesmo do sugerido ou não -->
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">Descrição</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <textarea name="txDescrProduto"></textarea><!-- Campo para descrever o produto -->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <!-- Dentro dessa celula tem um botão para upload de imagem personalizado -->
                            <label for="file-upload" class="custom-file-upload">
                                Selecione um arquivo
                            </label>
                            <input id="file-upload" type="file" name="txFotoProduto"/>
                        </td>
                        <td>
                            <input type="reset" value="Limpar"><!-- Limpa o formulário -->
                            <input type="submit" value="Salvar"><!-- Aciona a função responsável por inserir o novo produto no banco de dados -->
                        </td>
                    </tr>
                </table>
            </form>

        </div>

        <div class="container_C">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Produto</th>
                    <th>Descrição</th>
                    <th>Valor Custo</th>
                    <th>Valor Venda</th>
                    <th>Foto</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>






    </div>

    <footer></footer>    
</body>
</html>