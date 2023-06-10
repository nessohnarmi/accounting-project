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

$sql ="SELECT * FROM users" ;
$result = $db->query($sql);


?>

<div class="app-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h2>Users</h2>                
            </div>
            <div class="col-md-2">
            <a href="registration.php" class="btn btn-success">Add New</a>
            </div>
        </div>
    </div>    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <table class="table ">
                    <thead>
                        <th><b>ID</b></th>
                        <th><b>Name</b></th>
                       
                        <th><b>Email </b></th>
                        <th><b>Password</b></th>
                        <th><b>Mobile No</b> </th>
                        <th><b>Action</b></th>
                    </thead>
                    <tbody>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>                        
                            <td><?php echo $row['id'] ; ?></td>
                            <td><?php echo $row['name'] ; ?></td>
                       
                            <td><?php echo $row['email'] ; ?></td>
                            <td><?php echo $row['password'] ; ?></td>
                            <td><?php echo $row['mobile_no'] ; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                        
                            <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
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