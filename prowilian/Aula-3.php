<?php
"<br>";
echo("####################################Cast para String##############################");
echo"<br>";

$a=5; //integer
$b=5.34; //float
$c="Hello";  //string 
$d=true;  //boolean
$e=NULL;  //NULL

$a=(string)$a;
$b=(string)$b;
$c=(string)$c;
$d=(string)$d;
$e=(string)$e;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

//cast para inteiro
echo"<br>";
echo"#######################Cast para inteiro#####################";
echo"<br>";

$a=5; //integer
$b=5.34; //float
$c="25 kilometers"; //string
$d="kilometers 25"; //string
$e="Hello";  //string 
$f=true;  //boolean
$g=NULL;

$a=(int)$a;
$b=(int)$b;
$c=(int)$c;
$d=(int)$d;
$e=(int)$e;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

echo"<br>";
echo"###########################################Cast para Float##########################################";
echo"<br>";

$a=5; //integer
$b=5.34; //float
$c="25 kilometers"; //string
$d="kilometers 25"; //string
$e="Hello";  //string 
$f=true;  //boolean
$g=NULL;

$a=(float)$a;
$b=(float)$b;
$c=(float)$c;
$d=(float)$d;
$e=(float)$e;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);



?>