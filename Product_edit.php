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
    <!-- <div class="container-fluid"> -->
    <div class="container">
        <!-- ============================================================== -->
        <!-- Three charts -->
        <!-- ============================================================== -->
            <div class="row">
              <div class="col-md-12">
               
                    <form action="update-Product.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">

                            <div class="form-group">
                                <label for="">Product name :</label>
                                <input name="name" type="text" value="<?php echo $data['name'] ; ?>" class="form-control" placeholder="Enter product name">
                            </div>

                                    
                            <div class="form-group">
                                <label for="">Product image :</label>
                                
                                <p><input type="file" value="<?php echo $data['image'];?>"  name="image" id="image"/></p>
                                <p class="text-success">Upload product image</p>
                            </div>

                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Purchase price :</label>
                                        <input name="purchase_price" type="number"  value="<?php echo $data['purchase_price'] ; ?>" class="form-control" placeholder="Enter the purchase price">
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Sale price :</label>
                                        <input name="sale_price" type="number" value="<?php echo $data['sale_price'] ; ?>" class="form-control" placeholder="Enter product sale price">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Initial Qty :</label>
                                        <input name="initial_quantity" type="text" value="<?php echo $data['initial_quantity'] ; ?>"class="form-control" placeholder="Enter product initial qty">
                                    </div>
                                </div>
                                
                            </div>


                            <div class="form-group">
                                        <label for="">Product description :</label>
                                        <textarea name="description" id="" cols="30" rows="2" placeholder="Enter the product description" type="text" value="<?php echo $data['description'] ; ?>"class="form-control"></textarea>
                            </div>


                    
                                <button type="submit" class="btn btn-success">Submit</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                    </form>
               </div>
            </div>
    </div>

    
</div>


<?php include 'include/footer.php' ; ?>