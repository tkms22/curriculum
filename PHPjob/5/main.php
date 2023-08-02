<?php
require_once('db_connect.php');
require_once('function.php');

check_user_logged_in();

$pdo = connect();

try {
    $sql = "SELECT * FROM books"; 
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    die();            
}
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style5.css"/>
    <title>メイン</title>
</head>
<body>
    <h1>在庫一覧画面</h1>
    <button onclick="location.href='register_book.php'" class="blue-button">新規登録</button>
    <button onclick="location.href='logout.php'" class="gray-button">ログアウト</button>
    <table class="table" border="1" style="border-collapse: collapse">
        <tr>
            <thead>
                <td>タイトル</td>
                <td>発売日</td>
                <td>在庫数</td>
                <td></td>
            </thead>
        </tr>
        <tbody>
        <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['stock']; ?></td>
                <td><button onclick="location.href='delete_book.php?id=<?php echo $row['id']; ?>'" class="red-button">削除</button></td>
            </tr>
        </tbody>
        <?php } ?>
    </table>
</body>
</html>