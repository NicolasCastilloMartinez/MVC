<?php

require_once 'carro.php';

$carroEspecial1 = new Carro("Amarillo", "Ferrari", "A5", 800, 200, 5);
$carroEspecial2 = new Carro("Rosa", "Audi", "A5", 800, 200, 5);
$carroEspecial3 = new Carro("Verde", "Mercedes", "A5", 800, 200, 5);
$carroEspecial4 = new Carro("Lila", "Renault", "A5", 800, 200, 5);


var_dump ($carroEspecial1);
var_dump ($carroEspecial2);
var_dump ($carroEspecial3);
var_dump ($carroEspecial4);

