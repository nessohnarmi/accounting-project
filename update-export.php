<?php

include 'include/connection.php';

$id                  = $_POST['id'];
$name                = $_POST['name'];
// $image            = $_FILES['image']['name'];
// $target           ="images/".basename($image);
$product_id          = $_POST['product_id'];
$date                = $_POST['date'];
$buy_rate            = $_POST['buy_rate'];
$initial_quantity    = $_POST['initial_quantity'];
$description         = $_POST['description'];


$sql = "UPDATE exports SET name='$name',image='$image',product_id='$product_id',date='$date',buy_rate='$buy_rate',initial_quantity='$initial_quantity',description='$description' WHERE id='$id'";


$result = $db->query($sql);

if($result){

//  if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
      header('Location:export.php');
    
  }
//  }
