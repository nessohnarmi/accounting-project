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

$sql ="SELECT * FROM Products ORDER BY id DESC" ;

$result = $db->query($sql);


?>

<div class="app-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <h2>Products</h2>                
            </div>
            <div class="col-md-2">
                <a href="Product_add.php" class="btn btn-success">Add New Product</a>
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
                        <th><b>Purchase Price</b></th>
                        <th><b>Sale Price</b></th>
                        <th><b>Initial Quantity</b></th>                        
                        <th><b>Status</b></th>
                        <th><b>Action</b></th>
                       
                    </thead>
                    <tbody>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>                        
                            <td><?php echo $row['id'] ; ?></td>
                            <td><?php echo $row['name'] ; ?></td>
                            <td> <img src="<?php echo $row['image']; ?>" width="50px" height="50px"> </td>
                            <td>BDT. <?php echo $row['purchase_price'] ; ?>.00</td> 	 
                            <td>BDT. <?php echo $row['sale_price'] ; ?>.00</td> 	 
                            <td><?php echo $row['initial_quantity'] ; ?></td>
                            <td><?php echo $row['status'] ; ?></td>                   
                        <td>
                            <a href="Product_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                            <a href="Product_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
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