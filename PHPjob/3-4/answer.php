<link rel="stylesheet" href="style.css">

<?php
$my_name = $_POST["my_name"];
$userChoice1 = $_POST["userChoice1"];
$userChoice2 = $_POST["userChoice2"];
$userChoice3 = $_POST["userChoice3"];
$answerOfquestion1 = $_POST['answerOfquestion1'];
$answerOfquestion2 = $_POST['answerOfquestion2'];
$answerOfquestion3 = $_POST['answerOfquestion3'];

function judgeAnswer($string1, $string2) {
    if($string1 == $string2) {
        return "正解！";
    }
    else {
        return "残念・・・";
    }
}
?>

<body>
    <p><?php echo $my_name; ?>さんの結果は・・？</p>
    <p>①の答え</p>
    <?php echo judgeAnswer($userChoice1, $answerOfquestion1); ?>
    <p>②の答え</p>
    <?php echo judgeAnswer($userChoice2, $answerOfquestion2); ?>
    <p>③の答え</p>
    <?php echo judgeAnswer($userChoice3, $answerOfquestion3); ?>
</body>