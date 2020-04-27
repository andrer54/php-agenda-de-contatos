<?php
//ob_start();
session_start();
if($_SESSION['login'] == "andre"){
?>
<?php

$conexao = mysqli_connect("localhost", "andre", '12345') or die ("Não pude conectar: "); //usuario e senha do msql
$base = mysqli_select_db($conexao, "crud-teste") or die ("Não pude selecionar o banco de dados");

$id=$_POST['id'];
$nome=$_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$telefone=$_POST['telefone'];


$query="UPDATE clientes SET nome='$nome', sobrenome='$sobrenome', email='$email', Telefone='$telefone' WHERE id='$id'";
mysqli_query($conexao, $query);
header ("Location: listar.php");

?>
       
<?php
}else{
    echo "sem permissoes para acessar a pagina.";
}
?>