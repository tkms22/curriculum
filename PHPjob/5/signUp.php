<?php
require_once("db_connect.php");

if (isset($_POST["signUp"])) {
    
    if (empty($_POST["name"]) && empty($_POST["password"])) { 
        echo 'ユーザー情報が未入力です。';
    } else if (empty($_POST["name"])) {
        echo '名前が未入力です。';
    } else if (empty($_POST["password"])) {
        echo 'パスワードが未入力です。';
    }

    if (!empty($_POST["name"]) && !empty($_POST["password"])) {
       
        $name = $_POST["name"];
        $password = $_POST["password"];
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $pdo = connect();
        try {
            $stmt = $pdo->prepare("INSERT INTO users (name, password) VALUES (:name, :password)");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':password', $password);
            $stmt->bindValue(':password', $password_hash);
            $stmt->execute();  
            $userid = $pdo->lastinsertid(); 
            header("Location: login.php");
            exit;
        } catch (PDOException $e) {
            $errorMessage = 'データベースエラー';
            $e->getMessage();
            echo $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="style5.css"/>
</head>
<body>
    <h1>ユーザー登録画面</h1>
    <form method="POST" action="">
        <input type="text" name="name" id="name" placeholder="ユーザー名"><br>
        <br>
        <input type="password" name="password" id="password" placeholder="パスワード"><br>
        <br>
        <input type="submit" value="新規登録" id="signUp" name="signUp" class="blue-button">
    </form>
</body>
</html