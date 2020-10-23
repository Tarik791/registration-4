<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        body {
            font-family:sans-serif; background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(1.jpg) no-repeat;
            background-size:cover;
            height: 100vh;
        }
        form {
            opacity: 0.9;
            background-color: gray; margin-top: 35px; width:400px;
            padding:20px; border-top-right-radius: 60px; 
            border-bottom-left-radius: 60px;
        }
        input[type=text], input[type=phoneCode], input[type=email], input[type=password], input[type="phone"]{
            opacity: 0.9;
            margin:10px 0px; padding:10xp; border-bottom-left-radius:60px;
            width:300px; height:50px; font-size: 16px; 
            text-align: center;
        }
    
        input[type=submit]{
            opacity: 0.9;
            margin:10px 0px; padding:10px; border-radius:20px; 
            width:260px; border:2px solid #fff; color:#fff; font-size:16px;
            transition: 0.6s ease;
            text-decoration: none;
            background-color: darkgray;
        }
        input [type=submit]:hover{
            background-color: #fff;
            color: #000;
        }
        h2{
            color: #fff;
            font-family:sans-serif;
        }

    
    
    </style>
</head>
<body>
<center>
<form action="insert.php" method="POST" onsubmit="return validation();">
<table>
        <h2>Register to my website</h2>
        <span>Or <a href="login.php" style="color: #fa700c;">Log in</a></span><br>
        
            <input type="text" name="username" id="username" placeholder="Enter your name" required><br>
        
        
            
            <input type="password" name="password" id="password" placeholder="Enter your password" required><br>
        
        
        
            
            <input type="email" name="email" id="email" placeholder="Enter Your email" required>
        
            <br>
    
        <select type="phoneCode" name="phoneCode" id="" required><br>
        <br>
        
        <option selected hidden>Select num phone: &nbsp;</option><br>
            <br>
            <option value="387">387</option>
            <option value="987">987</option>
            <option value="965">965</option>
            <option value="945">945</option>
            <option value="234">234</option>
            <option value="122">112</option>
        <br>
        </select>
        <br>
        <input type="phone" name="phone" placeholder="Select your phonenumber" id="">
        
        <br>
            Male :<input type="radio" id="radio" name="gender" value="m" required>
            Female :<input type="radio" id="radio" name="gender" value="f" required>
        <br>
            <input type="submit" name="" id="" value="Submit">
    
   </table> 
   <div id="myerror" style="color: red; background-color: #ddd; text-decoration:underline; font-size:18px; width:300px;">
   
   </div>
</form>
</center>





<script type="text/javascript">
        // javascript 
        function validation(){
            var name = document.getElementById('username').value;
            var email = document.getElementById('email').values;
            var password = document.getElementById('password').value;
            var radio = document.getElementById('radio').value;
        
            if(name=="" || password=="" || email=="" || radio==""){

                document.getElementById('myerror').innerHTML ="All fields are required";

                return false;
            }else if(name.length<5){
                document.getElementById('myerror').innerHTML ="+name must be atlest 5 characters";
                
                return false;
            }else if(password.length<8){
                document.getElementById('myerror').innerHTML ="password must be atlest 9 characters";

                return false;
            
            }else{
            return true;
        }
}
        
        
        
        
</script>



</body>
</html>