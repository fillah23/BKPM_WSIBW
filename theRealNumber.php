<?php 
$a;
$b;
$c;
//komutatif
function komutatifPenjumlahan($a,$b){
    echo "Komutatif penjumlahan"."<br>";
    echo "Rumus a + b = b + a"."<br>";
    echo $a ." + ". $b ." = ". $b ." + ".$a."<br>"."<br>";
}
function komutatifPerkalian($a,$b){
    echo "Komutatif penjumlahan"."<br>";
    echo "Rumus a x b = b x a"."<br>";
    echo $a ." x ". $b ." = ". $b ." x ".$a."<br>"."<br>";
}

//asosiatif
function asosiatifPenjumlahan($a,$b,$c){
    echo "Asosiatif penjumlahan"."<br>";
    echo "Rumus (a + b) + c = a + (b + c)"."<br>";
    echo "({$a} + {$b}) + {$c} = {$a} + ({$b} + {$c})"."<br>"."<br>";
}
function asosiatifPerkalian($a,$b,$c){
    echo "Asosiatif penjumlahan"."<br>";
    echo "Rumus (a x b) x c = a x (b x c)"."<br>";
    echo "({$a} x {$b}) x {$c} = {$a} x ({$b} x {$c})"."<br>"."<br>";
}

//distributif
function perkalianTerhadapPenjumlahan($a,$b,$c){
    echo "Distributif perkalian terhadap penjumlahan"."<br>";
    echo "Rumus a x (b + c) = (a x b) + (a x c)"."<br>";
    echo "{$a} x ({$b} + {$c}) = ({$a} x {$b}) + ({$a} x {$c})"."<br>"."<br>";
}
function perkalianTerhadapPengurangan($a,$b,$c){
    echo "Distributif perkalian terhadap pengurangan"."<br>";
    echo "Rumus a x (b - c) = (a - b) + (a - c)"."<br>";
    echo "{$a} x ({$b} - {$c}) = ({$a} - {$b}) + ({$a} - {$c})"."<br>"."<br>";
}

komutatifPenjumlahan(1,2);
komutatifPerkalian(1,2);
asosiatifPenjumlahan(1,2,3);
asosiatifPerkalian(1,2,3);
perkalianTerhadapPenjumlahan(1,2,3);
perkalianTerhadapPengurangan(1,2,3);
?>