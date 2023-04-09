<?php
if(isset($_REQUEST['submit']))
{   $product_id = $_REQUEST['product_id'];
?>
    <fieldset style="width:500px"  > 
    <legend align='center'>DELETE PRODUCT</legend>
    <?php
     require_once "../models/products_model.php";
     $con = getConnection();
     $sql = "SELECT * FROM products where id= '{$product_id}'  ";
     $status = mysqli_query ($con , $sql );
    while ($result = mysqli_fetch_assoc ($status))
    {
    ?>

        <form action="../controllers/delete_product.php">
            <input type="hidden" name="product_id" value ="<?php echo $result['id']; ?>" >
                    Name :
                    <?php
                    echo $result['name'];
                    ?> <br>
                    Buying Price : 
                    <?php
                    echo $result['buying_price'];
                    ?> <br>
                    Selling Price :
                    <?php
                    echo $result['selling_price'];
                    ?>
                    <br>
                    Displayable : 
                    <?php
                    echo $result['displayable'];
    }
                    ?>
                    <hr>
                    <input type="submit" name="submit" value = "Delete" id=""onclick="return confirm('Are you sure you want to delete this product?')">
         </form>
         <h4 align="center" ><a href="display.php">Show Products</a></h4>
         
</fieldset>
<?php
}
?>