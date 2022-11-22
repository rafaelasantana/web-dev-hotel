<?php

if (isset($_POST["submit"])) {
    $email = $_POST["loginEmail"];
    $password = $_POST["loginPassword"];

    require_once "db_handler.inc.php";
    require_once "functions.inc.php";


    if (empty_input_login($email, $password) !== false) {
        header("location: ../login.php?error=emptyInput");
        exit();
    }

    loginUser($conn, $email, $password);
    exit();

}
else {
    header("location: ../registration.php");
    exit();
}