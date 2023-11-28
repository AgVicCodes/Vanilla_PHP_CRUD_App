<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
        $_SESSION["fav-color"] = "Purple";
        $_SESSION["fav-food"] = "Rice";

        // session_unset();

        // session_destroy();
    
    ?>

    <h1>Favourite color is <?= $_SESSION['fav-color'] ?></h1>

</body>
</html>