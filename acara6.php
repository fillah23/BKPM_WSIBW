<?php 
$matriksA = array(
    array(1,1,1),
    array(2,2,2),
    array(3,3,3)
    );
    $matriksB = array(
    array(3,3,3),
    array(2,2,2),
    array(1,1,1)
    );
    for ($i = 0; $i < count($matriksA); $i++):
    for ($j = 0; $j < count($matriksA[$i]); $j++):
    echo $matriksA[$i][$j]+$matriksB[$i][$j];
    echo ",";
    endfor;
    echo "<br>";
    endfor;
?>