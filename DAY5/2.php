<?php
function formatNumber($number) {
    if ($number < 1000000){
        return $number/1000 . " K";
    }elseif ($number >= 1000000){
        return $number/1000000 . " M";
    }
}
formatNumber(5000);
echo "<br>";
echo formatNumber(1700000);
?>