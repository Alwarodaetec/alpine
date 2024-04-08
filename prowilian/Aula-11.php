<?php

$membros= array("Peter"=>"35","Ben"=>"'37","Joe"=>"43");
echo "<br>";
echo "____________________________________";
echo"<br>";

$cars=[
    0=>"Volvo",
    1=>"BMW",
    2=>"Toyota",
    3=>"Bike",
    10=>"Skate"
];

echo "<br>";
echo $cars['0'];
echo "<br>";
echo "<br>";
echo $cars['1'];
echo "<br>";
echo "<br>";
echo $cars['2'];
echo "<br>";
echo "<br>";
echo $cars['3'];
echo "<br>";
echo "<br>";
echo $cars['10'];
echo "<br>";

$myCar=[
    "brand"=>"Ford",
    "model"=>"Mustang",
    "year"=>1964
];
$cars=[];
$cars[0]="Volvo";
$cars[1]="BMW";
$cars[2]="Toyota";

echo "<br>";
echo "____________________________________";
echo"<br>";

$cars=array("brand"=>"Ford", "model"= "Mustang","year"=>1964);
$cars["year"]=2024;

foreach ($cars as $x => $y) {
    echo "$x: $y <br>";
}



?>