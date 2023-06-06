<?php include 'include/header.php'; 
session_start();
if(isset( $_SESSION['id'] )):
?>
  <div class="app-content">
    <div class="app-content-header">
      <h1 class="app-content-headerText">Home</h1>
    </div>


  </div>

<?php 

else:
  header('Location:login.php');

endif;

include 'include/footer.php'; 
?>


