<?php
if(isset($_REQUEST['submit']))
{
    $product_id = $_REQUEST['product_id'];
    require_once "../models/products_model.php";
    
    $product =['id'=> $product_id];
    $status = delete_product($product);
    if ($status)
    {
        session_start();
        $_SESSION['msg']= "Product Successfully Removed !";
        header("location:../views/display.php");
    }
    else 
    {
        echo " Error while deleting !";
    }
}
else 
{
    echo "invalid request ";
}
?>