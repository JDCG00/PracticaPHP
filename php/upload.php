<?php
    $path = "../uploads/";  
    $file = $_FILES["upload"];
    $file_name = $file["name"];
    $file_tmp = $file["tmp_name"];
    //$file_size = $file["size"];
    //$file_error = $file["error"];
    $file_type = $file["type"];
    $file_uploaded = $path . basename($file_name);
    $allowed = array("image/png", "image/jpeg", "image/gif");
    

    $ext = explode('/' , $file_type);
    $ext = strtolower(end($ext));
 

    if (in_array($file_type, $allowed)) {
        if (isset($_POST["submit"])) {        
            if (move_uploaded_file($file_tmp, $file_uploaded )) {
                echo "Fichero subido correctamente.\n <br>";
                echo "Tipo de fichero: " .$ext;
            }        
        }
    }else{
        echo "Solo se admiten imágenes.";
    }
   

?>