<?php
include 'include/connection.php';  

$product_name                 = $_POST['product_name'];
$purchase_product_price       = $_POST['purchase_product_price'];
$purchase_qty                 = $_POST['purchase_qty'];
$purchase_price               =$_POST['purchase_price'];
$sale_product_price           =$_POST['sale_product_price'];
$sale_qty                     =$_POST['sale_qty'];
$sale_price                   =$_POST['sale_price'];




$sql = "INSERT INTO stock(product_name,purchase_product_price,purchase_qty,purchase_price,sale_product_price,sale_qty,sale_price ) VALUES ('$product_name ','$purchase_product_price ','$purchase_qty','$purchase_price','$sale_product_price','$sale_qty','$sale_price')" ;


$result = $db->query($sql);

if($result){
    header('Location:stock.php');
}
else{
    echo "Data insert Fail!";
}
    



