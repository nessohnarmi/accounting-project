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
include 'include/connection.php'; 

$sql ="SELECT * FROM Products" ;
$result = $db->query($sql);


?>

<div class="app-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h2>Product Purchase Page</h2>  <hr>  <br><br><br><br><br>             
            </div>
            
        </div>
    </div>     
       
                    <tbody>
                            <?php while($row = $result->fetch_assoc()): ?>
                                                   
                    
                                
                            
                                
                                                
                                                
                                
                               
                                <?php endwhile; ?>

                                <div class="container">
                                <div class="row">
                                            <div class="col-md-10">
                                            <a href="Product_in.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">All Product</a>
                                            
                                            </div>
                                    
                                    </div>
                                </div>
                    </tbody>
    
</div>
<?php 


include 'include/footer.php'; 

?>