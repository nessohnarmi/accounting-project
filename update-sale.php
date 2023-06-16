<?php

include 'include/connection.php';  
$id                  = $_POST['id'];
$date                 = $_POST['date'];
$product_name         = $_POST['product_name'];
$qty                  = $_POST['qty'];
$price                =$_POST['price'];
$status              = "Out Stock" ;




$sql = "UPDATE sale SET date='$date',product_name='$product_name',qty='$qty',price='$price',status='$status' WHERE id='$id' ";


$result = $db->query($sql);


if($result){
      header('Location:sale.php');
  }




