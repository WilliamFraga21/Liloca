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

    <section class="container mt-3 mb-3">
        <h2 class="title mb-3 mt-3">Aniversariante</h2>
        <form class="" action="" method="POST">
            <div class="form-group">

                <div>
                    <select name="selectPedidos" id="CampoPedido" class="form-control mb-3">
                        <option value="Aniversariante">Aniversariante</option>
                        <option value="Pedido">Pedido</option>
                    </select>
                    <input class="btn btn-primary mb-2" type="submit" value="Enviar">
                </div>
            </div>
        </form>


        <?php

        if (!empty($_POST['selectPedidos'])) {
            $RS = $_POST['selectPedidos'];
            if ($RS == 'Aniversariante') { ?>

                <form action="processos/queryAniversariante.php" method="POST">
                    <div class="form-group">
                        <label for="">Cliente</label>
                        <select name="idCliente" id="" class="form-control">
                            <option value="">--Selecione o Cliente--</option>
                            <?php
                            require_once 'conectaBD.php';
                            $consulta = $conn->query("SELECT * from cliente");
                            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                                <option value="<?php echo $linha['idCliente'] ?>"> <?php echo $linha['Nome'] . ' - ' . $linha['CPF'] ?> </option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>



                    <br>
                    <label for="CampoNome">Nome</label>
                    <input type="text" name="NomeAniversariante" id="CampoNome" class="form-control" placeholder="Digite o Nome do Aniversariante" required>
                    <br>
                    <label for="CampoIdade">Idade</label>
                    <input type="number" name="IdadeAniversariante" class="form-control" id="CampoIdade" required>
                    <br>
                    <label for="CampoTema">Tema</label>
                    <input type="text" name="TemaAniversariante" id="CampoTema" class="form-control" placeholder="Digite o Tema" required>
                    <br>
                    <label for="CampoCor">Cor Da Festa</label>
                    <input type="text" name="CorFestaAniversariante" id="CampoCor" class="form-control" placeholder="Digite a Cor" required>
                    <br>
                    <label for="CampoDataFesta">Data da Festa</label>
                    <input type="date" name="DataFestaAniversariante" id="CampoDataFesta" class="form-control" placeholder="Digite a data da festa" required>
                    <br>
                    <input type="submit" class="btn btn-primary mb-2" value="Enviar">


                </form> <?php

                    }
                    if ($RS == 'Pedido') {  ?>

                <form action="processos/queryPedido.php" method="POST">
                    <div class="form-group">

                    </div>

                    <select name="idAniversariante" id="" class="form-control">
                        <option value="">--Selecione o Aniversariante--</option>
                        <?php
                        require_once 'conectaBD.php';
                        $consulta = $conn->query("SELECT * from aniversariante");


                        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                            <option value="<?php echo $linha['idAniversariante'] ?>"> <?php echo $linha['Nome'] . "<br/>" ?> </option> 
                        <?php
                        }
                        ?>
                    </select>
                    <br>
                    <label for="CampoDataEntrega">DataEntrega</label>
                    <input type="date" name="DataEntregaPedido" id="CampoDataEntrega" class="form-control" placeholder="Digite o Dia da entrega" required>
                    <br>
                    <label for="CampoTipoEntrega">Tipo da Entrega</label>
                    <input type="text" name="TipoEntregaPedido" id="CampoTipoEntrega" class="form-control" placeholder="Digite o Tipo de entrega" required>
                    <br>
                    <label for="CampoPrazoEntrega">Prazo da Entrega</label>
                    <input type="date" name="PrazoEntregaPedido" id="CampoPrazoEntrega" class="form-control" placeholder="Digite o Prazo da Entrega" required>
                    <br>
                    <label for="CampoFrete">Frete</label>
                    <input type="text" name="FretePedido" id="CampoFrete" class="form-control" placeholder="Digite o Frete" required>
                    <br>
                    <label for="CampoEndEntrega">Endereço da Entrega</label>
                    <input type="text" name="EndEntregaPedido" id="CampoEndEntrega" class="form-control" required>
                    <br>
                    <label for="CampoValorPedido">Valor do Pedido</label>
                    <input type="text" name="ValorPedido" id="CampoValorPedido" class="form-control" placeholder="Digite o Valor do Pedido" required>
                    <br>
                    <label for="CampoSinal">Sinal do Pedido</label>
                    <input type="text" name="SinalPedido" id="CampoSinal" class="form-control" placeholder="Digite o Sinal do Pedido" required>
                    <br>
                    <label for="CampoValorAPagar">Valor A Pagar</label>
                    <input type="text" name="ValorAPagarPedido" id="CapoValorAPagar" class="form-control" placeholder="Digite o Valor a Pagar" required>
                    <br>
                    <input type="submit" class="btn btn-primary mb-2" value="Enviar">


                </form>

        <?php
                    }
                } ?>
    </section>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>