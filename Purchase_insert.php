<?php
include 'include/connection.php';  

$date                 = $_POST['date'];
$product_name         = $_POST['product_name'];
$qty                  = $_POST['qty'];
$price                =$_POST['price'];

$status               = "In Stock" ;

$sql = "INSERT INTO purchase(date,product_name,qty,price,status ) VALUES ('$date','$product_name ','$qty ','$price','$status')" ;


$result = $db->query($sql);

if($result){
    header('Location:purchase.php');
}
else{
    echo "Data insert Fail!";
}
    



