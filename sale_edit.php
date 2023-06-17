<?php 

    include 'include/connection.php';
    include 'include/header.php' ; 

    $id = $_GET['id'] ;
    $sql = "SELECT * FROM sale WHERE id='$id'";
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
                <h2>  Sale Products Edit Page</h2>  <hr>              
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
               
                    <form action="update-sale.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">


                        


                            <div class="row">
                                <div class="col-md-6">

                                            <div class="form-group">
                                                    <label for="">Date :</label>
                                                    <input name="date" type="date" value="<?php echo $data['date'] ; ?>" class="form-control" placeholder="Enter Date">
                                             </div>

                                </div>



                                <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="">Product name :</label>
                                            <input name="product_name" type="text" value="<?php echo $data['product_name'] ; ?>" class="form-control" placeholder="Enter product name">
                                        </div>

                                </div>
                                
                            </div>
                                    
                        

                            
                            <div class="row">
                                <div class="col-md-6">
                                    
                                    
                                      <div class="form-group">

                                        <label for="">Initial Quantity:</label>
                                        <input name="qty" type="text" value="<?php echo $data['qty'] ; ?>"class="form-control" placeholder="Enter product initial qty">
                                    </div>
                                   

                                </div>



                                <div class="col-md-6">

                                   <div class="form-group">
                                        <label for="">Purchase price :</label>
                                        <input name="price" type="number"  value="<?php echo $data['price'] ; ?>" class="form-control" placeholder="Enter the purchase price">
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