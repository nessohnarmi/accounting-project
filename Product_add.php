<?php 


include 'include/connection.php'; 
include 'include/header.php'; 

$sql ="SELECT * FROM products" ;
$result = $db->query($sql);

?>

<div class="app-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h2>Add New Product</h2>                
            </div>
            <div class="col-md-2">
            <a href="product.php" class="btn btn-success">All Products</a>
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
                <form action="product_insert.php" method="POST" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label for="">Product name :</label>
                        <input name="name" type="text" class="form-control" placeholder="Enter product name">
                    </div>

                    <div class="form-group">
                        <label for="">Product image :</label>
                        
                        <p><input type="file" value=""  name="image" id="image"/></p>
                        <p class="text-success">Upload product image</p>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Purchase price :</label>
                                <input name="purchase_price" type="number" class="form-control" placeholder="Enter the purchase price">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Sale price :</label>
                                <input name="sale_price" type="number" class="form-control" placeholder="Enter product sale price">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Initial Qty :</label>
                                <input name="initial_quantity" type="text" class="form-control" placeholder="Enter product initial qty">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Product description :</label>
                        <textarea name="description" id="" cols="30" rows="2" placeholder="Enter the product description" class="form-control"></textarea>
                    </div>
               
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>

                </form>
            </div>
        </div>
    </div>
</div>
 <?php include 'include/footer.php'; ?>