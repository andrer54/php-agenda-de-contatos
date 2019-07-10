<?php
ob_start();
session_start();
if($_SESSION['login'] == "andre"){
?>
<?php

// PDO + MySQL
//$pdo = new PDO('mysql:host=localhost;dbname=infpessoais', 'root', '');
//$statement = $pdo->query("SELECT * FROM informacoes");
//$row = $statement->fetch(PDO::FETCH_ASSOC);
//echo htmlentities($row['nome']);

https://databases.000webhost.com


$conexao = mysqli_connect("localhost", "id7183299_admin","Relogio1") or die("não pude conectar: ".mysql_error());
$base=mysqli_select_db($conexao , "id7183299_master") or die ("Não pude selecionar banco de dados");
?>

<table align="center" border="1" cellspacing="0" cellpadding="0" bordercolor="#000000">
    <tr align="center" bgcolor="#778899"><td><center><b><font color="#FFFFFF" size="-1">id</font></b></center></td><td><center>b<font color="#FFFFFF" size="-1">nome
</b></center></td><td><center><b><font color="#FFFFFFF" size="-1">Telefone</font></b></center></td></tr>

<?php
$query="SELECT * FROM informacoes";

$resultado=mysqli_query($conexao, $query);

while ($linha=mysqli_fetch_row($resultado))

{
    ?>

    <tr bgcolor="#D6D3D3">
        <td><?php echo $linha[0]; ?></td>
        <td><?php echo $linha[1]; ?></td>
        <td><?php echo $linha[2]; ?></td>
        <td><a href="form_editar.php?id=<?php echo $linha[0]; ?>">Editar</td>
        <td><a href="excluir.php?id=<?php echo $linha[0]; ?>">Excluir</td>
</tr>

<?php
}?> </table>
<?php
}else{
    echo "Sem permissões para acessar a página!";
}
?>