<?php
include 'include/connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM stock WHERE id='$id'";

$result = $db->query($sql);

if($result)
    header('Location:stock.php');

