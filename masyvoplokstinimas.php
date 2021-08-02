<?php
//kintamaji $tekstas = "1,2,3,4,5,6" reikia paversti i masyva

$tekstas = "1,2,3,4,5,6";
//1,2,3,4,5,6 => 

$masyvas = explode(",", $tekstas);
echo $tekstas;
var_dump($masyvas);


$naujas_tekstas = implode( "|", $masyvas);

$naujas_tekstas = implode(".", $masyvas);

$nauja_tekstas = $naujas_tekstas. ".7.8.9.101|44";
$naujas_masyvas = explode(".", $naujas_tekstas);


var_dump($naujas_masyvas);
echo $naujas_tekstas;



$dvimatmasyvas + array (
    array ("vardas", "pavarde", "telefonas"),// => "vardas,pavarde,telefonas"
    array ("vardas1", "pavarde1", "telefonas1"),// => "vardas1,pavarde1,telefonas1"
    array ("vardas2", "pavarde2", "telefonas2"), //=> "vardas2,pavarde2,telefonas2"

);
var_dump($dvimatmasyvas);


for ($i = 0; $i < count ($dvimatmasyvas); $i++){
$dvimatmasyvas[$i] = implode (",", $dvimatmasyvas[$i]);
}
var_dump($dvimatmasyvas);


?>
