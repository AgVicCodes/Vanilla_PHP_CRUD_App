<?php 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // print_r($_FILES);
    
        // echo($_FILES["image"]["name"]) . "<br /><br />";
    
        // echo($_FILES["image"]["type"]) . "<br /><br />";
    
        // echo($_FILES["image"]["tmp_name"]) . "<br /><br />";
    
        // echo($_FILES["image"]["error"]) . "<br /><br />";
        
        // echo($_FILES["image"]["size"]) . "<br /><br />";

        switch ($_FILES["image"]["error"]) {
            case UPLOAD_ERR_OK:
                echo("");
                break;
            case UPLOAD_ERR_INI_SIZE:
                echo("No file size greater than specified in the php ini file");
                break;
            case UPLOAD_ERR_FORM_SIZE:
                echo("No file size greater than specified in the html file");
                break;
            case UPLOAD_ERR_PARTIAL:
                echo("File was partially uploaded");
                break;
            case UPLOAD_ERR_NO_FILE:
                echo("No file was selected");
                break;
            case UPLOAD_ERR_NO_TMP_DIR:
                echo("Temporary folder missing");
                break;
            case UPLOAD_ERR_CANT_WRITE:
                echo("Selected file isn't an image");
                break;
            case UPLOAD_ERR_EXTENSION:
                echo("File upload was stopped by a PHP extension");
                break;
            default:
                echo("Unknown Error!<br/><br/>");
                break;
        }

        $mime_types = ["image/jpeg", "image/jpg", "image/png", "image/gif"];
        
        $mime_type = $_FILES["image"]["type"];

        if (in_array($mime_type, $mime_types)) {
            echo "File is valid<br><br>";
        } else {
            echo "File is invalid<br><br>";
        }

        $pathinfo = pathinfo($_FILES["image"]["name"]);

        $ext = $pathinfo["extension"];

        $base = $pathinfo["filename"];
        
        $base = preg_replace("/[^\w-]/", "_", $base);

        $file_name = $base . "." .$ext;

        echo $file_name;
        
        $directory = __DIR__ . "/uploads/" . $file_name;

        $i = 1;

        while (file_exists($directory)) {
            $file_name = $base . "($i)." .$ext;
            // echo $file_name . " exists <br>";
            $directory = __DIR__ . "/uploads/" . $file_name;
            $i++;
        }

        if (!move_uploaded_file($_FILES["image"]["tmp_name"], $directory)) {
            echo "File upload failed<br><br>";
        } else {
            echo "File " . $file_name . " has been uploaded successfully<br><br>";
        }

        // echo $directory, "<br><br>", $file_name, "<br><br>", $ext;

    } else {
        
        echo "POST method not requested!";
        
    }
    
    
    
    

    
    
    




    

    
    
    
    
    
    
    
    
    
    /*        switch ($_FILES["image"]["error"]) {
                case UPLOAD_ERR_PARTIAL:
                    exit("File partially uploaded!");
                    break;
                case UPLOAD_ERR_NO_FILE:
                    exit("File partially uploaded!");
                    break;
                case UPLOAD_ERR_PARTIAL:
                    exit("File partially uploaded!");
                    break;
                case UPLOAD_ERR_PARTIAL:
                    exit("File partially uploaded!");
                    break;
                case UPLOAD_ERR_PARTIAL:
                    exit("File partially uploaded!");
                    break;
                case UPLOAD_ERR_PARTIAL:
                    exit("File partially uploaded!");
                    break;
            }
    */
    
    // w3schools
    
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

    // GeeksforGeeks;
    
    /* $target_dir = $_POST["uploads"]."/"; 
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); 
    $uploadOk = 1; 
    
    if($_SERVER["REQUEST_METHOD"] == "POST") { 
    
        // To check whether directory exist or not 
        if(!empty($_POST["dirname"])) { 
            if(!is_dir($_POST["dirname"])) {     
                mkdir($_POST["dirname"]);     
                $uploadOk = 1;             
            } 
        } 
        else { 
            echo "Specify the directory name..."; 
            $uploadOk = 0; 
            exit;     
        } 
    
        // Check if file was uploaded without errors 
        if(isset($_FILES["fileToUpload"]) &&  
            $_FILES["fileToUpload"]["error"] == 0) { 
            $allowed_ext = array("jpg" => "image/jpg", 
                                "jpeg" => "image/jpeg", 
                                "gif" => "image/gif", 
                                "png" => "image/png"); 
            $file_name = $_FILES["fileToUpload"]["name"]; 
            $file_type = $_FILES["fileToUpload"]["type"]; 
            $file_size = $_FILES["fileToUpload"]["size"]; 
        
            // Verify file extension 
            $ext = pathinfo($file_name, PATHINFO_EXTENSION); 
    
            if (!array_key_exists($ext, $allowed_ext)) { 
                die("Error: Please select a valid file format."); 
            }     
                
            // Verify file size - 2MB max 
            $maxsize = 2 * 1024 * 1024; 
            
            if ($file_size > $maxsize) { 
                die("Error: File size is larger than the allowed limit."); 
            }                     
        
            // Verify MYME type of the file 
            if (in_array($file_type, $allowed_ext)) 
            { 
                // Check whether file exists before uploading it 
                if (file_exists("upload/" . $_FILES["fileToUpload"]["name"])) { 
                    echo $_FILES["fileToUpload"]["name"]." is already exists."; 
                }         
                else { 
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],  
                    $target_file)) { 
                        echo "The file ".  $_FILES["fileToUpload"]["name"].  
                        " has been uploaded."; 
                    }  
                    else { 
                        echo "Sorry, there was an error uploading your file."; 
                    } 
                } 
            } 
            else { 
                echo "Error: Please try again."; 
            } 
        } 
        else { 
            echo "Error: ". $_FILES["fileToUpload"]["error"]; 
        } 
    } */

?>