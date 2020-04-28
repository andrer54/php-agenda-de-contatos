<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Agenda de Contatos</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body style="height:500">


    <?php

    session_start();
    if ($_SESSION['login'] == "andre") {

        //    https: //databases.000webhost.com
        /* $conexao = mysqli_connect("localhost", "id7183299_admin","Relogio*") or die("não pude conectar: ".mysql_error());
        $base=mysqli_select_db($conexao , "id7183299_master") or die ("Não pude selecionar banco de dados"); */
        $conexao = mysqli_connect("localhost", "andre", "12345") or die("não pude conectar: "->mysqli_error());
        $base = mysqli_select_db($conexao, "crud-teste") or die("Não pude selecionar banco de dados");

        $query = "SELECT * FROM clientes";
        $resultado = mysqli_query($conexao, $query); ?>
        <div style="height:500">
            <table class="striped" style="height:100%">
                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
                <?php

                while ($linha = mysqli_fetch_row($resultado)) {
                ?>


                    <tr>

                        <td><?php echo $linha[1]; ?></td>
                        <td><?php echo $linha[2]; ?></td>
                        <td><?php echo $linha[3]; ?></td>
                        <td><?php echo $linha[4]; ?></td>
                        <td><a href="form_editar.php?id=<?php echo $linha[0]; ?>" class="btn-small orange"><i class="material-icons">edit</i></td>
                        <td><a href="excluir.php?id=<?php echo $linha[0]; ?>" class="btn-small red"><i class="material-icons">delete</i></td>
                    </tr>


            <?php
                }
            } else {
                echo "Sem permissões para acessar a página!";
            }
            ?>

            </table><br>
            <center>
            <a href="form_inserir.php" class="waves-effect waves-light btn-large">Inserir novo contato</a>
   
            </center>
              </div>

</body>

</html>