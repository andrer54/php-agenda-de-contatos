<?php
//ob_start();
session_start();
if($_SESSION['login'] == "andre"){
?>
<?php


$conexao = mysqli_connect("localhost", "andre", '12345') or die ("Não pude conectar: "->mysqli_error()); //usuario e senha do msql
$base = mysqli_select_db($conexao, "crud-teste") or die ("Não pude selecionar o banco de dados: ");//->mysqli_error());
$id=$_GET['id'];

$query="SELECT * FROM clientes WHERE id=$id";
$resultado=mysqli_query($conexao, $query);
$linha=mysqli_fetch_row($resultado);



?>
<div>
    <form name= "editar" action="editar.php" method="post">
    Nome: <input type="text" name="nome" id="" value="<?php echo $linha[1]; ?>">
    sobrenome <input type="text" name="sobrenome" id="" value="<?php echo $linha[2]; ?>">
    email <input type="text" name="email" id="" value="<?php echo $linha[3]; ?>">
    telefone: <input type="text" name="telefone" id="" value="<?php echo $linha[4]; ?>">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="submit" value="Editar">
</form>
</div>

      
<?php
}else{
    echo "sem permissoes para acessar a pagina.";
}
?>