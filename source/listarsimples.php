<?php
ob_start();
session_start();
if($_SESSION[login]=="andre"){


// PDO + MySQL
$pdo = new PDO('mysql:host=localhost;dbname=infpessoais', 'root', '');
$statement  = $pdo->query("SELECT * FROM informacoes");
$row = $statement->fetch(PDO::FETCH_ASSOC);
//echo htmlentities($row['nome']);
?>

<ul>
<?php

foreach ($pdo->query('SELECT * FROM informacoes') as $row) {
    echo "<li>".$row['nome']." - ".$row['telefone']."</li>";
} 
}else {
    echo "não foi possível fazer isso.";
}
?>

</ul>