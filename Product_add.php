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
                <h2>Product Add</h2>                
            </div>
            <div class="col-md-2">
            <a href="product.php" class="btn btn-success">All users Product</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <hr>
            </div>
        </div>
    </div>    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="product_insert.php" method="POST">
                <p>Product Name : <input name="name" type="text" class="form-control" placeholder="Enter your name"></p>
                <p>Description : <input name="description" type="text" class="form-control" placeholder="Enter User desription"></p>
                
               
                <button type="submit" class="btn btn-success">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'include/footer.php'; ?>