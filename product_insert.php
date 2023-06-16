<?php
include 'include/connection.php';  

$name                = $_POST['name'];

// Image Code
$target_file = "images/products/";
$image       = $target_file . basename($_FILES["image"]["name"]);

$purchase_price       = $_POST['purchase_price'];
$sale_price           = $_POST['sale_price'];
$initial_quantity     = $_POST['initial_quantity'];
$description          = $_POST['description'];
$status = "In Stock" ;

$sql = "INSERT INTO Products(name,image,purchase_price,sale_price,initial_quantity,description,status ) VALUES ('$name','$image','$purchase_price ','$sale_price ','$initial_quantity','$description','$status')" ;


$result = $db->query($sql);

if($result){

    if(move_uploaded_file($_FILES["image"]["tmp_name"], $image)){

        header('Location:product.php');
    }
    

}


