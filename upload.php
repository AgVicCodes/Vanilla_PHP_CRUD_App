<?php 

    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        echo "POST method not requested!";
    }
    
    print_r($_FILES);

    echo($_FILES["file"]["name"]) . "\n";

    echo($_FILES["file"]["type"]) . "\n";

    echo($_FILES["file"]["tmp_name"]) . "\n";

    echo($_FILES["file"]["error"]) . "\n";
    
    echo($_FILES["file"]["size"]) . "\n";

    


    
    




    

    

    
    

    
    

    

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