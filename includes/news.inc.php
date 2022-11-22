<?php
// will be included in news.php, so here consider
// path from news.php (and not news.inc.php)
$path_to_uploads = './uploads';
mkdir($path_to_uploads);

if ($scanned_dir = scandir($path_to_uploads)) {
    $files = array_diff($scanned_dir, array('.', '..')); // removing . and .. from returned array
    // TODO: display other types of file
    // display each image from uploads
    for (end($files); key($files) !== null; prev($files)) {
        $file_path = './uploads/' . current($files);
        echo '<div class="row justify-content-center my-4">';
        echo '<img src="' . $file_path . '" class="img-fluid"/>';
        echo '</div>';
    }
}
else {
    header("location: ../news.php?error=emptyDirectory");
    exit();
}