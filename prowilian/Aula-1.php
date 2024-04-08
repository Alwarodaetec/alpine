<?php

//$salario = $dia * $valordia;

$nome = "Alwaro";
$sobrenome= "Pedro";
$idade= 16;
$numero=2024;
$dia=22;
$valordia=90.35;
$salario="";
$salario= $dia*$valordia;


echo ("Nome:".$nome. "<br>");
echo ("Sobrenome:".$sobrenome. "<br>");
echo("Nome completo: " .$nome. "" .$sobrenome. "<br>" );
echo ("Idade:" .$idade. "<br>");
print ("Número:" .$numero. "<br>");
print ("Dia:" .$dia. "<br>");
print ("Valordia:" .$valordia. "<br>");
print ("Salario :" .$salario."<br>");


print("##################################################################################");

$a = 10;
$b = 20;
$soma;
$subtracao;
$multiplicacao;
$divisao;

$soma = $a + $b;
$subtracao = $a - $b;
$multiplicacao = $a * $b;
$divisao = $a / $b;


echo("".$soma. "<br>");
echo ("" .$subtracao. "<br>");
echo("" .$multiplicacao."<br>");
echo ( "" .$divisao. "<br>");

print("##################################################################");

var_dump (5);
var_dump ($nome);
var_dump (3.14);
var_dump (true);
var_dump ([2, 3, 56]);
var_dump (NULL);

print("<br>"."###########################################################"."<br>")

?>