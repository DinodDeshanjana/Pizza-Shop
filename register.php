<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Poppins, sans-serif;
            background-color: #fcf5e5;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            background-color: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
        }

        header h1 {
            font-size: 1.5rem;
            color: #313435;
            font-weight: 600;
        }

        .nav__links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav__links a {
            text-decoration: none;
            color: #313435;
            font-weight: 500;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .nav__links a:hover {
            color: #ff7c2b;
        }

        .rebtn {
            display: flex;
            gap: 1rem;
        }

        .rebtn button {
            padding: 0.5rem 1rem;
            border: 2px solid #ff7c2b;
            background-color: transparent;
            color: #ff7c2b;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .rebtn button:hover {
            background-color: #ff7c2b;
            color: white;
        }

        .rebtn button a {
            text-decoration: none;
            color: inherit;
        }

        main {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .login-container {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
            display: flex;
            overflow: hidden;
            width: 900px;
            max-width: 90%;
            animation: slideUp 0.6s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .image {
            background: linear-gradient(135deg, #ffe77a 0%, #ffdd44 100%);
            padding: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40%;
            position: relative;
        }

        .image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="2" fill="rgba(255,255,255,0.1)"/><circle cx="80" cy="40" r="3" fill="rgba(255,255,255,0.1)"/><circle cx="40" cy="80" r="2" fill="rgba(255,255,255,0.1)"/></svg>');
        }

        .image img {
            max-width: 100%;
            height: auto;
            z-index: 1;
            position: relative;
        }

        .form-section {
            padding: 40px;
            color: #313435;
            width: 60%;
        }

        .form-section h2 {
            margin-bottom: 1.5rem;
            font-size: 1.8rem;
            font-weight: 600;
            color: #313435;
            text-align: center;
        }

        .form-row {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }

        .form-group {
            flex: 1;
        }

        .form-section label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #555;
        }

        .form-section input {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 20px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            font-family: inherit;
        }

        .form-row input {
            margin-bottom: 0;
        }

        .form-section input:focus {
            outline: none;
            border-color: #ff7c2b;
            box-shadow: 0 0 0 3px rgba(255, 124, 43, 0.1);
        }

        .form-section button {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #ff7c2b 0%, #ff6b1a 100%);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-family: inherit;
            margin-top: 10px;
        }

        .form-section button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 124, 43, 0.3);
        }

        .form-section button:active {
            transform: translateY(0);
        }

        .links {
            margin-top: 20px;
            text-align: center;
        }

        .links h1 {
            font-size: 0.9rem;
            font-weight: 400;
            color: #666;
        }

        .links a {
            color: #ff7c2b;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
            margin-left: 5px;
        }

        .links a:hover {
            color: #e6691f;
        }

        .password-requirements {
            font-size: 0.8rem;
            color: #666;
            margin-top: -15px;
            margin-bottom: 20px;
            line-height: 1.4;
        }

        @media (max-width: 768px) {
            header {
                flex-direction: column;
                gap: 1rem;
                padding: 1rem;
            }

            .nav__links {
                gap: 1rem;
            }

            .rebtn {
                order: -1;
            }

            main {
                padding: 1rem;
            }

            .login-container {
                flex-direction: column;
                width: 100%;
                max-width: 450px;
            }

            .image, 
            .form-section {
                width: 100%;
            }

            .image {
                padding: 30px;
                min-height: 200px;
            }

            .form-section {
                padding: 30px;
            }

            .form-row {
                flex-direction: column;
                gap: 0;
            }
        }

        @media (max-width: 480px) {
            .nav__links {
                display: none;
            }

            body {
                padding: 0;
            }
            
            main {
                padding: 10px;
            }
            
            .form-section {
                padding: 20px;
            }

            .form-section h2 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Pizza House</h1>
        <nav>
            <ul class="nav__links">
                <li><a>Home</a></li>
                <li><a>Store</a></li>
                <li><a>Contact Us</a></li>
                <li><a>About</a></li>
            </ul>
        </nav>
        <div class="rebtn">
            <button><a href="login.php">Sign In</a></button>
            <button><a href="register.php">Sign Up</a></button>
        </div>
    </header>

    <main>
        <div class="login-container">
        <div class="image">
            <img src="loginimage.png" alt="Registration illustration">
        </div>
        <div class="form-section">
            <h2>Create Account</h2>
            <form>
                <div class="form-row">
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" id="firstName" name="firstName" required>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" id="lastName" name="lastName" required>
                    </div>
                </div>

                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <div class="password-requirements">
                    Password must be at least 8 characters long
                </div>

                <button type="submit">Create Account</button>
            </form>
            <div class="links">
                <h1>Already have an account?<a href="login.php">Sign In</a></h1>
            </div>
        </div>
    </div>
</body>
</html>