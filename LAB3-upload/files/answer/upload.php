<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uploadDirectory = 'uploads/';

    if ($_FILES['file']['error'] === UPLOAD_ERR_OK) {
        $file = $_FILES['file'];

        $fileName = $file['name'];
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
        $fileExtension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

        if(in_array($fileExtension, $allowedExtensions)){
            $destination = $uploadDirectory . $fileName;
            move_uploaded_file($file['tmp_name'], $destination);
    
            echo "Uploaded at : $destination";
        }
    }
}
?>