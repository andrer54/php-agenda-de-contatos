<?php
//ob_start();
session_start();
if($_SESSION['login'] == "andre"){

require_once "connect.php";

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email= $_POST['email'];
$telefone = $_POST['telefone'];


$query="INSERT INTO clientes(id, nome, sobrenome, email, Telefone) VALUES(null, '$nome', '$sobrenome', '$email', '$telefone')";
mysqli_query($conexao, $query);

header("Location: listar.php");

}else{
    echo "sem permissoes para acessar a pagina.";
}
?>