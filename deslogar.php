<?php
ob_start();
session_start();


//destroi a sessão
unset($_SESSION['login']);
unset($_SESSION['data_login']);
session_destroy();

header ("Location: logar.php");


?>
  