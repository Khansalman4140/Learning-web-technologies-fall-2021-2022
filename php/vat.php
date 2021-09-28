<?php

$vat = 7.5;

$price_without_Vat = 150;

$Vat_Pay = ($price_without_Vat / 100) * $vat;

$Total_Price = $price_without_Vat + $Vat_Pay;

echo "The amount of vat : ".($Vat_Pay). "<br>";
echo "Total amount : ".($Total_Price). "<br>";

?>