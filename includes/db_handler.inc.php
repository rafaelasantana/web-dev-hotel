<?php

$server_name = "localhost";
$db_username = "root";
$db_password = "mysql";
$db_name = "the_hotel";

$conn = mysqli_connect($server_name, $db_username, $db_password, $db_name);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
}

if (mysqli_ping($conn)) {
    printf ("Our connection is ok!\n");
} else {
    printf ("Error: %s\n", mysqli_error($conn));
}

// TODO: finish
