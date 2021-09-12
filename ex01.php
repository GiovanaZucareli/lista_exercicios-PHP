<?php

$sb = $_GET ['sb'];
$he = $_GET ['he'];
$vh = $_GET ['vh'];
$inss = $_GET ['inss'];


$HoraExtra = $he * $vh;
$PercentualINSS = $inss * (8/100);

$SalarioLiquido = $sb + $he - $PercentualINSS;

echo ("O valor do seu salário líquido é: $SalarioLiquido <br>");








?>
