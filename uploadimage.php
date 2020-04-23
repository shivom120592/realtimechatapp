<?php

ini_set('display_errors', 1);
require __DIR__ . '/User.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_FILES['file']['name'];
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);

    // Select file type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $chat_uuid = $_POST['chat_uuid'];

    // Valid file extensions
    $extensions_arr = array("jpg", "jpeg", "png", "gif");

    // Check extension
    if (in_array($imageFileType, $extensions_arr)) {

        // Upload file
        $location = move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $name);
        error_reporting(0);
        $obj = null;
        $obj->imagepath = $target_dir.$name;
        echo json_encode($obj);
    }
}