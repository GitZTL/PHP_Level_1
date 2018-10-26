<?php
session_start();

if (isset($_POST['logout'])){
		unset($_SESSION["admin"]);
        unset($_SESSION["username"]);
        unset($_SESSION["password"]);
        session_destroy();
        header ('Location: ../public/index.php');
        exit;

    }
?>