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
<div class="app-content">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h2> Products Edit Page</h2>  <hr>              
            </div>
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
               
                    <form action="update-Product.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <p>Product Name : <input name="name" type="text" value="<?php echo $data['name'] ; ?>" class="form-control" placeholder="Enter your name"></p>
                        <p>Image : <input type="file"  name="image" id="image"  value="<?php echo $data['image'] ; ?>" class="form-control" ></p>
                        <p>Product Id  : <input name="product_id" type="text" value="<?php echo $data['product_id'] ; ?>" class="form-control" placeholder="Enter User product id "></p>
                        <p>Buy Rate  : <input name="buy_rate" type="text" value="<?php echo $data['buy_rate'] ; ?>" class="form-control" placeholder="Enter User buy rate "></p>
                        <p>Initial Quantity  : <input name="initial_quantity" type="text" value="<?php echo $data['initial_quantity'] ; ?>" class="form-control" placeholder="Enter User initial quantity "></p>
                        <p>Description  : <input name="description" type="text" value="<?php echo $data['description'] ; ?>" class="form-control" placeholder="Enter User description "></p>
                
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </form>
               </div>
            </div>
    </div>

    
</div>


<?php include 'include/footer.php' ; ?>