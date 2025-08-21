<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <style>
        		* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background-color: #ffffff;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px 8%;
    background-color: #e5dfd4;
}

h1 {
    
    color: rgb(252, 133, 53);
    font-size: 38px;
}

.nav__links {
    list-style: none;
}

.nav__links li {
    display: inline-block;
    padding: 0 20px;
}

.nav__links li a {
    text-decoration: none;
    font-weight: 600;
    color: rgb(72, 71, 71);
    font-size: 17px;
    cursor: pointer;
    transition: all 0.3s ease 0s;
}

.nav__links li a:hover {
    color: rgb(252, 133, 53);
}

.rebtn {
    display: flex;
    gap: 1.5rem;
}

button {
    border: none;
    border-radius: 20px;
    background-color: rgb(252, 133, 53);
    padding: 8px 25px;
    color: white;
    cursor: pointer;
    font-weight: 600;
    font-size: 17px;
    transition: all 0.3s ease;
}

button:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
	<button>Sign In</button>
	<button>Sign Up</button>
	</div>
</header>
</body>
</html>