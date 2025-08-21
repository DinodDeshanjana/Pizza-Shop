<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        body{
            font-family:Poppins;
            background-color:#fcf5e5;
            display:flex;
            align-items:center;
            justify-content:center;
            height:100vh;
            margin:0px;
        }

        .login-container{
            background:#fff;
            border-radius:10px;
            box-shadow: 0 4px 15px rgb(0,0,0,0.1);
            display:flex;
            overflow:hidden;
            width:800px;
            max-width:90%;
        }

        .image{
            background-color: #ffe77aff;
            padding:20px;
            display:flex;
            align-items:center;
            justify-content:center;
            width:40%;
        }
        .image img{
            max-width:100%;
            height:auto;
        }

        .form-section{
            padding:40px;
            color: #313435db;
        }

        .form-section label{
            display:block;
            margin-bottom:5px;
            font-weight:bold;
        }

        .form-section input{
            width:100%;
            padding:10px;
            margin-bottom:15px;
            border:1px solid #ccc;
            border-radius:5px;
            font-size:1rem;
            box-sizing: border-box;
        }

        .form-section button{
            width:100%;
            padding:12px;
            background-color: #ff7c2bff;
            color:white;
            border:none;
            border-radius:5px;
            font-size:1.1rem;
            cursor:pointer;
            box-sizing: border-box;
        }
        .form-section .links{
            margin-top:10px;
            text-align:left;
        }
        .form-section .links a {
            color:#cc3300;
            text-decoration:none;
        }

        @media (max-width: 600px){
            .login-container{
                flex-direction:column;
            }
            .image, .form-section{
                width:100%;
        }
        .form-section{
            padding:20px;
        }
    </style>
</head>
<body>


    <div class="login-container">
        <div class="image">
            <img src="loginimage.png">
        </div>
        <div class="form-section">
            <h2>Log In Page</h2>
            <form>
                <label>Email</label>
                <input type="email" id="email" required>

                <label>Password</label>
                <input type="password" id="password" required>

                <button type="submit">Log In</button>
             </form>
             <div class="links">
             <a href="">create a new account</a>
            </div>
        </div>
    </div>
</body>
</html>