<?php
    require "sessions.php";
    setcookie("user", "Victor", 86400 * 30);
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
    
        setcookie('name'); 
        setcookie('value'); 
    
    ?>

    <h1>Favourite color is <?= $_SESSION['fav-color'] ?></h1>

</body>
</html>