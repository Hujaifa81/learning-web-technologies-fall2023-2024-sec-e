<?php

    if (isset($_FILES["ProfilePicture"])) {
        $file = $_FILES["ProfilePicture"];
        $fileExtension = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));
        
        if ($fileExtension !== 'jpeg' && $fileExtension !== 'jpg' && $fileExtension !== 'png') {
            echo "Invalid picture format. Allowed formats are: jpeg, jpg, png.";
        }
        elseif ($file["size"] > 4 * 1024 * 1024) { 
            echo "Picture size exceeds the maximum allowed size of 4MB.";
        } else {

            $uploadDirectory = "submit/";
            $uploadPath = $uploadDirectory . $file["name"];
            
            if (move_uploaded_file($file["tmp_name"], $uploadPath)) {
                echo "Picture uploaded successfully.";
            } else {
                echo "Error uploading the picture.";
            }
        }
    } else {
        echo "No file selected for upload.";
    }
?>
