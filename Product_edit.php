<?php 

    include 'include/connection.php';
    include 'include/header.php' ; 

    $id = $_GET['id'] ;
    $sql = "SELECT * FROM Products WHERE id='$id'";
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
              <div class="col-md-6">
               
                    <form action="update-Product.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <p>Product Name : <input name="name" type="text" value="<?php echo $data['name'] ; ?>" class="form-control" placeholder="Enter your name"></p>
                        <p>Description  : <input name="description" type="text" value="<?php echo $data['description'] ; ?>" class="form-control" placeholder="Enter User description "></p>
                
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </form>
               </div>
            </div>
    </div>

    
</div>


<?php include 'include/footer.php' ; ?>