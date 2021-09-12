<?php

$distancia = $_GET['distancia'];
$consumo = $_GET['consumo'];

$consumomedio = $consumo/$distancia;

echo ("A cada Km rodado em média é gasto $consumomedio litros");









?>
