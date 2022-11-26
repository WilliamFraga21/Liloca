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

    <div class="container mt-3 mb-3">
        <div class="title">
            <h1>Consulta</h1>
        </div>
        <form action="" method="POST">
            <div class="form-group">
                <div class="form-group">
                    <select name="Produto" id="CampoProduto" class="form-control">
                        <option selected disabled value="">Escolha um tipo de consulta</option>
                        <option value="CON1">Produtos</option>
                        <option value="CON2">Alimentos</option>
                        <option value="CON3">Enfeites</option>
                        <option value="CON4">Bebidas</option>
                        <option value="CON5">Cliente</option>
                        <option value="CON6">Aniversariante</option>
                        <option value="CON7">Pedido</option>
                    </select>
                    <input type="submit" class="btn btn-primary mb-2 mt-2" value="Enviar">
                </div>

                <?php
                if (!empty($_POST['Produto'])) {

                    $RS = $_POST["Produto"];
                    require_once 'conectaBD.php';
                    if ($RS == "CON1") {

                        $lista = [];
                        $sql = $conn->query("select * from produtos");
                        if ($sql->rowCount() > 0) {
                            $lista = $sql->fetchALL(PDO::FETCH_ASSOC);
                        }
                ?>
                        <div>
                            <h2>Produtos</h2>
                            <table border="1" class="table table-striped text-center">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Quantidade</th>
                                        <th>Valor</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>
                                <?php foreach ($lista as $produtos) { ?>

                                    <tr>
                                        <td><?= $produtos['idProdutos']; ?></td>
                                        <td><?= $produtos['Nome']; ?></td>
                                        <td><?= $produtos['Quantidade']; ?></td>
                                        <td><?= $produtos['Valor']; ?></td>
                                        <td>
                                            <a class="btn btn-primary" href="Crud/EditarProduto.php?id=<?= $produtos['idProdutos']; ?>"><i class="fa fa-pencil-square-o"></i></a>
                                            <a class="btn btn-danger" href="Crud/ExcluirProduto.php?id=<?= $produtos['idProdutos']; ?>"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>


                                <?php
                                }   ?>


                            </table>
                        </div>

                    <?php
                    }
                    if ($RS == "CON2") {

                        $lista = [];
                        $sql = $conn->query("select produtos.Nome,alimentos.idAlimentos,alimentos.Medida,alimentos.Recheio,alimentos.Sabor
                    from alimentos
                    inner join produtos on produtos.idProdutos = alimentos.Produtos_idProdutos;");
                        if ($sql->rowCount() > 0) {
                            $lista = $sql->fetchALL(PDO::FETCH_ASSOC);
                        }


                    ?>
                        <div>
                            <h2>Alimentos</h2>
                            <table border="1" class="table table-striped text-center">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Medida</th>
                                        <th>Recheio</th>
                                        <th>Sabor</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>
                                <?php foreach ($lista as $produtos) { ?>
                                    <tr>
                                        <td><?= $produtos['idAlimentos']; ?></td>
                                        <td><?= $produtos['Nome']; ?></td>
                                        <td><?= $produtos['Medida']; ?></td>
                                        <td><?= $produtos['Recheio']; ?></td>
                                        <td><?= $produtos['Sabor']; ?></td>
                                        <td>
                                            <a class="btn btn-primary" href="Crud/EditarAlimento.php?id=<?= $produtos['idAlimentos']; ?>"><i class="fa fa-pencil-square-o"></i></a>
                                            <a class="btn btn-danger" href="Crud/ExcluirAlimento.php?id=<?= $produtos['idAlimentos']; ?>"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>


                                <?php
                                }   ?>


                            </table>
                        </div>


                    <?php

                    }
                    if ($RS == "CON3") {

                        $lista = [];
                        $sql = $conn->query("select enfeites.idEnfeites,produtos.Nome,enfeites.Cor
                    from enfeites
                    inner join produtos on produtos.idProdutos = enfeites.Produtos_idProdutos;");
                        if ($sql->rowCount() > 0) {
                            $lista = $sql->fetchALL(PDO::FETCH_ASSOC);
                        }


                    ?>
                        <div>
                            <h2>Enfeites</h2>
                            <table border="1">
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Cor</th>

                                    <th>Ação</th>
                                </tr>

                                <?php foreach ($lista as $produtos) { ?>

                                    <tr>
                                        <td><?= $produtos['idEnfeites']; ?></td>
                                        <td><?= $produtos['Nome']; ?></td>
                                        <td><?= $produtos['Cor']; ?></td>

                                        <td>
                                            <a class="btn btn-primary" href="Crud/EditarEnfeite.php?id=<?= $produtos['idEnfeites']; ?>"><i class="fa fa-pencil-square-o"></i></a>
                                            <a class="btn btn-danger" href="Crud/ExcluirEnfeite.php?id=<?= $produtos['idEnfeites']; ?>"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>


                                <?php
                                }   ?>


                            </table>
                        </div>

                    <?php
                    }
                    if ($RS == "CON4") {

                        $lista = [];
                        $sql = $conn->query("select bebidas.idBebidas,produtos.Nome,bebidas.Litros,bebidas.Marca,bebidas.Sabor
                    from bebidas
                    inner join produtos on produtos.idProdutos = bebidas.Produtos_idProdutos;");
                        if ($sql->rowCount() > 0) {
                            $lista = $sql->fetchALL(PDO::FETCH_ASSOC);
                        }

                    ?>
                        <div>
                            <h2>Bebidas</h2>
                            <table border="1">
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Litros</th>
                                    <th>Marca</th>
                                    <th>Sabor</th>
                                    <th>Ação</th>
                                </tr>

                                <?php foreach ($lista as $produtos) { ?>

                                    <tr>
                                        <td><?= $produtos['idBebidas']; ?></td>
                                        <td><?= $produtos['Nome']; ?></td>
                                        <td><?= $produtos['Litros']; ?></td>
                                        <td><?= $produtos['Marca']; ?></td>
                                        <td><?= $produtos['Sabor']; ?></td>
                                        <td>
                                            <a class="btn btn-primary" href="Crud/EditarBebida.php?id=<?= $produtos['idBebidas']; ?>"><i class="fa fa-pencil-square-o"></i></a>
                                            <a class="btn btn-danger" href="Crud/ExcluirBebida.php?id=<?= $produtos['idBebidas']; ?>"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>


                                <?php
                                }   ?>

                            </table>
                        </div>

                    <?php
                    }
                    if ($RS == "CON5") {

                        $lista = [];
                        $sql = $conn->query("select * from cliente");
                        if ($sql->rowCount() > 0) {
                            $lista = $sql->fetchALL(PDO::FETCH_ASSOC);
                        }

                    ?>
                        <div>
                            <h2>Clientes</h2>
                            <table border="1">
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>CPF</th>
                                    <th>Telefone</th>
                                    <th>E-mail</th>
                                    <th>Senha</th>
                                    <th>Ação</th>
                                </tr>

                                <?php foreach ($lista as $produtos) { ?>

                                    <tr>
                                        <td><?= $produtos['idCliente']; ?></td>
                                        <td><?= $produtos['Nome']; ?></td>
                                        <td><?= $produtos['CPF']; ?></td>
                                        <td><?= $produtos['Telefone']; ?></td>
                                        <td><?= $produtos['Email']; ?></td>
                                        <td><?= $produtos['Senha']; ?></td>
                                        <td>
                                            <a class="btn btn-primary" href="Crud/EditarCliente.php?id=<?= $produtos['idCliente']; ?>"><i class="fa fa-pencil-square-o"></i></a>
                                            <a class="btn btn-danger" href="Crud/ExcluirCliente.php?id=<?= $produtos['idCliente']; ?>"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>


                                <?php
                                }   ?>

                            </table>
                        </div>

                    <?php
                    }
                    if ($RS == "CON6") {

                        $lista = [];
                        $sql = $conn->query("select cliente.Nome as CNome,aniversariante.Nome,aniversariante.Cores,aniversariante.Data_Festa,aniversariante.Idade,aniversariante.idAniversariante,aniversariante.Tema
                    from aniversariante
                    inner join cliente on cliente.idCliente = aniversariante.Cliente_idCliente;");
                        if ($sql->rowCount() > 0) {
                            $lista = $sql->fetchALL(PDO::FETCH_ASSOC);
                        }
                    ?>
                        <div>
                            <h2>Aniversariantes</h2>
                            <table border="1">
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Idade</th>
                                    <th>Tema</th>
                                    <th>Cores</th>
                                    <th>Data Da Festa</th>
                                    <th>Nome Do Cliente</th>
                                    <th>Ação</th>
                                </tr>

                                <?php foreach ($lista as $produtos) { ?>

                                    <tr>
                                        <td><?= $produtos['idAniversariante']; ?></td>
                                        <td><?= $produtos['Nome']; ?></td>
                                        <td><?= $produtos['Idade']; ?></td>
                                        <td><?= $produtos['Tema']; ?></td>
                                        <td><?= $produtos['Cores']; ?></td>
                                        <td><?= $produtos['Data_Festa']; ?></td>
                                        <td><?= $produtos['CNome']; ?></td>
                                        <td>
                                            <a class="btn btn-primary" href="Crud/EditarAniversariante.php?id=<?= $produtos['idAniversariante']; ?>"><i class="fa fa-pencil-square-o"></i></a>
                                            <a class="btn btn-danger" href="Crud/ExcluirAniversariante.php?id=<?= $produtos['idAniversariante']; ?>"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>


                                <?php
                                }   ?>

                            </table>
                        </div>

                    <?php
                    }
                    if ($RS == "CON7") {

                        $lista = [];
                        $sql = $conn->query("select pedido.Data_Entrega, pedido.Data_Pedido, pedido.End_Do_Cliente_Entrega, pedido.Frete ,pedido.Prozo_de_Entrega, pedido.Tipo_Da_Entrega, pedido.Valor_A_Pagar, pedido.Valor_Pedido, pedido.Valor_Sinal ,pedido.idPedido,aniversariante.Nome as ANome
                    from pedido
                    inner join aniversariante on aniversariante.idAniversariante = pedido.Aniversariante_idAniversariante;");
                        if ($sql->rowCount() > 0) {
                            $lista = $sql->fetchALL(PDO::FETCH_ASSOC);
                        }

                    ?>
                        <div>
                            <h2>Pedidos</h2>
                            <table border="1">
                                <tr>
                                    <th>ID</th>
                                    <th>Endereço do Cliente</th>
                                    <th>Tipo Da Entrega</th>
                                    <th>Frete</th>
                                    <th>Valor do Pedido</th>
                                    <th>Valor do Sinal</th>
                                    <th>Valor A Pagar</th>
                                    <th>Prazo de Entrega</th>
                                    <th>Data do Pedido</th>
                                    <th>Data da Entrega</th>
                                    <th>Nome do Aniversariante</th>

                                    <th>Ação</th>
                                </tr>

                                <?php foreach ($lista as $produtos) { ?>

                                    <tr>
                                        <td><?= $produtos['idPedido']; ?></td>
                                        <td><?= $produtos['End_Do_Cliente_Entrega']; ?></td>
                                        <td><?= $produtos['Tipo_Da_Entrega']; ?></td>
                                        <td><?= $produtos['Frete']; ?></td>
                                        <td><?= $produtos['Valor_Pedido']; ?></td>
                                        <td><?= $produtos['Valor_Sinal']; ?></td>
                                        <td><?= $produtos['Valor_A_Pagar']; ?></td>
                                        <td><?= $produtos['Prozo_de_Entrega']; ?></td>
                                        <td><?= $produtos['Data_Pedido']; ?></td>
                                        <td><?= $produtos['Data_Entrega']; ?></td>
                                        <td><?= $produtos['ANome']; ?></td>
                                        <td>
                                            <a class="btn btn-primary" href="Crud/EditarPedido.php?id=<?= $produtos['idPedido']; ?>"><i class="fa fa-pencil-square-o"></i>
                                            </a>
                                            <a class="btn btn-danger" href="Crud/ExcluirPedido.php?id=<?= $produtos['idPedido']; ?>"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>


                                <?php
                                }   ?>


                            </table>
                        </div>

                <?php
                    }
                }
                ?>


            </div>

        </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>