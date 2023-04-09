<?php
if(isset($_REQUEST['submit']))
{
    $name = $_REQUEST['name'];
    $buying_price = $_REQUEST['buying_price'];
    $selling_price = $_REQUEST['selling_price'];
    $product_id = $_REQUEST['product_id'];
    $profit = $selling_price - $buying_price;
    echo $profit;
    echo $product_id;
    echo $name;
 

    require_once "../models/products_model.php";

    $product = ['id'=>$product_id ,'name'=> $name , 'buying_price' => $buying_price , 'selling_price' => $selling_price , 'profit'=>$profit];
    $status = update_product($product);
    if ($status)
    {   
        session_start();
        $_SESSION['msg']= "Product Successfully Updated !";
        header("location:../views/display.php");

    }
    else 
    {
        echo "error!";
    }


}
else 
{
    echo "Invalid request";
}
?>