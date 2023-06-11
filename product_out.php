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
                <h2>Product</h2>                
            </div>
            <div class="col-md-2">
            <a href="Product-out_add.php" class="btn btn-success">Add New</a>
            </div>
        </div>
    </div>    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <table class="table ">
                    <thead>
                        <th><b>ID</b></th>
                        <th><b>Product Name</b></th>
                        <th><b>Image</b></th>
                        <th><b>Product_id</b></th>
                        <th><b>Date</b></th>
                        <th><b>Buy Rate</b></th>
                        <th><b>Initial Quantity</b></th>
                        <!-- <th><b>Type</b></th> -->
                        <th><b>Description</b></th>
                       
                    </thead>
                    <tbody>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>                        
                            <td><?php echo $row['id'] ; ?></td>
                            <td><?php echo $row['name'] ; ?></td>
                            <td><img src="<?php echo "images/".$row['image'] ; ?>"width="50" alt=""></td>
                            <td><?php echo $row['product_id'] ; ?></td> 
                            <td><?php echo $row['date'] ; ?></td> 	 
                            <td><?php echo $row['buy_rate'] ; ?></td>
                            <td><?php echo $row['initial_quantity'] ; ?></td>
                            <!-- <td><?php echo $row['type'] ; ?></td> -->
                            <td><?php echo $row['description'] ; ?></td>

                        
                        <td>
                            <a href="Product-out_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Out</a>
                            <!-- <a href="export_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a> -->
                            
                        </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php 


include 'include/footer.php'; 

?>