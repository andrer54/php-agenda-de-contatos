<?php
//ob_start();
session_start();
if ($_SESSION['login'] == "andre") {
?>

    <div align="center" border="1">
        <form name="email" method="POST" action="inserir.php">
            <tr>
                <td>Nome:<input type="text" name="nome"></td>
                <td>SobreNome: <input type="text" name="sobrenome" id=""></td>
                <td>E-mail:<input type="text" name="email"></td>
                <td>Tel:<input type="text" name="telefone"></td>

            </tr>
            <input type="submit" value="inserir">
        </form>
    </div>

<?php
} else {
    echo "Sem permissões para adicionar ou acessar a página!";
}
?>