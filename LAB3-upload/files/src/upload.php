<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uploadDirectory = 'uploads/';

    if ($_FILES['file']['error'] === UPLOAD_ERR_OK) {
        $file = $_FILES['file'];

        $fileName = $file['name'];

        $destination = $uploadDirectory . $fileName;
        move_uploaded_file($file['tmp_name'], $destination);

        echo "Uploaded at : $destination";
    }
}
?>