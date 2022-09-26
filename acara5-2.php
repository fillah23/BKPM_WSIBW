<?php 
print_r(getdate());
echo "<br><br>";


$mydate=getdate(date("U"));
echo "$mydate[mday]-$mydate[mon]-$mydate[year]";

?>