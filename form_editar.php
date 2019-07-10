<?php
ob_start();
session_start();
if($_SESSION['login'] == "andre"){
?>
<?php


$conexao = mysqli_connect("localhost", "root") or die ("Não pude conectar: ".mysql_error()); //usuario e senha do msql
$base = mysqli_select_db($conexao, "infpessoais") or die ("Não pude selecionar o banco de dados".mysql_error());
$id=$_GET['id'];

$query="SELECT * FROM informacoes WHERE id_contato='$id'";
$resultado=mysqli_query($conexao, $query);
$linha=mysqli_fetch_row($resultado);

?>

<table>
    <form name="telefone" method="POST" action="editar.php">
        <tr><td>Nome: </td><td><input type="text" name="nome" value="<?php echo $linha[1]; ?>"></td></tr>
        <tr><td>Tel: </td><td><input type="text" name="telefone" value="<?php echo $linha[2]; ?>"></td></tr>
        <tr><td><input type="hidden" name="id" value="<?php echo $id; ?>"><input type="submit" value="Editar"></td></tr>
</form>
</table>        
<?php
}else{
    echo "sem permissoes para acessar a pagina.";
}
?>