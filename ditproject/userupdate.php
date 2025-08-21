<?php
session_start();


if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include'connection.php';


$loggedInUser = $_SESSION['user_id'];

if (isset($_POST['update'])){
		
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		
		$sql = "UPDATE user set first_name='$first_name', last_name='$last_name', email='$email' WHERE user_id = '$loggedInUser'";
		
		
		$result = mysqli_query($connection,$sql);
		if($result){
		header("Location: udashboard.php");
		}
	}


$sql_user = "SELECT user_id, first_name, last_name, email FROM user WHERE user_id = '$loggedInUser'";
$result_user = mysqli_query($connection, $sql_user);

if (!$result_user) {
    die("Query failed: " . mysqli_error($connection));
}
$user_data = mysqli_fetch_assoc($result_user);
$loggedInUserId = $user_data['user_id'];  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Board</title>

    <style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

body {
    
    justify-content: center;
    align-items: center;
	font-family:Poppins;
 
}

.container {
    display: flex;
    flex-direction: column;
    align-items: center;
	padding:45px;
}

h1 {
	
    text-align: center;
    margin-bottom: 20px;
}

.user-info, .booking-info {
    background-color: white;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    width: 690px;
}

h2 {
	font-size:23px;
    margin-bottom: 10px;
	text-align:center;
}

p {
    margin-bottom: 5px;
	font-size:15px;

}

table {
    width: 100%;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 10px;
    text-align: center;
}

th {
    background-color: #f8f8f8;
}
.ebtn{
	
	padding:5px;
	font-family:Poppins;
	font-size:16px;
	width:75px;
	cursor:pointer;
	border-radius:4px;
	border-style:none;
	background-color:#4189ff;
	color:white;
}
input{
    padding: 8px;
    font-size: 16px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    outline: none;
	width:50%;
}
a{
 text-decoration:none;
            color:white;
}
    </style>
</head>
<body>


<?php include "navigation.php"?>



<div class="container">


    <div class="user-info" >
	<form method="POST" action="userupdate.php">
    <h2>Your Profile Information</h2>
    <p><strong>First Name: <br></strong> <input type="text" name="first_name" value="<?php echo $user_data['first_name']; ?>"></p>
    <p><strong>Last Name: <br> </strong><input type="text" name="last_name" value="<?php echo $user_data['last_name']; ?>"></p>
    <p><strong>Email:  <br></strong><input type="text" name="email" value="<?php echo $user_data['email']; ?>"></p>
    <button type="submit" class="ebtn" name="update"> Update</button>
    <button class="ebtn"><a href="udashboard.php">Cancel</a></button>
</form>

    </div>

</body>
</html>