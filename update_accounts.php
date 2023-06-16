<?php

include 'include/connection.php';  
$id                  = $_POST['id'];
$date                = $_POST['date'];
$description         = $_POST['description'];
$account_book        = $_POST['account_book'];
$debit               = $_POST['debit'];
$credit              = $_POST['credit'];




$sql = "UPDATE accounts SET date='$date',description='$description',account_book='$account_book',debit='$debit',credit='$credit' WHERE id='$id' ";


$result = $db->query($sql);


if($result){
      header('Location:accounts.php');
  }




