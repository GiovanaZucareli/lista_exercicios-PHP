<?php

$valor01 = $_GET ['valor01'];





$valor02 = ($valor01*0.12);
$valor03 = ($valor02 *18);
$valor04 = ($valor03 / 100);

$valorfinal = ($valor04 + $valor02);


echo ("O valor total a ser pago é: R$ $valorfinal")









?>
