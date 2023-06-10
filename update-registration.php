<?php

include 'include/connection.php';

$id         = $_POST['id'];
$name       = $_POST['name'];

$email      = $_POST['email'];
$password   = $_POST['password'];
$mobile_no  = $_POST['mobile_no'];

$sql = "UPDATE users SET name='$name', email='$email', password='$password', mobile_no='$mobile_no' WHERE id='$id'";


$result = $db->query($sql);

if($result){
   header('Location:users.php');
}
