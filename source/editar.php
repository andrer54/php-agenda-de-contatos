<?php
//ob_start();
session_start();
if($_SESSION['login'] == "andre"){

require_once "connect.php";

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