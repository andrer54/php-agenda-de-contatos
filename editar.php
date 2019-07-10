<?php
ob_start();
session_start();
if($_SESSION['login'] == "andre"){
?>
<?php

$conexao = mysqli_connect("localhost", "root") or die ("Não pude conectar: ".mysql_error()); //usuario e senha do msql
$base = mysqli_select_db($conexao, "infpessoais") or die ("Não pude selecionar o banco de dados");

$id=$_POST['id'];
$nome=$_POST['nome'];
$telefone=$_POST['telefone'];

$query="UPDATE informacoes SET nome='$nome', telefone='$telefone' WHERE id_contato='$id'";
mysqli_query($conexao, $query);
header ("Location: listar.php");

?>
       
<?php
}else{
    echo "sem permissoes para acessar a pagina.";
}
?>