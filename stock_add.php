<?php 


include 'include/connection.php'; 
include 'include/header.php'; 

$sql ="SELECT * FROM stock" ;
$result = $db->query($sql);

?>

<div class="app-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h2>Add New Stock</h2>                
            </div>
            <div class="col-md-2">
            <a href="product.php" class="btn btn-success">All Stock</a>
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
                <form action="stock_insert.php" method="POST" enctype="multipart/form-data">
                    
                            <div class="form-group">
                                    <label for="">Product name:</label>
                                    <input name="product_name" type="text" class="form-control" placeholder="Enter product name">
                            </div>

                    <div class="row">
                      
                        <div class="col-md-4">
                                       <div class="form-group">
                                            <label for="">Purchase product price :</label>
                                            <input name="purchase_product_price" type="number" class="form-control" placeholder="Enter  Purchase product price">
                                        </div>
                        </div>

                        <div class="col-md-4">
                                   <div class="form-group">
                                        <label for="">Purchase qty :</label>
                                        <input name="purchase_qty" type="text" class="form-control" placeholder="Enter Purchase qty ">
                                    </div>
                        </div>

                        <div class="col-md-4">
                                   <div class="form-group">
                                        <label for="">Purchase price :</label>
                                        <input name="purchase_price" type="number" class="form-control" placeholder="Purchase price">
                                    </div>
                        </div>
                    </div>


                    <div class="row">
                      
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Sale product price :</label>
                                <input name="sale_product_price" type="number" class="form-control" placeholder="Enter Sale product price">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Sale qty :</label>
                                <input name="sale_qty" type="text" class="form-control" placeholder="Enter product Sale qty">
                            </div>
                        </div>

                        <div class="col-md-4">
                                   <div class="form-group">
                                        <label for="">Sale price:</label>
                                        <input name="sale_price" type="number" class="form-control" placeholder="Enter Sale price">
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