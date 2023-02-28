<?php

$vat = 15;

//amount
$amountExcludingVat = 10;


$vatToPay = ($amountExcludingVat / 100) * $vat;

$totalPrice = $amountExcludingVat + $vatToPay;

echo number_format($totalPrice, 2);
  ?>  