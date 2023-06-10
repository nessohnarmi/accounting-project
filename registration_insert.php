<?php
include 'include/connection.php';  

$name       = $_POST['name'];

$email      = $_POST['email'];
$password   = $_POST['password'];
$mobile_no  = $_POST['mobile_no'];
// $image      = $_FILEST['image']['name'];
// $target     ="images/users/".basename($image);

$sql = "INSERT INTO users(name,,email,password,mobile_no) VALUES ('$name','$email','$password','$mobile_no')" ;

$result = $db->query($sql);

if($result){
    header('Location:users.php');
}
else{
    echo "Data insert Fail!";
}




