<?php
//ob_start();
session_start();
if($_SESSION['login'] == "andre"){


require_once "connect.php";
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