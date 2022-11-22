<?php

if (isset($_POST["submit"])) {
    // get submitted file
    $file = $_FILES["file"];

    // extract file variables
    $file_name = $file["name"];
    $file_type = $file["type"];
    $file_tmp_name = $_FILES["file"]["tmp_name"];
    $file_error = $_FILES["file"]["error"];
    $file_size = $_FILES["file"]["size"];

    $file_name_parts = explode('.', $file_name); // separate name and extension parts from file name using the dot: name.ext -> array [(name), (ext)]
    $file_extension = strtolower(end($file_name_parts)); // get last element from file_extension -> extension

    $allowed_extensions = array('jpg', 'jpeg', 'png', 'txt', 'pdf');

    if (in_array($file_extension, $allowed_extensions)) {
        if ($file_error === 0) {
            if ($file_size < 1500000) { // less then 1.5 MB
                $file_new_name = uniqid('', true) . "." . $file_extension; // creating unique file name for uploaded file
                $file_destination =  '../uploads/' . $file_new_name;
                move_uploaded_file($file_tmp_name, $file_destination);
                header("location: ../news.php?uploadSuccess");
            }
            else {
                header("location: ../news.php?error=fileTooBig");
            }
        }
        else {
            header("location: ../news.php?error=" . $file_error . "!");
            //header("location: ../news.php?error=errorUploadingFile");
        }
    } else {
        header("location: ../news.php?error=wrongExtension");
    }

}