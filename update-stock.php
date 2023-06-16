<?php

include 'include/connection.php';  
$id                  = $_POST['id'];
$product_name                 = $_POST['product_name'];
$purchase_product_price       = $_POST['purchase_product_price'];
$purchase_qty                 = $_POST['purchase_qty'];
$purchase_price               =$_POST['purchase_price'];
$sale_product_price           =$_POST['sale_product_price'];
$sale_qty                     =$_POST['sale_qty'];
$sale_price                   =$_POST['sale_price'];





$sql = "UPDATE stock SET product_name='$product_name',purchase_product_price='$purchase_product_price',purchase_qty='$purchase_qty',purchase_price='$purchase_price',sale_product_price='$sale_product_price',sale_qty='$sale_qty',sale_price='$sale_price' WHERE id='$id' ";


$result = $db->query($sql);


if($result){
      header('Location:stock.php');
  }




