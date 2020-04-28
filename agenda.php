<?php
//ob_start();
session_start();
if ($_SESSION['login'] == "andre") {
?>

    <!DOCTYPE html>
    <html>

    <title>Agenda de Contatos</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    </head>

    <body>
        <nav>
            <div class="nav-wrapper">
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li><a href="agenda.php"><?php echo $_SESSION['login'] . " , seja bem vindo! !!! "; ?></b>Data: <?php echo $_SESSION['data_login']; ?></a></li>
                </ul>
                <a href="#" class="brand-logo center">Agenda de Contatos</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="source/form_inserir.php" class="waves-effect waves-light btn" target="principal">Inserir contato</a></li>
                    <li><a href="source/deslogar.php" class="btn-floating btn-large waves-effect waves-light black">Sair do sistema</a></li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <br><br>

            <embed src="source/listar.php" width=100% height=800 name="principal" />
        </div>


    </body>

    </html>
<?php

} else {
    echo "Sem permissões para acessar a página!";
}
?>