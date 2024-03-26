<?php
$auta = array(
    array("znacka" => "skoda" , "typ" => "nafta" , "cena" => 501),
    array("znacka" => "bmw" , "typ" => "nafta" , "cena" => 50003),
    array("znacka" => "pegot" , "typ" => "benzin" , "cena" => 5006),
    array("znacka" => "mercedes" , "typ" => "benzin" , "cena" => 5400),
    array("znacka" => "skoda2" , "typ" => "benzin" , "cena" => 500),
    array ("znacka" => "tesla" , "typ" => "elektro" , "cena" => 505), 
);

include 'libTest/lib1-podCisla.php';

//vypis cenaPod
$cenaHranice = 1000;
$result = cenaPod($auta, $cenaHranice);
echo vypisCenaPod($result);

//vypis prumeru
cenaPrumer($auta);


/*
echo "<ul>";
foreach($result as $hodnota){
    echo "<li>";
    echo "Značka: " . $hodnota["znacka"] . ", Typ: " . $hodnota["typ"] . ", Cena: " . $hodnota["cena"];
    //echo "$value";
    echo "</li>";
}
echo "</ul>";*/


?>