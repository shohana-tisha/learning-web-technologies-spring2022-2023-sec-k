<?php
require_once "db.php";

//function to add 
function add_products ($product) 
{
    $con = getconnection();
    $sql = "INSERT INTO products VALUES ('','{$product['name']}','{$product['buying_price']}','{$product['selling_price']}' , '{$product['profit']}' , '{$product['displayable']}' )";

    $status = mysqli_query($con, $sql);
    if ($status)
    {
        return true ; 
    }
    else 
    {
        return false ; 
    }
}
// function to update product 
function update_product($product)
{
    $con = getconnection();
    $sql = "UPDATE products 
            SET name = '{$product['name']}' , buying_price = '{$product['buying_price']}', selling_price = '{$product['selling_price']}', profit = '{$product['profit']}' 
            WHERE id = '{$product['id']}'";

    $status = mysqli_query($con , $sql);
    return $status;

}
// function to delete specific product
function delete_product($product)
{
    $con = getconnection();
    $sql = "DELETE FROM products WHERE id = '{$product['id']}'";
    $status = mysqli_query ($con , $sql);
    return $status ;

}
?>