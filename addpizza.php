<?php
include "connection.php";

if (isset($_POST['add'])) {
    $_pname = $_POST['pizzaname'];
    $_discription = $_POST['discription'];
    $_price = $_POST['price'];

    // Handle image upload
    $imageName = $_FILES['image']['name'];
    $imageTmp = $_FILES['image']['tmp_name'];
    $imageFolder = "uploads/" . basename($imageName);

    if (move_uploaded_file($imageTmp, $imageFolder)) {
        // Insert into database
        $sql = "INSERT INTO typepizza (pname, pdiscription, prize, image) VALUES ('$_pname', '$_discription', '$_price', '$imageName')";

        if (mysqli_query($connection, $sql)) {
            header("Location: ok.php");
            exit();
        } else {
            echo "Database Error: " . mysqli_error($connection);
        }
    } else {
        echo "Image upload failed!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Pizza</title>
</head>
<body>

<form method="POST" enctype="multipart/form-data">
    <label>Enter Pizza Name</label>
    <input name="pizzaname" type="text" required><br><br>

    <label>Description</label>
    <input name="discription" type="text" required><br><br>

    <label>Pizza Image</label>
    <input name="image" type="file" accept="image/*" required><br><br>

    <label>Price</label>
    <input name="price" type="text" required><br><br>

    <button type="submit" name="add">Add</button>
</form>

</body>
</html>
