<?php
require_once("pdo.php");
require_once("getData.php");

$pdo = connect();
$newGetData = new getData();
$newusersdata = $newGetData->getUserData();
$newpostdata = $newGetData->getPostData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style4-2.css"/>
</head>
<body>
    <header class="header">
      <div class="upper_header">
          <p>ようこそ<?php echo " ".$newusersdata["last_name"].$newusersdata["first_name"]." "; ?>さん</p>
      </div>
      <div class="lower_header">
          <p>最終ログイン日：<?php echo $newusersdata["last_login"]; ?></p>
      </div>
      <div>
          <img src="https://letsengineer.jp/storage/cms-files/1599315827_logo.png">
      </div>
    </header>
    <main class="main">
      <p>記事IDタイトルカテゴリ本文投稿日</p>
      <?php foreach ($newpostdata as $value) {
          if($value["category_no"] == 1) {
            $value["category_no"]  = "食事";
          }else if($value["category_no"] == 2) {
              $value["category_no"]  = "旅行";
          }else if($value["category_no"] == 3) {
              $value["category_no"]  = "その他";
          }
          echo $value["id"].$value["title"],$value["category_no"].$value["comment"].$value["created"]."<br>";
       } ?>
    </main>
    <footer class="footer">Y&I group.inc</footer>
</body>


