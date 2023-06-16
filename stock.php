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

$sql ="SELECT * FROM stock" ;

$result = $db->query($sql);


?>

<div class="app-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <h2>Stock Page </h2>                
            </div>
            <div class="col-md-2">
                <a href="stock_add.php" class="btn btn-success">Add New Stock</a>
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
                        <th><b>Purchase product price</b></th>
                        <th><b>Purchase qty</b></th>
                        <th><b>Purchase price</b></th>
                        <th><b>Sale product price</b></th>
                        <th><b>Sale qty</b></th>
                        <th><b>Sale price </b></th>
                        <th><b>Action</b></th>
                       
                    </thead>
                    <tbody>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>                        
                            <td><?php echo $row['id'] ; ?></td>
                            <td><?php echo $row['product_name'] ; ?></td>
                            <td>BDT. <?php echo $row['purchase_product_price'] ; ?>.00</td>
                            <td><?php echo $row['purchase_qty'] ; ?></td>
                            <td>BDT. <?php echo $row['purchase_price'] ; ?>.00</td>
                            <td>BDT. <?php echo $row['sale_product_price'] ; ?></td>
                            <td><?php echo $row['sale_qty'] ; ?></td> 	  
                            <td>BDT. <?php echo $row['sale_price'] ; ?>.00</td> 
                            	                    
                        <td>
                            <a href="stock_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                            <a href="stock_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
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