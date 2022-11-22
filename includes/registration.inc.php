<?php

$users_list = array("admin@admin.com");

if (isset($_POST["submit"])) {
    $name = $_POST["inputFirstName"];
    $last_name = $_POST["inputLastName"];
    $gender = $_POST["radioGender"];
    $email = $_POST["inputEmail"];
    $password = $_POST["inputPassword"];
    $password_repeat = $_POST["inputConfirmPassword"];

    require_once "db_handler.inc.php";
    require_once "functions.inc.php";

    if (empty_input_registration($name, $last_name, $gender, $email, $password, $password_repeat) !== false) {
        header("location: ../registration.php?error=emptyInput");
        exit();
    }
    if (invalid_names($name, $last_name) !== false) {
        header("location: ../registration.php?error=invalidNameOrLastName");
        exit();
    }
    if (invalid_email($email) !== false) {
        header("location: ../registration.php?error=invalidEmail");
        exit();
    }
    if (no_password_match($password, $password_repeat) !== false) {
        header("location: ../registration.php?error=noPasswordMatch");
        exit();
    }
    if (user_exists($conn, $email) !== false) {
        header("location: ../registration.php?error=userTaken");
        exit();
    }

    create_user($conn, $name, $last_name, $email, $password);
}
else {
    // if did not click on button, send user back to page to avoid manual access
    header("location: ../registration.php");
}

// no need to close tags if is only php code