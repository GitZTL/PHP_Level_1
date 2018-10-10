<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $numOne = $_POST['numOne'];
    $numTwo = $_POST['numTwo'];
    $action = $_POST['action'];
    $reset = $_POST['reset'];
    if ($reset) {
        $view = "";
        $numOne = 0;
        $numTwo = 0;
        $action = false;
        $view = "";
    }
    if ($action) {
        if ($action == "+") {
            $res = $numOne + $numTwo;
        }
        if ($action == "-") {
            $res = $numOne - $numTwo;
        }
        if ($action == "*") {
            $res = $numOne * $numTwo;
        }
        if ($action == "/") {
            $res = ($numTwo != 0) ? $numOne / $numTwo : "Infinity";
        }
        $view = "$numOne $action $numTwo = " . $res;
    }
}
?>