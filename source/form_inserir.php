 <!-- Compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<?php
//ob_start();
session_start();
if ($_SESSION['login'] == "andre") {
?>

    <div class="container">
        <form name="email" method="POST" action="inserir.php">
            <tr>
                <td>Nome:<input type="text" name="nome"></td>
                <td>SobreNome: <input type="text" name="sobrenome" id=""></td>
                <td>E-mail:<input type="text" name="email"></td>
                <td>Tel:<input type="text" name="telefone"></td>

            </tr>
            <button class="waves-effect waves-light btn" type="submit" value="Salvar"> Salvar </button>
    <a href="listar.php" class="waves-effect waves-light btn red">Cancelar</a>
            
        </form>

        <a href="listar.php">Cancelar</a>
    </div>

<?php
} else {
    echo "Sem permissões para adicionar ou acessar a página!";
}
?>