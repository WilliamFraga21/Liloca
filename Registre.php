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


    <form action="Processos/queryRegistre.php" method="POST">



        <div>
            <h2>Registre</h2>

            <div>
                <label for="CampoNome">Nome</label>
                <input type="text" name="Nome" id="CampoNome" placeholder="Digite seu Nome aqui" required>
            </div>
            <br>
            <div>
                <label for="CampoSenha">Senha</label>
                <input type="password" name="Senha" id="CampoSenha" placeholder="Digite a Senha" required>
            </div>
            <br>
            <div>
                <label for="CampoEmail">Email</label>
                <input type="email" name="Email" id="CampoEmail" placeholder="Digite seu Email" required>
            </div>
            <br>
            <div>
                <label for="CampoTel">Telefone</label>
                <input type="tel" name="Tel" id="CampoTel" placeholder="Digite seu Telefone" required>
            </div>
            <br>
            <div>
                <label for="CampoCPF">CPF</label>
                <!-- <input type="number" name="" id="CampoCPF" placeholder="Digite seu CPF" required> -->
                <input type="text" name="CPF" \ pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" \ placeholder="xxx.xxx.xxx-xx">
                <input type="submit" value="Verificar">
            </div>
            <br>
            <div>
                <input type="submit" value="Enviar">
            </div>
        </div>


    </form>


</body>

</html>