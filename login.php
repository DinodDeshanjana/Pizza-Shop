<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <style>
       body{
            background-color: #e5dfd4;
        }
        .loginmain{
            
            background-color: #fcc867ff;
            border-radius:30px;
            width: 100%;
            max-width: 570px;
            margin: 40px auto;
            padding:30px;    
        }
    .loginform{
        display:flex;
    }
.loginimage{
    display:flex;
}
.loginheader{
    text-align:center;
    color:white;
    font-size:25px;
    margin:5px;
}
      .loginimage form label {
            font-size: 18px;
            text-align: left;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }
   .loginimage form input[type="email"],
        .loginimage form input[type="password"] {
            padding: 7px;
            margin-bottom: 18px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 15px;
        }
        
              .loginimage form{
                padding-top:25px;
                padding-left:18px;
              }
                      .loginimage form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 8px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
    </style>

</head>
<body>
    <?php
        include "nav.php";
    ?>

    <div class="loginmain">
        <h3 class="loginheader">Login to Your Account</h3>
        <div class="loginimage">
            <img src="p.png" width="280px">
            <form>
                <label>Username</label><br>
                <input type="email"><br>
                <label>Password</label><br>
                <input type="email"><br>
                <label style="font-size:10px;">Don't have an account? <a href="#">Sign up now</a></label>
                <input type="submit" value="LogIn">
            </form>
        </div>
    </div>
</body>
</html>