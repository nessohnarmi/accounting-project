<?php
include 'include/connection.php';  

$date                = $_POST['date'];
$description         = $_POST['description'];
$account_book        = $_POST['account_book'];
$debit               = $_POST['debit'];
$credit              = $_POST['credit'];


$sql = "INSERT INTO accounts(date,description,account_book,debit,credit ) VALUES ('$date','$description','$account_book ','$debit ','$credit')" ;


$result = $db->query($sql);

if($result){
    header('Location:accounts.php');
}
else{
    echo "Data insert Fail!";
}
    




