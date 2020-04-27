<?php
ob_start();
session_start();
if($_SESSION['login'] == "andre"){
?>
<?php


$conexao = mysqli_connect("localhost", "andre", "12345") or die("não pude conectar: "->mysqli_error());
$base = mysqli_select_db($conexao, "crud-teste") or die("Não pude selecionar banco de dados");

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];

$query="INSERT INTO informacoes(id_contato, nome, telefone) VALUES(null, '$nome', '$telefone')";
mysqli_query($conexao, $query);

header("Location: listar.php");

}else{
    echo "sem permissoes para acessar a pagina.";
}
?>