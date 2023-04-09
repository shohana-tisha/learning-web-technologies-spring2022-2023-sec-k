<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product </title>
</head>
<body >
    <div >

        <fieldset style="width:500px"  > 
            <legend align='center'>ADD PRODUCT</legend>
            <?php
            session_start();
        if(isset( $_SESSION['msg']))
        {
            echo "<h3 align= 'center'>{$_SESSION['msg']}</h3>";

            unset( $_SESSION['msg']);
        }
            ?>
            <form action="../controllers/add_product_check.php">

            
        Name : <br>
        <input type="text" name="name" id=""> <br> <br>
        Buying Price : <br>
        <input type="number" name="buying_price" id=""> <br> <br>
        Selling Price : <br>
        <input type="number" name="selling_price" id="">
        <hr>
        <input type="checkbox" name="display" id=""> Display
        <hr>
        <input type="submit" name="submit" value="Save" id="">
        </form>
        
        <h4 align="center" ><a href="display.php">Show Products</a></h4>
        </fieldset>
    </div>

    
</body>
</html>