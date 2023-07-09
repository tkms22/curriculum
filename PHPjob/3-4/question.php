<?php
$my_name = $_POST["my_name"];
$choicesOfquestion1 = ["80", "22", "20", "21"];
$choicesOfquestion2 = ["PHP", "Python", "JAVA", "HTML"];
$choicesOfquestion3 = ["join", "select", "insert", "update"];
$answerOfquestion1 = $choicesOfquestion1[0];
$answerOfquestion2 = $choicesOfquestion2[3];
$answerOfquestion3 = $choicesOfquestion3[1];
?>

<p>お疲れ様です<?php echo $my_name; ?>さん</p>
<form action="answer.php" method="post">

    <h2>①ネットワークのポート番号は何番？</h2>
    <?php foreach ($choicesOfquestion1 as $value) { ?>
    <input type="radio" name="userChoice1" value="<?php echo $value; ?>"><?php echo $value; ?>
    <?php } ?>
    <br>

    <h2>②Webページを作成するための言語は？</h2>
    <?php foreach ($choicesOfquestion2 as $value) { ?>
    <input type="radio" name="userChoice2" value="<?php echo $value; ?>"><?php echo $value; ?>
    <?php } ?>
    <br>

    <h2>③MySQLで情報を取得するためのコマンドは？</h2>
    <?php foreach ($choicesOfquestion3 as $value) { ?>
    <input type="radio" name="userChoice3" value="<?php echo $value; ?>"><?php echo $value; ?>
    <?php } ?>
    <br>

    <input type="hidden" name="my_name" value="<?php echo $my_name; ?>" />
    <input type="hidden" name="answerOfquestion1" value="<?php echo $answerOfquestion1; ?>" />
    <input type="hidden" name="answerOfquestion2" value="<?php echo $answerOfquestion2; ?>" />
    <input type="hidden" name="answerOfquestion3" value="<?php echo $answerOfquestion3; ?>" />
    
    <input type="submit" value="回答する" />
</form>