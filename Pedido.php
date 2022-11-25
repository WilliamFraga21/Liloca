<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Document</title>
</head>

<body>

    <div class="topo1">
        <h1>Confeitario Liloca</h1>
    </div>
    <nav class="nav">

        <ul class="Menu1">
            <li>
                <a class="Homee" href="index.html">Home</a>
            </li>

            <li>
                <a class="MSobre" href="Sobre.html">Sobre nós</a>
            </li>
            <li>
                <a class="MBolos" href="Bolos.html">Bolos</a>
            </li>
            <li>
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
        <h2>Aniversariante</h2>

        <div>
            <select name="selectPedidos" id="CampoPedido">
                <option value="Aniversariante">Aniversariante</option>
                <option value="Pedido">Pedido</option>
            </select>
            <input type="submit" value="Enviar">
        </div>
    </form>


    <?php

    if (!empty($_POST['selectPedidos'])) {
        $RS = $_POST['selectPedidos'];
        if ($RS == 'Aniversariante') { ?>

            <form action="processos/queryAniversariante.php" method="POST">

                <select name="idCliente" id="">
                    <option value="">
                        <?php
                        require_once 'conectaBD.php';
                        $consulta = $conn->query("SELECT * from Cliente");


                        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                            <option value="<?php echo $linha['idCliente'] ?>"> <?php echo $linha['Nome'] . '-' . $linha['CPF'] . "<br/>" ?> </option> <?php ;
                        }?>
                </option>
                </select>

                <br>
                <label for="CampoNome">Nome</label>
                <input type="text" name="NomeAniversariante" id="CampoNome" placeholder="Digite o Nome do Aniversariante" required>
                <br>
                <label for="CampoIdade">Idade</label>
                <input type="number" name="IdadeAniversariante" id="CampoIdade" required>
                <br>
                <label for="CampoTema">Tema</label>
                <input type="text" name="TemaAniversariante" id="CampoTema" placeholder="Digite o Tema" required>
                <br>
                <label for="CampoCor">Cor Da Festa</label>
                <input type="text" name="CorFestaAniversariante" id="CampoCor" placeholder="Digite a Cor" required>
                <br>
                <label for="CampoDataFesta">Data da Festa</label>
                <input type="date" name="DataFestaAniversariante" id="CampoDataFesta" placeholder="Digite a data da festa" required>
                <br>
                <input type="submit" value="Enviar">


            </form> <?php

        }if ($RS == 'Pedido') {  ?>

            <form action="processos/queryPedido.php" method="POST">

            <select name="idAniversariante" id="">
                    <option value="">
                        <?php
                        require_once 'conectaBD.php';
                        $consulta = $conn->query("SELECT * from aniversariante ");


                        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                            <option value="<?php echo $linha['idAniversariante'] ?>"> <?php echo $linha['Nome'] . "<br/>" ?> </option> <?php ;
                        }?>
                </option>
                </select>
                <br>
                <label for="CampoDataEntrega">DataEntrega</label>
                <input type="date" name="DataEntregaPedido" id="CampoDataEntrega" placeholder="Digite o Dia da entrega" required>
                <br>
                <label for="CampoTipoEntrega">Tipo da Entrega</label>
                <input type="text" name="TipoEntregaPedido" id="CampoTipoEntrega" placeholder="Digite o Tipo de entrega" required>
                <br>
                <label for="CampoPrazoEntrega">Prazo da Entrega</label>
                <input type="date" name="PrazoEntregaPedido" id="CampoPrazoEntrega" placeholder="Digite o Prazo da Entrega" required>
                <br>
                <label for="CampoFrete">Frete</label>
                <input type="text" name="FretePedido" id="CampoFrete" placeholder="Digite o Frete" required>
                <br>
                <label for="CampoEndEntrega">Endereço da Entrega</label>
                <input type="text" name="EndEntregaPedido" id="CampoEndEntrega" required>
                <br>
                <label for="CampoValorPedido">Valor do Pedido</label>
                <input type="text" name="ValorPedido" id="CampoValorPedido" placeholder="Digite o Valor do Pedido" required>
                <br>
                <label for="CampoSinal">Sinal do Pedido</label>
                <input type="text" name="SinalPedido" id="CampoSinal" placeholder="Digite o Sinal do Pedido" required>
                <br>
                <label for="CampoValorAPagar">Valor A Pagar</label>
                <input type="text" name="ValorAPagarPedido" id="CapoValorAPagar" placeholder="Digite o Valor a Pagar" required>
                <br>
                <input type="submit" value="Enviar">


            </form>

    <?php
        }
    }?>

</body>

</html>