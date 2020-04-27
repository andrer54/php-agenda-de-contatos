<?php
//ob_start();
session_start();
if($_SESSION['login']=="andre") {
?>

<!DOCTYPE html>
<html>

    <title>Agenda de Contatos</title>

</head>
<body>
    <Table align="center" cellpadding="5" border="1" width="800" height="470">
        <tr><td><b>Bem vindo! <?php echo $_SESSION['login']; ?></b>Data: <?php echo $_SESSION['data_login']; ?></td><td height="10"><a href="form_inserir.php"
        target="principal">Inserir</a> | <a href="deslogar.php">SAIR</a></td></tr><tr>
            <td colspan="2">
                <iframe src="listar.php" width="800" heigth="450" name="principal"></iframe>
            </td>
</tr>
</table>
</body>
</html>
<?php 

} else {
    echo "Sem permissões para acessar a página!";
}
?>