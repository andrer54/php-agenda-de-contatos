<?php

//    https: //databases.000webhost.com
        /* $conexao = mysqli_connect("localhost", "id7183299_admin","Relogio*") or die("não pude conectar: ".mysql_error());
        $base=mysqli_select_db($conexao , "id7183299_master") or die ("Não pude selecionar banco de dados"); */
        $conexao = mysqli_connect("localhost", "andre", "12345") or die("não pode conectar no mysql: "->mysqli_error());
        $base = mysqli_select_db($conexao, "crud-teste") or die("Não pode selecionar banco de dados");

