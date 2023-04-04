<?php


print "<h1>Titol h1</h1>";

echo "<p>Text p</p>","<h3>Titol h3</h3>";

$arrayNombres = array("Juan","Pepe","Antonio","Jose","Kalipo");
$numero = 34;
echo "$numero<br>";
$numerofinal = 11;
echo "$numerofinal<br>";
$paraula = "Asteroide";
echo "$paraula<br>";
$boolea = true;
$booleaparaula = "";
if ($boolea == true){
    $booleaparaula = "true";
    echo "$booleaparaula<br>";
}else {
    $booleaparaula = "false";
    echo "$booleaparaula<br>";
}

if($numero == 69){
    echo "<p style='color: aqua'>El numero es el 69 ($numero)</p>";
}elseif ($numero > 69){
    echo "<p style='color: red'>El numero es més gran que 69 ($numero)</p>";
}else{
    echo "<p style='color: greenyellow'>El numero es més petit que 69 ($numero)</p>";
}

if ($paraula == $paraula){
    echo "<p>Hola, soc un $paraula</p>";
}

if ($boolea == false){
    $booleaparaula = "FALSE";
    echo "<p>El boolea es $booleaparaula</p>";
}else{
    $booleaparaula = "FALSE";
    echo "<p>El boolea es $booleaparaula</p>";
}

for ($numero=0; $numero <= $numerofinal ;$numero = $numero + 2){
    echo "<p>Numero +2: $numero</p>";
}
$numero = 0;
while($numero <= $numerofinal){
    if ($numero == $numerofinal){
        echo "<p style='color: darkred'>Last lap, volta nº $numero de $numerofinal</p>";
    }else{
        echo "<p style='color: #ab25ff'>Continua, encara queda, volta nº $numero de $numerofinal</p>";
    }
    $numero++;
}

$max = count($arrayNombres);
for ($numero = 0; $numero < $max; $numero++){
    echo "<p style='color: #ffa10b'>$arrayNombres[$numero]</p>";
}

$numero=0;
foreach ($arrayNombres as $ks){
    echo "<p style='color: #27865c'>$arrayNombres[$numero]</p>";
    $numero++;
}
