<?php 


include 'include/connection.php'; 
include 'include/header.php'; 

$sql ="SELECT * FROM sale" ;
$result = $db->query($sql);

?>

<div class="app-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h2>Add Sale Product</h2>                
            </div>
            <div class="col-md-2">
            <a href="product.php" class="btn btn-success">All Sale Products</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <hr>
            </div>
        </div>
    </div>    
    <!-- <div class="container-fluid"> -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="sale_insert.php" method="POST" enctype="multipart/form-data">
                    
                            
                    <div class="row">
                      
                        <div class="col-md-6">
                                       <div class="form-group">
                                            <label for="">Date:</label>
                                            <input name="date" type="date" class="form-control" placeholder="Enter  Date">
                                        </div>
                        </div>

                        <div class="col-md-6">
                                   <div class="form-group">
                                        <label for="">Product name:</label>
                                        <input name="product_name" type="text" class="form-control" placeholder="Enter product name">
                                    </div>
                        </div>
                    </div>


                    <div class="row">
                      
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Purchase price :</label>
                                <input name="price" type="number" class="form-control" placeholder="Enter product sale price">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Initial Qty:</label>
                                <input name="qty" type="text" class="form-control" placeholder="Enter product initial qty">
                            </div>
                        </div>
                    </div>

               
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>

                </form>
            </div>
        </div>
    </div>
</div>
 <?php include 'include/footer.php'; ?>