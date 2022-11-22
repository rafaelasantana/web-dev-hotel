<?php

function empty_input_registration($name, $last_name, $gender, $email, $password, $password_repeat) {
    $is_empty = false;
    if (empty($name) || empty($last_name) || empty($gender) || empty($email) || empty($password) || empty($password_repeat)) {
        $is_empty = true;
    }
    return $is_empty;
}

function empty_input_login($email, $password) {
    $is_empty = false;
    if (empty($email) || empty($password)) {
        $is_empty = true;
    }
    return $is_empty;
}

function invalid_names($name, $last_name) {
    $is_invalid = false;
    // check if name and last name match the pattern (only letters a-z or numbers)
    if (!preg_match('/^[a-zA-Z0-9]*$/', $name) || !preg_match('/^[a-zA-Z0-9]*$/', $last_name)) {
        $is_invalid = true;
    }
    return $is_invalid;
}
function invalid_email($email) {
    $email_invalid = false;
    // built in function to check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_invalid = true;
    }
    return $email_invalid;
}

function no_password_match($password, $password_repeat) {
    $no_match = false;
    if ($password !== $password_repeat) {
        $no_match = true;
    }
    return $no_match;
}


function user_exists($conn, $email) {
    $sql = "select * from users where usersEmail = ?;"; // '?' is a placeholder. Using prepared statements to avoid eg. sql injections
    $stmt = mysqli_stmt_init($conn); // initialize statement

    // checking if statement is valid for db
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../registration.php?error=stmtFailed");
        exit();
    }

    // binding data to the statement
    mysqli_stmt_bind_param($stmt, "s", $email); // 's' for type=string;

    // execute statement
    mysqli_stmt_execute($stmt);
    $result_data = mysqli_stmt_get_result($stmt);

    // analyse returned results
    if ($row = mysqli_fetch_assoc($result_data)) {
        return $row;
    }
    else {
        $exists = false;
        return $exists;
    }

    mysqli_stmt_close($stmt);
}


function create_user($conn, $name, $last_name, $email, $password) {
    $sql = "insert into users(usersName, usersLastName, usersEmail, usersPwd) values (?, ?, ?, ?);"; // '?' is a placeholder. Using prepared statements to avoid eg. sql injections
    $stmt = mysqli_stmt_init($conn); // initialize statement

    // checking if statement is valid
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../registration.php?error=stmtFailed");
        exit();
    }

    // hashing password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // binding data to the statement
    mysqli_stmt_bind_param($stmt, "ssss", $name, $last_name, $email, $hashed_password); // 's' for type=string, one for each parameter


    // execute statement
    mysqli_stmt_execute($stmt);
    header("location: ../registration.php?error=none");

    // close statement
    mysqli_stmt_close($stmt);
    exit();
}

function loginUser($conn, $email, $password) {
    // user_exists returns an associative array with all column values
    $user_exists = user_exists($conn, $email);

    // check if user exists
    if ($user_exists === false) {
        header("location: ../login.php?error=loginInvalid");
        exit();
    }

    // get hashed password from associative array
    $password_hashed = $user_exists["usersPwd"];
    $check_passwords = password_verify($password, $password_hashed);

    if ($check_passwords === false) {
        header("location: ../login.php?error=loginInvalid");
        exit();
    }
    // login user
    else if ($check_passwords === true) {
        // set session for this user
        session_start();
        $_SESSION["userId"] = $user_exists["usersEmail"];
        $_SESSION["userName"] = $user_exists["usersName"];
        header("location: ../index.php");
        exit();
    }
}

