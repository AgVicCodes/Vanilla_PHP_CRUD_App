<style>
    body {
        background: #333;
        color: #777;
        font-family: "outfit";
        margin: 100px;
    }

    label {
        font-size: 20px;
        /* margin-bottom: 10px; */
    }

    input {
        background: #464646;
        border: 3px solid grey;
        border-radius: 5px;
        margin-top: 5px;
        margin-bottom: 10px;
        height: 50px;
        width: 500px;
        /* box-shadow: 0px 5px 10px #171717; */
        font-size: 24px;
        color: #6a67fa;
        /* display: flex; */
        /* flex-direction: column; */
        /* justify-content: right !important; */
    }

    .submit {
        background: #1a8733;
        color: #fff;
        margin-top: 10px;
        border: 2px solid #0a4703;
        border-radius: 5px;
        height: 50px;
        width: 100px;
        font-size: 24px;
        transition: ease-in-out 300ms;
    }
    
    .submit:hover {
        background: #2a4423;
    }

    form {
        border: 2px solid #333;
        display: flex;
        flex-direction: column;
        padding-top: 30px;
        padding-bottom: 30px;
        align-items: center;
        width: 100%;
        border-radius: 20px;
        background: #2e2e2e;
        box-shadow: 0px 15px 20px #17171778;
        transition: ease-in-out 500ms;
        transition-property: "translate";
    }

    form:hover {
        translate: 0px 30px;
        /* rotate: 90deg; */
        /* scale: 0.8; */
        /* transform: skewY(45deg); */
        /* transform: scaleY(10); */
        background: #353535;
    }

</style>

<?php 

    // FORMS
    
    // Define variables and set as empty
    $name = $email = $password = "";
    $name_err = $email_err = $password_err = "";
    
?>

<form method="POST" action="">
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
</form>    

<?php 

    // Authentication logic
    if ([$_SERVER['REQUEST_METHOD'] == "POST"]) {

        if (empty($_POST['name'])) {
            $name_err = "Name is required";
            echo "<br>";
        } else {
            $name = trim_data($_POST['name']);
            echo "Name is: " . $name;
            echo "<br>";
        }

        if (empty($_POST['email'])) {
            $email_err = "Email is required";
            echo "<br>";
        } else {
            $email = trim_data($_POST['email']);
            echo "Email Address is: " . $email;
            echo "<br>";
        }

        if (empty($_POST['password'])) {
            $password_err = "Password is required";
            echo "<br>";
        } else {
            $password = trim_data($_POST['password']);
            echo "Password was: " . md5($password);
            echo "<br>";
        }

    }


    function trim_data ($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

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