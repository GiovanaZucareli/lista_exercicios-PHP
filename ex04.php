<?php

$ano = $_GET ['ano'];


echo "Você está vivendo há:<br>";

$diatotal = ($ano*365.0);
$horastotal = ($ano*8760.0);
$minutostotal = ($ano*525600.0);
$segundostotal = ($ano*31536000.0);

echo "$diatotal dias <br>";
echo "$horastotal horas <br>";
echo "$minutostotal minutos <br>";
echo "$segundostotal segundos <br>";





?>
