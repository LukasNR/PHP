<?php
$nu1 = $_POST['n1'];
$nu2 = $_POST['n2'];
$nu3 = $_POST['n3'];

$soma = $nu1 + $nu2 + $nu3;

if (($nu1 > $nu2) && ($nu1 >$nu3)){
    echo "O Maior Número é: " . $nu1;
    echo '<br>';
    echo 'A Soma é: '. $soma;
}

elseif (($nu2 > $nu1) && ($nu2 >$nu3)){
    echo "O Maior Número é: " . $nu2;
    echo '<br>';
    echo 'A Soma é: '. $soma;
}

elseif (($nu3 > $nu1) && ($nu3 >$nu2)){
    echo "O Maior Número é: " . $nu3;
    echo '<br>';
    echo 'A Soma é: '. $soma;
}

?>