<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
                
    </body>
</html>

<?php 

    // file upload

    /* 
        1. Add vars - $target_dir, $uploadpath, $uploadOk
        2. File upload script
        3. Check if file type is valid
        4. Check if file size is ok
        5. Check if file is a duplicate.

        Add attr enctype="multipart/form-data"
        
        Correction:
        1. $target_dir = $target_dir, $uploadpath = $target_file, 
           Missing - $imageFileType.
        2-5. Correct
    */

    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["fileToTpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if (isset($_POST["submit"])) {
        $check;
    }
    
?>