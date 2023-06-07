<?php
include 'include/connection.php';  

$name       = $_POST['name'];
$desription    = $_POST['description'];


$sql = "INSERT INTO Products(name,description) VALUES ('$name','$description')" ;

$result = $db->query($sql);

if($result){
    header('Location:product.php');
}
else{
    echo "Data insert Fail!";
}
