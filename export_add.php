<?php 


include 'include/connection.php'; 
include 'include/header.php'; 

$sql ="SELECT * FROM exports" ;
$result = $db->query($sql);

?>

<div class="app-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h2> Export Products</h2>                
            </div>
            <div class="col-md-2">
            <a href="export.php" class="btn btn-success">All Export Product</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <hr>
            </div>
        </div>
    </div>    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="export_insert.php" method="POST">
                   
                    <p>Product Name : <input name="name" type="text" class="form-control" placeholder="Enter your name"></p>
                    <p><b>Image :</b>  <input type="file" value=""  name="image" id="image"  class="form-control" placeholder="Enter Image"/></p>
                    <p>Product Id : <input name="product_id" type="text" class="form-control" placeholder="Enter User desription"></p>
                    <p>Date: <input name="date" type="date" class="form-control" placeholder="select Date"></p>
                    <p>Buy Rate : <input name="buy_rate" type="text" class="form-control" placeholder="Enter User desription"></p>
                    <p>Initial Quantity : <input name="initial_quantity" type="text" class="form-control" placeholder="Enter User desription"></p>
                    <p>Description : <input name="description" type="text" class="form-control" placeholder="Enter User desription"></p>
                   
               
                <button type="submit" class="btn btn-success">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'include/footer.php'; ?>