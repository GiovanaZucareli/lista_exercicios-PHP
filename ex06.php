<?php


$refri01 = $_GET ['refri01'];
$refri02 = $_GET ['refri02'];
$refri03 = $_GET ['refri03'];

$refrig01 = ($refri01 * 0.35);
$refrig02 = ($refri02 *0.6);
$refrig03 = ($refri03 * 2.0);



$totalrefri = ($refrig01 + $refrig02 + $refrig03);

echo ("Foi comprado um total de $totalrefri litros de refrigerante");






?>
