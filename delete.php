<?php
include 'include/connection.php';

$id = $_GET['id'] ;

$sql = "DELETE FROM users WHERE id='$id'";

$result = $db->query($sql);

if($result)
    header('Location:users.php');

