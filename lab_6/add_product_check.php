<?php
if(isset($_REQUEST['submit']))
{   session_start();
    $name = $_REQUEST['name'];
    $buying_price = $_REQUEST['buying_price'];
    $selling_price = $_REQUEST['selling_price'];
    $displayable = "no";
    if (isset($_REQUEST['display']))
        {
            $displayable = "yes";
        }
    // including files 
    require_once "../models/products_model.php";
    if ($name == '' || $buying_price == '' || $selling_price == '')
    {
        //echo " Fields can not be empty!! ";
        $_SESSION['msg']= "Please Fill all the Fields !";
            header("location:../views/add_product.php");


    }
    else 
    {   $profit = $selling_price - $buying_price;
        $product = ['name'=> $name, 'buying_price'=>$buying_price , 'selling_price'=> $selling_price , 'profit'=>$profit , 'displayable'=> $displayable ];
        $status = add_products($product);
        if ($status)
        {
            //echo "product Added ";
            $_SESSION['msg']= "Product Added Successfully;";
            header("location:../views/add_product.php");

        }
        else 
        { 
            echo "Product not Added!! ";

        }
    }


}
?>