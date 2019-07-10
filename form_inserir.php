<?php
ob_start();
session_start();
if($_SESSION['login'] == "andre"){
?>

<table align="center" border="1">
    <form name="email" method="POST" action="inserir.php">
        <tr><td>Nome:</td><input type="text" name="nome"></td></tr>
        <tr><td>Tel:</td><input type="text" name="telefone"></td></tr>
        <tr><td><input type="submit" value="inserir"></td></tr>
</form>
</table>

<?php
}else {
    echo "Sem permissões para adicionar ou acessar a página!";
}
?>