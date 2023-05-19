<?php include 'include/header.php' ;
include 'include/connection.php';  
$sql = "SELECT * FROM users";
$result = $db->query($sql);
  ?>

<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-md-12">
                <h3 class="page-title">Registration page</h3>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div><br><br>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Three charts -->
        <!-- ============================================================== -->
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <th><b>ID</b></th>
                        <th><b>Name</b></th>
                        <th><b>User Id</b></th>
                        <th><b>Email </b></th>
                        <th><b>Password</b></th>
                        <th><b>Mobile No</b> </th>
                        <th><b>Action</b> </th>
                    </thead>
                    <tbody>
                    <?php while($row = $result->fetch_assoc()): ?>
                      <tr>
                       
                            <td><?php echo $row['id'] ; ?></td>
                            <td><?php echo $row['name'] ; ?></td>
                            <td><?php echo $row['user_id'] ; ?></td>
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


<?php include 'include/footer.php' ; ?>