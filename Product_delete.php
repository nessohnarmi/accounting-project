<?php
include 'include/connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM Products WHERE id='$id'";

$result = $db->query($sql);

if($result)
    header('Location:Product.php');

