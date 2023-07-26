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
  <div class="wrapper">
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
        <table align="center">
            <thead>
                <tr>
                    <th>記事ID</th>
                    <th>タイトル</th>
                    <th>カテゴリー</th>
                    <th>本文</th>
                    <th>投稿日</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($newpostdata as $value) {
                    if($value["category_no"] == 1) {
                        $value["category_no"]  = "食事";
                    }else if($value["category_no"] == 2) {
                        $value["category_no"]  = "旅行";
                    }else if($value["category_no"] == 3) {
                        $value["category_no"]  = "その他";
                    } ?>
                <tr>
                    <td><?= $value["id"] ?></td>
                    <td><?= $value["title"] ?></td>
                    <td><?= $value["category_no"] ?></td>
                    <td><?= $value["comment"] ?></td>
                    <td><?= $value["created"] ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
    <footer class="footer">Y&I group.inc</footer>
  </div>
</body>