<?php 
session_start();
require 'insert.php';

if(isset($_POST['submit'])) {
    $stmt = $conn->prepare("SELECT * FROM register where username = :username");
    
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
    body {
        font-family:sans-serif; 
        background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(1.jpg) no-repeat;
        background-size:cover;
        height: 100vh;
    }
    form {
        background-color: transparent; top:50%;
        width: 400px; padding: 10px; left: 50%;
        border-top-right-radius: 60px; border-bottom-left-radius: 60px;
        transform: translate(-50%, -50%); position: absolute;
    }
    input[type=text], input[type=email], input[type=password]{
        margin:10px 0px; padding: 10px; border-radius: 20px; width: 250px; border:none;
    }
    
    input[type=submit]{
        margin:10px 0px; padding:10px; border-radius: 20px; background-color: green;
        width: 260px; border: 2px solid #ddd; color: #fff; font-size:16px;

    }
    input[type=submit]:hover {
        background-color:#fa700;
    }
    
    </style>
</head>
<body>
    <center>
        <form action="" method="post" autocomplete="off" onsubmit="return validation();">
        <h2 style="color: #ddd">Greenade</h2>
        <span>Or <a href="index.php" style="color: #fa700c;">SignUp</a></span><br>
        <input type="text" name="username" placeholder="Enter your username" id="name"><br>

        <input type="password" name="password" placeholder="Enter your password" id="password"><br>

        <input type="submit" name="submit" value="Login"><br>
        <span><a href="#" style="color: #fa700c;">forgot password</a></span>
        <div id="myerror" style="color:red; background-color: #ddd; text-decoration:underline;font-size:18px;width:300px">
        
        <?php echo isset($error) ? $error: ''; ?>

        </div>
        </form>
    
    </center>
</body>
</html>