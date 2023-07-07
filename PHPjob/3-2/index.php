<?php
define("TAX", 0.1);

$products = ["鉛筆" => 100, "消しゴム" => 150, "物差し" => 500];

function getTotalprice($value) {
    return $value * (1 + TAX);
}

foreach($products as $key => $value) {
    echo $key."の税込価格は".getTotalprice($value)."です";
    echo "<br>";
}
?>