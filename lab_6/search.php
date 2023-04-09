<?php
require_once "../models/products_model.php";

// Check if the search query is set
if (isset($_REQUEST['submit'])) {
    
    $search_query = $_REQUEST['search_query'];

    // Build the SQL query to search for products based on search Keyword
    $sql = "SELECT * FROM products WHERE name LIKE '%$search_query%'";
} else {
  
    $sql = "SELECT * FROM products";
}

// Execute the SQL query and display the results
$status = mysqli_query(getConnection(), $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Products</title>
</head>
<body>
    <div>
        <fieldset style="width:500px">
            <legend align='center'>
            Product List
            </legend>

            
        
        <form method="GET" action="search.php">
            <input type="text" name="search_query" placeholder="Search products...">
            <input type="submit" name="submit" value="Search" id="">
        </form>
        <br>

        <table border="1">
            <tr>
                <th>Name</th>
                <th>Profit</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php while ($result = mysqli_fetch_assoc($status)) { ?>
            <tr>
                <td><?php echo $result['name']; ?></td>
                <td><?php echo $result['profit']; ?></td>
                <td>
                    <form method="POST" action="edit_product.php">
                        <input type="hidden" name="product_id" value="<?php echo $result['id']; ?>">
                        <input type="submit" name="submit" value="Edit" id="">
                       
                    </form>
                </td>
                <td>
                    <form method="POST" action="../views/delete_show.php" >
                        <input type="hidden" name="product_id" value="<?php echo $result['id']; ?>">
                        <input type="submit" name="submit" value="Delete" > 
                    </form>
                </td>
            </tr>
            <?php } ?>
        </table>
      
        </fieldset>
        <br>
        <a href="display.php">Back</a>
    </div>
</body>
</html>
