<?php 

    // echo "I work";

    /*
        if request was post
        if file exists
        Switch statements
        File partially uploaded
        File not an image
        File too big
        File stopped by php extension
        Saving the file
    */

    if( $_SERVER['REQUEST_METHOD'] == "POST" ) {
        if ( $_FILES['image']['error'] == UPLOAD_ERR_OK ) {
            print_r($_FILES['image']);
        }
    }