<?php
ob_start();
session_start();
if($_SESSION['login'] == "andre"){
?>
<?php
header ("Location: listar.php");
$conexao = mysqli_connect("localhost", "root") or die ("Não pude conectar: ".mysql_error()); //usuario e senha do msql
$base = mysqli_select_db($conexao, "infpessoais") or die ("Não pude selecionar o banco de dados");
$id=$_GET['id'];
$query="DELETE FROM informacoes WHERE id_contato='$id'";
mysqli_query($conexao, $query);


?>
       
<?php
}else{
    echo "sem permissoes para acessar a pagina.";
}
?>