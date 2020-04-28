<?php
//ob_start();
session_start();
if($_SESSION['login'] == "andre"){


$conexao = mysqli_connect("localhost", "andre", "12345") or die ("Não pude conectar: ".mysql_error()); //usuario e senha do msql
$base = mysqli_select_db($conexao, "crud-teste") or die ("Não pude selecionar o banco de dados");
$id=$_GET['id'];
$query="DELETE FROM clientes WHERE id='$id'";
mysqli_query($conexao, $query);



header ("Location: listar.php");
?>
       
<?php
}else{
    echo "sem permissoes para acessar a pagina.";
}
?>