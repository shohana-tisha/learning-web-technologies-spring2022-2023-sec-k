<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Product </title>
</head>
<body >
    <div >

        <fieldset style="width:500px"  > 
            <legend align='center'>
                <h3>
                Display
                </h3>
            </legend>
            <?php
            session_start();
            if(isset($_SESSION['msg']))
            {
                ?>
                <h3 align="center"><?php echo $_SESSION['msg']?> </h3>
                <?php unset($_SESSION['msg']);
            }
           ?>
           <table border=1px align='center'>
            <tr>
                <th>Name</th>
                <th>Profit</th>
            </tr>

            <?php
            require_once "../models/products_model.php";
            $con = getConnection();
            $sql = "SELECT * FROM products where displayable = 'yes' ";
            $status = mysqli_query ($con , $sql );
           while ($result = mysqli_fetch_assoc ($status))
           {
            

            ?>
            <tr>
                <td>
                   <?php echo $result['name'];
                   ?>
                </td>
                <td>
                   <?php echo $result['profit'];
           
                   ?>
                </td>
                <td>
                <form method="POST" action="edit_product.php">
                    <input type="hidden" name="product_id" value="<?php echo $result['id']; ?>">
                    <input type="submit" name="submit" value="Edit" id="">
               </form>
                </td>
                <td>
                <form method="POST" action="../views/delete_show.php">
                    <input type="hidden" name="product_id" value="<?php echo $result['id']; ?>">
                   <input type="submit" name="submit" value="Delete" > 
                </form>
                <?php
           }
           ?>
                </td>
            </tr>
           </table>
         
        <h4 align= 'center'> <a href="add_product.php">Click</a> To ADD Products</h4>
        <h4 align="center" ><a href="search.php">Search </a>For the Products</h4>
        
        </fieldset>
    </div>

    
</body>
</html>