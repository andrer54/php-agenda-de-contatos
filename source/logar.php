<?php
//ob_start();

$logar = $_POST['user'];
$senha = $_POST['senha'];

if ($logar=="andre" && $senha=="x"){
    
    $dia = date('d');
    $mes = date('m');
    $ano = date('Y');
    $data_login=$dia."/".$mes."/".$ano;
    

    session_start();

    //gravo as informaçoes das variaveis dentro da sessao
    $_SESSION['login'] = $logar;
    $_SESSION['data_login'] = $data_login;

    header("Location: ../agenda.php"); //entra na agenda de contatos
}
else {
    header ("Location: ../logar.htm"); //volta para tela de login
}
?>