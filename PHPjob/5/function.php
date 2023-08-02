<?php
require_once('db_connect.php');

function check_user_logged_in() {
    if (empty($_SESSION["user_name"])) {
        header("Location: login.php");
        exit;
    }
}
?>