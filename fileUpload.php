<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" href="style.css"> -->
        <title>Document</title>
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
            
            /* #file {
                border: 2px solid #1a5687;
                background: #ff0;
                height: 30px;
            } */

            #submit {
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

            #submit:hover {
                background: #2a4423;
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
                padding: 20px;
                /* align-items: center; */
                width: 95%;
                border-radius: 20px;
                background: #2e2e2e;
                box-shadow: 15px 15px 20px #17171778;
                transition: ease-in-out 500ms;
                /* transition-property: "translate"; */
            }

            form:hover {
                /* rotate: 90deg; */
                scale: 1.03;
                /* transform: skewY(45deg); */
                /* transform: scaleY(10); */
                background: #353535;
            }

            #form_2:hover {
                translate: 0px 30px;
            }

            ::-webkit-file-upload-button {
                background: #555555;
                color: white;
                font-size: 10px;
                padding: 20px;
                border-radius: 5px;
                border: 3px solid #656565;
            }
        </style>
    </head>
    <body>
        <form action="./upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="file">
            <img src="" alt="">
            <input type="submit" id="submit">
        </form>
    </body>
</html>

