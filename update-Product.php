<?php

include 'include/connection.php';  
$id                  = $_POST['id'];
$name                = $_POST['name'];

// Image Code
// $target_file = "images/products/";
// $image = $target_file . basename($_FILES["image"]["name"]);

$purchase_price       = $_POST['purchase_price'];
$sale_price           = $_POST['sale_price'];
$initial_quantity     = $_POST['initial_quantity'];
$description          = $_POST['description'];




$sql = "UPDATE Products SET name='$name',image='$image',purchase_price='$purchase_price',sale_price='$sale_price',initial_quantity='$initial_quantity',description='$description' WHERE id='$id'";


$result = $db->query($sql);


if($result){

  // if(move_uploaded_file($_FILES["image"]["tmp_name"], $image)){

      header('Location:product.php');
  }

// }


