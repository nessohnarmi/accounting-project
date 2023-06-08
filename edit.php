<?php 

    include 'include/connection.php';
    include 'include/header.php' ; 

    $id = $_GET['id'] ;
    $sql = "SELECT * FROM users WHERE id='$id'";
    $result = $db->query($sql);
    $data = $result->fetch_assoc();
    //var_dump($data);
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
                <h2 class="page-title">Edit Page</h2>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
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
            <div class="row">
              <div class="col-md-12">
               
                    <form action="update-registration.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <p>Name : <input name="name" type="text" value="<?php echo $data['name'] ; ?>" class="form-control" placeholder="Enter your name"></p>
                        <p>User Id : <input name="user_id" type="text" value="<?php echo $data['user_id'] ; ?>" class="form-control" placeholder="Enter User Id"></p>
                        <p>Email : <input name="email" type="email"  value="<?php echo $data['email'] ; ?>" class="form-control" placeholder="Enter your email" required></p>
                        <p>Password: <input name="password" type="password" value="<?php echo $data['password'] ; ?>" class="form-control" placeholder="Enter the password" required></p>
                        <p>Mobile No : <input name="mobile_no" value="<?php echo $data['mobile_no'] ; ?>" type="number" placeholder="Enter your mobile no" class="form-control"></p>
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </form>
               </div>
            </div>
    </div>

    
</div>


<?php include 'include/footer.php' ; ?>