<?php

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];

$soma = $numero1 + $numero2;
$sub  = $numero1 - $numero2;
$mult = $numero1 * $numero2;
$div  = $numero1 / $numero2;

echo "Soma: $soma <br>";
echo "Subtraçao: $sub <br>";
echo "Multiplicaçao: $mult <br>";
echo "Divisao: $div <br>";