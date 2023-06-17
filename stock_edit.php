<?php 

    include 'include/connection.php';
    include 'include/header.php' ; 

    $id = $_GET['id'] ;
    $sql = "SELECT * FROM stock WHERE id='$id'";
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
                <h2> Stock Edit Page</h2>  <hr>              
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
        <div class="row">
            <div class="col-md-12">
                <form action="update-stock.php" method="POST" >
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                    
                            <div class="form-group">
                                    <label for="">Product name:</label>
                                    <input name="product_name" type="text" value="<?php echo $data['product_name'] ; ?>" class="form-control" placeholder="Enter product name">
                            </div>

                    <div class="row">
                      
                        <div class="col-md-4">
                                       <div class="form-group">
                                            <label for="">Purchase product price :</label>
                                            <input name="purchase_product_price" type="number" value="<?php echo $data['purchase_product_price'] ; ?>"class="form-control" placeholder="Enter  Purchase product price">
                                        </div>
                        </div>

                        <div class="col-md-4">
                                   <div class="form-group">
                                        <label for="">Purchase qty :</label>
                                        <input name="purchase_qty" type="text" value="<?php echo $data['purchase_qty'] ; ?>" class="form-control" placeholder="Enter Purchase qty ">
                                    </div>
                        </div>

                        <div class="col-md-4">
                                   <div class="form-group">
                                        <label for="">Purchase price :</label>
                                        <input name="purchase_price" type="number" value="<?php echo $data['purchase_price'] ; ?>" class="form-control" placeholder="Purchase price">
                                    </div>
                        </div>
                    </div>


                    <div class="row">
                      
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Sale product price :</label>
                                <input name="sale_product_price" type="number" value="<?php echo $data['sale_product_price'] ; ?>" class="form-control" placeholder="Enter Sale product price">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Sale qty :</label>
                                <input name="sale_qty" type="text" value="<?php echo $data['sale_qty'] ; ?>" class="form-control" placeholder="Enter product Sale qty">
                            </div>
                        </div>

                        <div class="col-md-4">
                                   <div class="form-group">
                                        <label for="">Sale price:</label>
                                        <input name="sale_price" type="number" value="<?php echo $data['sale_price'] ; ?>" class="form-control" placeholder="Enter Sale price">
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


<?php include 'include/footer.php' ; ?>