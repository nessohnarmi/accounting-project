<?php 
error_reporting(0);
ob_start();
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
if(!isset($_SESSION['id'])){
header('Location:login.php');
}
ob_end_clean();

include 'include/header.php'; 
?>
<div class="app-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Home page  </h2>      <hr>          
            </div>
           
        </div>
    </div>  

<?php 
header('Location:login.php');


?>


