<?php

include 'include/connection.php';

$id         = $_POST['id'];
$name       = $_POST['name'];
$description = $_POST['description'];


$sql = "UPDATE Products SET name='$name',description='$description' WHERE id='$id'";


$result = $db->query($sql);

if($result){
   header('Location:product.php');
}
