<?php
include "connection.php";

// Fetch all pizzas
$sql = "SELECT * FROM typepizza";
$result = mysqli_query($connection, $sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza House</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

 	<link rel="stylesheet" href="style.css">



</head>
<body>

<?php
    include "nav.php";
?>

<section class="main__body">
	<div class="main__body1">
	<h1 class="main__head">Artisan Pizzas<br> Crafted with<br> Passion</h1>
	<p>Experience authentic italian flavors with our wood-fired pizzas mode from localy-sourced ingredients</p>
    <button style="padding:14px; border-radius:10px;">Oreder Pizza</button>
	</div>
	<div class="main__bodyimage">
	<img src="p.png" height="450px">
	</div>
	
</section>
<section class="menu" id="menu">
    <h2>Our Menu</h2>
    <div class="menu-container">
    
<?php 
$i = 0;
while ($row = mysqli_fetch_assoc($result)) {  
        ?>
        <div class="menu-card">
            <div class="menu-card-image">
                <img src="uploads/<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['pname']); ?>">
            </div>
            <div class="menu-card-content">
                <h3><?php echo htmlspecialchars($row['pname']); ?></h3>
                <p><?php echo htmlspecialchars($row['pdiscription']); ?></p>
                <div class="price">Rs. <?php echo htmlspecialchars($row['prize']); ?></div>
                <button style="margin:10px;">Add</button>
            </div>
        </div>
        <?php
    } 


?>
</section>
<!--

            <div class="menu-card">
                <div class="menu-card-image">
                    <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?w=400&h=200&fit=crop" alt="Pepperoni Pizza">
                </div>
                <div class="menu-card-content">
                    <h3>Pepperoni Pizza</h3>
                    <p>Spicy pepperoni, mozzarella, and tomato sauce</p>
                    <div class="price">$16.99</div>
                </div>
            </div>

            <div class="menu-card">
                <div class="menu-card-image">
                    <img src="https://images.unsplash.com/photo-1621996346565-e3dbc6d2c5f7?w=400&h=200&fit=crop" alt="Spaghetti Carbonara">
                </div>
                <div class="menu-card-content">
                    <h3>Spaghetti Carbonara</h3>
                    <p>Classic Roman pasta with eggs, cheese, and pancetta</p>
                    <div class="price">$12.99</div>
                </div>
            </div>
        </div>
    </section>

-->

<!--Feaucter Section-->

<section class="features" id="features">
    <div class="features-grid">
        <div class="feature-card">
            <i class="fa-solid fa-fire"></i>
            <h3>Wood-Fired Ovem</h3>
            <p>authentic 900F beak oven cooking</p>
        </div>
        <div class="feature-card">
            <i class="fa-solid fa-seedling"></i>
            <h3>Wood-Fired Ovem</h3>
            <p>authentic 900F beak oven cooking</p>
        </div>
          <div class="feature-card">
            <i class="fa-solid fa-clock"></i>
            <h3>Wood-Fired Ovem</h3>
            <p>authentic 900F beak oven cooking</p>
        </div>
    </div>
</section>
</body>
</html>
