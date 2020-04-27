<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
ob_start();
session_start();
if ($_SESSION['login'] == "andre") {

    //    https: //databases.000webhost.com


    $conexao = mysqli_connect("localhost", "andre", "12345") or die("não pude conectar: "->mysqli_error());
    $base = mysqli_select_db($conexao, "crud-teste") or die("Não pude selecionar banco de dados");

    $query = "SELECT * FROM clientes";
    $resultado = mysqli_query($conexao, $query); ?>
    <div>
        <table>
            <tr>
                <th>id</th>
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
                    <td><?php echo $linha[0]; ?></td>
                    <td><?php echo $linha[1]; ?></td>
                    <td><?php echo $linha[2]; ?></td>
                    <td><?php echo $linha[3]; ?></td>
                    <td><?php echo $linha[4]; ?></td>
                    <td><a href="form_editar.php?id=<?php echo $linha[0]; ?>">Editar</td>
                    <td><a href="excluir.php?id=<?php echo $linha[0]; ?>">Excluir</td>
                </tr>


        <?php
            }
        } else {
            echo "Sem permissões para acessar a página!";
        }
        ?>

        </table>
    </div>

    </body>
</html>