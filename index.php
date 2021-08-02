<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06 paskaita</title>
</head>
<body>
    <?php
   $klientai = array (
   array (
       "id" => "0",
       "vardas" => "vardas0",
       "pavarde" => "pavarde0",
       "asmens kodas" => "1234567789",
       "prisijungimo data" => "2021-08-02",
       "adresas" => "Vilnius",
       "el.pastas" => "iii@gmail.com"
   ),

   array (
    "id" => "1",
    "vardas" => "vardas1",
    "pavarde" => "pavarde1",
    "asmens kodas" => "1234652789",
    "prisijungimo data" => "2021-08-01",
    "adresas" => "Kaunas",
    "el.pastas" => "aaa@gmail.com"
   ),

);
$klientai = array();


for($i=0; $i<200; $i++){
    //masyvas "klientai" 
    $klientas = array (
    "id" => $i+1,
    "vardas" => "vardas". ($i+1), 
    "pavarde" => "pavarde". ($i+1), 
    "asmKodas" => rand (3, 4). rand(0, 99). rand (1, 31). rand(1,12). rand (0.9999),
    "prData" => rand (1950, 2021). "". rand(1, 12). "-". rand(1, 31),       
    "adresas" => "adresas". ($i+1), 
    "elPastas" => "elPastas". ($i+1));

    array_push($klientai, $klientas);
}

echo "<table>";
foreach($klientai as $eilute) {
    echo "<tr>";
    foreach($eilute as $stulpelis){

    echo "<td>";
    echo $stulpelis;
    echo "<td>";
}

    echo "<tr>";

}

echo "<table>";


//var_dump($klientai)

//setcookie("klientai", $klientas)

//$klientai_tekstas implode("|")



  
 ?>
</body>
</html>