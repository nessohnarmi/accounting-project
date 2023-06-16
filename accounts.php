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

$sql ="SELECT * FROM accounts " ;

$result = $db->query($sql);


?>

<div class="app-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <h2>Accounts  Page </h2>                
            </div>
            <div class="col-md-2">
                <a href="accounts_add.php" class="btn btn-success">Add New Accounts</a>
            </div>
        </div>
    </div>    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <table class="table ">
                    <thead>
                        <th><b>ID</b></th>
                        <th><b>Date</b></th>
                        <th><b>Description</b></th>
                        <th><b>Account book</b></th>
                        <th><b>Dr taka</b></th>
                        <th><b>Cr taka</b></th>                        
                        
                        <th><b>Action</b></th>
                       
                    </thead>
                    <tbody>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>                        
                            <td><?php echo $row['id'] ; ?></td>
                            <td><?php echo $row['date'] ; ?></td>
                            
                            <td> <?php echo $row['description'] ; ?></td> 	 
                            <td> <?php echo $row['account_book'] ; ?></td> 	 
                            <td>BDT. <?php echo $row['debit'] ; ?>.00</td>
                            <td>BDT. <?php echo $row['credit'] ; ?>.00</td>                   
                        <td>
                            <a href="accounts_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                            <a href="accounts_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
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