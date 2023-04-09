<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>
    <?php
    // Retrieve the product ID from the POST request
    $product_id = $_POST['product_id'];

    // Retrieve the product details from the database
    require_once "../models/products_model.php";
    $con = getConnection();
    $sql = "SELECT * FROM products WHERE id = '$product_id'";
    $result = mysqli_query ($con , $sql );
    $product = mysqli_fetch_assoc($result);

    // Display the form with the current product details
    ?>
    <form method="POST" action="../controllers/update_product.php">
        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $product['name']; ?>"><br><br>
        <label for="buying_price">Buying Price:</label>
        <input type="text" name="buying_price" value="<?php echo $product['buying_price']; ?>"><br><br>
        <label for="selling_price">Selling Price :</label>
        <input type="text" name="selling_price" value="<?php echo $product['selling_price']; ?>"><br><br>
        
        <input type="submit" name="submit" value="Update Product" id="">
    </form>
    <h3>Go to <a href="display.php">Display Page</a></h3>
</body>
</html>
