<?php
$my_name = $_POST["my_name"];
$number = $_POST['number'];
$number *= mt_rand(1, 6);

function getMultiplenumber($number) {
    
    if($number >= 37) {
        echo "残念";
    }
    if(26 <= $number && $number < 37) {
        return "大吉";
    }
    if(21 <= $number && $number < 26) {
        return "吉";
    }
    if(16 <= $number && $number < 21) {
        return "中吉";
    }
    if(11 <= $number && $number < 16) {
        return "小吉";
    }
    if(1 <= $number && $number < 11) {
        return "凶";
    }
}
?>

<?php 
ini_set('date.timezone', 'Asia/Tokyo');
echo date("Y-m-d H:i:s", time());
?>
<p>名前は<?php echo $my_name; ?>です。</p>
<p>番号は<?php echo $number; ?>です。</p>
<p>結果は<?php echo getMultiplenumber($number); ?>です。</p>