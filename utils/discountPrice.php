<?php

function discountPrice ($discount, $price){
    $finalPrice = $price - ($price * $discount / 100);
    return round($finalPrice);
    
}