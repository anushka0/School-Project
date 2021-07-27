<?php
    if(strtolower($_SERVER['REQUEST_METHOD']) == 'post')
    {
        //echo '<pre>'.print_r($_POST, true).'</pre>';
        //exit(0);
        $email = $_POST["email"];
        $password = $_POST["password"];

        if($email == 'anushkasarkar312@gmail.com')
        {
            if($password == '123456')
            {
                echo "THANK YOU.. You are logged in..";
                echo '<a href="login.php">LOGOUT</a>';
                exit(0);
            }
            else
            {
                echo 'Incorrect Credetial';
                echo '<a href="login.php">BACK TO LOGIN</a>';
                exit(0);
            }
        }
        else
        {
            echo 'Incorrect Credetial';
            echo '<a href="login.php">BACK TO LOGIN</a>';
            exit(0);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/styles1.css">
    <link rel="stylesheet" href="css/styles2.css">
    <title>Form</title>
    <style type="text/css">
    #msform input, #msform textarea {
        color: black !important;
    }
    </style>
</head>
<body id="bg">
    <div class="container">
        
        <div class="header">
            <div class="head" style="border: 1px solid red;height: 3%;">
                <div class="menu">

                    
                    <ul>
                        <a href="index.html"><li>Home</li></a>
                        <a href="curriculam.html"><li>HS Curriculam</li></a>
                        <a href="form.html"><li>Admission Enquiry</li></a>
                        <a href="gallery.html"><li>Gallery</li></a>
                        <a href="contact.html"><li>Contact Us</li></a>
                    </ul>
                </div>
            </div>
        </div>
        

        <form id="msform" method="post" action=""  style="color: black">
            <input type="email" name="email" placeholder="Email address" />
            <input type="password" name="password" placeholder="Password" />   
            <input type="submit" name="btnSubmit" class="action-button" value="LOGIN" />
        </form>
    </div>
</body>
</html>