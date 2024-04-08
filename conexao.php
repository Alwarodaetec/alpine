<?php
try{
    $pdo = New PDO('mysql:localhost;dbname=etec','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo("Conectado");
}
catch(PDOException $e){
    echo 'Erro: ' . $e->getMessage();
    echo ("Não conectado");
}
?>
