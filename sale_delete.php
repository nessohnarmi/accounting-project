<?php
include 'include/connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM sale WHERE id='$id'";

$result = $db->query($sql);

if($result)
    header('Location:sale.php');

