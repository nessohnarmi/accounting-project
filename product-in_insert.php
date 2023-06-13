<?php
include 'include/connection.php';  

$name                = $_POST['name'];
// $image               = $_FILES['image']['name'];
// $target              ="images/".basename($image);
$product_id          = $_POST['product_id'];
$date                = $_POST['date'];
$buy_rate            = $_POST['buy_rate'];
$initial_quantity    = $_POST['initial_quantity'];
$type                = $_POST['type'];
$description         = $_POST['description'];
$status ="In Stock";


$sql = "INSERT INTO Products(name,image,product_id,date,buy_rate,initial_quantity,type,description,status ) VALUES ('$name','$image','$product_id ','$date','$buy_rate ','$initial_quantity','$type','$description','$status')" ;


$result = $db->query($sql);

if($result){
    // if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        header('Location:product_in.php','Location:product.php');
       echo "Data insert successful!";
    }
  
   
 
// }
else{
    echo "Data insert Fail!";
}


