<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Liloca</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.18/dist/css/bootstrap-select.min.css">

</head>

<body>
    <?php
    require_once('menu.html');
    ?>
    <section class="">

    </section>
<div class="topo1">
        <h1 >Confeitario Liloca</h1>
        </div>
        <nav class="nav">
            
            <ul class="Menu1">
                <li >
                    <a class="Homee" href="index.html">Home</a>           
                </li>

                <li >
                    <a class="MSobre" href="Sobre.html">Sobre nós</a>
                </li>
                <li >
                    <a class="MBolos" href="Bolos.html">Bolos</a>
                </li>
                <li >
                    <a class="MContato" href="Contato.html">Contato</a>
                </li>

                <li class="MRegistre" id="dropdown">
                    <a class="dropbotao" href="Registre.php">Login/Regristre-se</a>
                    <div class="dropdown-content">
                        <a href="Pedido.php">Pedido</a>
                        <a href="Consulta.php">Consulta</a>
                        <a href="Cadastro.php">Cadastro</a>
                        
                    </div>
                </li>
            </ul>
        </nav>
    </div>

    <form action="" method="POST">
    <div>
            <select name="Produto" id="CampoProduto">
                <option selected disabled value="">Escolha um tipo de Produto</option>
                <option value="Bebida">Bebidas</option>
                <option value="Enfeite">Enfeites</option>
                <option value="Alimento">Alimentos</option>
            </select>
            <input type="submit" value="Enviar">
            </div>
    </form>


    <form action="Processa.php" method="POST">
        <div>
  
                <?php
            if(!empty($_POST['Produto'])){

                $RS = $_POST["Produto"];

                if ($RS == "Bebida") {
                    
                    ?>
                    <br>
                    <label for="CampoNome">Nome</label>
                    <input type="text" name="NomeBebida" id="CampoNome" placeholder="Digite o Nome" required>
                    <br>
                    <label for="CampoQuantidade">Quantidade</label>
                    <input type="number" name="QuantidadeBebida" id="CampoQuantidade">
                    <br>
                    <label for="CampoValor">Valor(Unidade)</label>
                    <input type="text" name="ValorBebida" id="CampoValor" placeholder="Digite o Valor do Produto" required>
                    <br>
                    <label for="CampoMarca">Marca</label>
                    <input type="text" name="MarcaBebida" id="CampoMarca" placeholder="Digite a Marca" required>
                    <br>
                    <label for="CampoLitros">Litros</label>
                    <input type="number" name="LitrosBedida" id="CampoLitros">
                    <br>
                    <label for="CampoSabor">Sabor</label>
                    <input type="text" name="SaborBebida" id="CampoSabor" placeholder="Digite o Sabor" required>
                    <br>
                    <input type="submit" value="Enviar">
                
                    <?php

                }if($RS == "Enfeite"){

                    ?>
                    <br>
                    <label for="CampoNome">Nome</label>
                    <input type="text" name="NomeEnfeite" id="CampoNome" placeholder="Digite o Nome" required>
                    <br>
                    <label for="CampoQuantidade">Quantidade</label>
                    <input type="number" name="QuantidadeEnfeite" id="CampoQuantidade">
                    <br>
                    <label for="CampoValor">Valor(Unidade)</label>
                    <input type="text" name="ValorEnfeite" id="CampoValor" placeholder="Digite o Valor do Produto" required>
                    <br>
                    <label for="CampoCor">Cor</label>
                    <input type="text" name="CorEnfeite" id="CampoCor" required>
                    <br>
                    
                    <?php

                }if($RS == "Alimento"){

                    ?>
                    <br>
                    <label for="CampoNome">Nome</label>
                    <input type="text" name="NomeAlimento" id="CampoNome" placeholder="Digite o Nome" required>
                    <br>
                    <label for="CampoQuantidade">Quantidade</label>
                    <input type="number" name="QuantidadeAlimento" id="CampoQuantidade">
                    <br>
                    <label for="CampoValor">Valor(Unidade)</label>
                    <input type="text" name="ValorAlimento" id="CampoValor" placeholder="Digite o Valor do Produto" required>
                    <br>
                    <label for="CampoMedida">Medida</label>
                    <input type="text" name="MedidoAlimento" id="CampoMedida" placeholder="Digite a Medida" required>
                    <br>
                    <label for="CampoSabor">Sabor</label>
                    <input type="text" name="SaborAlimento" id="CampoSabor" placeholder="Digite o Sabor" required>
                    <br>
                    <label for="CampoRecheio">Recheio</label>
                    <input type="text" name="RecheioAlimento" id="CampoRecheio" placeholder="Digite o Recheio" required>

                    <?php
                }

            }    
                ?>

        </div>

    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>