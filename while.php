<?php

$x = 1;
$soma = 0;
while($x <= 10){
	echo 'Valor de X: '.$x.'<br>';
	$soma = $soma + $x;
	$x++;
}
echo "Soma: ".$soma;
?>