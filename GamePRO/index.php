<?php
    session_start();
    $_SESSION["path"] = "/project/GamePRO/";
    $_SESSION["root"] = "D:/xampp/htdocs";
    header("location: views/login/login.php");
?>
