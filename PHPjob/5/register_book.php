<?php
require_once('db_connect.php');
require_once('function.php');

check_user_logged_in();

if (isset($_POST["registration"])) {
    if (empty($_POST["title"])) {
        echo 'タイトルが未入力です。';
    }
    if (empty($_POST["release_date"])) {
        echo '発売日が未入力です。';
    }
    if (empty($_POST["number"])) {
        echo '在庫数が未入力です。';
    }

    if (!empty($_POST["title"]) && !empty($_POST["release_date"]) && !empty($_POST["number"])) {
    
        $title = $_POST["title"];
        $release_date = $_POST["release_date"];
        $number = $_POST["number"];

        $pdo = connect();
        try {
            $stmt = $pdo->prepare("INSERT INTO books (title, date, stock) VALUES (:title, :release_date, :number)");
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':release_date', $release_date);
            $stmt->bindParam(':number', $number);
            $stmt->execute();  
            header("Location: main.php");
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
    <meta http-equiv="Content-Type" release_date="text/html; charset=UTF-8">
    <link rel="stylesheet" href="style5.css"/>
</head>
<body>
    <h1>本 登録画面</h1>
    <form method="POST" action="">
        <input type="text" name="title" id="title" placeholder="タイトル"><br><br>
        <input type="text" name="release_date" id="release_date" placeholder="発売日"><br>
        <p>在庫数</p>
        <select name="number">
            <option value="default">選択してください</option>
            <?php for ($i=0;$i<=100;$i++){ ?>
                <option value="<?php echo $i; ?>">
                    <?php echo $i; ?>
                </option>
            <?php } ?>
        </select>
        <br><br>
        <input type="submit" value="登録" id="registration" name="registration" class="blue-button">
    </form>
</body>
</html>