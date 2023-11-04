<?php 

    // FORMS
    
    // Define variables and set as empty
    $name = $email = $password = $class = "";
    $name_err = $email_err = $password_err = "";
    
    // Authentication logic
    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        if (empty($_POST['name'])) {
            $name_err = "Name is required";
        } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $name = trim_data($_POST['name']);
            echo "Name is: " . $name;
        } else {
            $name_err = "Name is invalid";
        }

        if (empty($_POST['email'])) {
            $email_err = "Email is required";
        } else {
            $email = trim_data($_POST['email']);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email_err = "Email is invalid";
            } else {
                echo "Email Address is: " . $email;
            }
        }

        if (empty($_POST['password'])) {
            $password_err = "Password is required";
        } else {
            $password = trim_data($_POST['password']);
            echo "Password was: " . md5($password);
        }

    }


    function trim_data ($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>



<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./style.css" />
    </head>
    <body>    
        <form method="POST" action="">
            <a href="./style.css">Link to style</a>
            <div class="name">
                <label for="name">Name:</label><br>
                <input type="text" name="name" id="name" placeholder="Enter your name!" />
                <span class="error">*<?= $name_err ?></span>
            </div>
            <div class="email">
                <label for="email">Email:</label><br>
                <input type="" name="email" id="email" placeholder="Enter your Email!" />
                <span class="error">*<?= $email_err ?></span>
            </div>
            <div class="password">
                <label for="password">Password:</label><br>
                <input type="password" name="password" id="password" placeholder="Enter your Password!" />
                <span class="error">*<?= $password_err ?></span>
            </div>
            <input type="submit" name="submit" class="submit" value="Submit"></input>
            <br>
        </form> 
    </body>
</html>
<!-- 
<form method="POST" action="" id="form_2">
    <div class="name">
        <label for="name">Name:</label><br>
        <input type="text" name="name" id="name" placeholder="Enter your name!" />
        <span class="error">*<?= $name_err ?></span>
    </div>
    <div class="email">
        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" placeholder="Enter your Email!" />
        <span class="error">*<?= $email_err ?></span>
    </div>
    <div class="password">
        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password" placeholder="Enter your Password!" />
        <span class="error">*<?= $password_err ?></span>
    </div>
    <input type="submit" name="submit" class="submit" value="Submit"></input>
    <br>
</form>  -->

<?php 

    // trim_data($name);



    // $username = htmlspecialchars($_REQUEST['name']);
    // echo $username;

    // $name = $_REQUEST['name'];
    // Post also works
    // $name = htmlspecialchars($_POST['name']);
    // echo $name;
    // echo "<br>";

    // $email = htmlspecialchars($_POST['email']);
    // echo $name;
    // echo "<br>";

    // $password = htmlspecialchars($_POST['password']);
    // echo $name;
    // echo "<br>";
    
    


    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    

?>