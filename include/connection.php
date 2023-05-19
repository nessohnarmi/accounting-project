<?php

$db = new mysqli('localhost','root','','accounting-project');

if($db){
    //echo "Database connection successful";
}
else{
    echo "Database connection fail";
}
    
