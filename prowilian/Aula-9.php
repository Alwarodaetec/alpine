<?php

echo"<br>";
echo"__________________________________";
echo"<br>";

$colors  = array("red", "green" , "blue" , "yellow" , "1" , "2" , "3");

foreach ($colors as $x){
    echo "$x<br>";
}

"<br>";
echo"__________________________________";
echo"<br>";
echo"<br>";

$membros = array("Peter"=> "35", "Ben"=>"37" , "Joe" => "43");
foreach ($membros as $x => $y){
    echo "$x : $y<br>";
}


"<br>";
echo"__________________________________";
echo"<br>";

$colors = array("red", "green" , "blue" , "yellow" , "1" , "2" , "3");
foreach ($colors as $x){
    if ($x == "blue")break;
    echo "$x<br>";
}


"<br>";
echo"__________________________________";
echo"<br>";

$colors = array("red", "green" , "blue" , "yellow" , "1" , "2" , "3");

foreach ($colors as $x){
    if ($x == "blue")
    continue;
    echo "$x<br>";
}

"<br>";
echo"__________________________________";
echo"<br>";

?>