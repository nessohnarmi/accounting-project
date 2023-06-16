<?php 


include 'include/connection.php'; 
include 'include/header.php'; 

$sql ="SELECT * FROM accounts" ;
$result = $db->query($sql);

?>

<div class="app-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h2>Add New Accounts</h2>                
            </div>
            <div class="col-md-2">
            <a href="product.php" class="btn btn-success">All Accounts</a>
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
                <form action="accounts_insert.php" method="POST" enctype="multipart/form-data">
                            <div class="col-md-6">

                                <div class="form-group">
                                        <label for="">Date :</label>
                                        <input name="date" type="date" class="form-control" placeholder="Enter the date">
                                </div>

                            </div>


                           <div class="form-group">
                                    <label for="">Product description :</label>
                                    <textarea name="description" id="" cols="30" rows="2" placeholder="Enter the product description" class="form-control"></textarea>
                            </div>

                    <div class="row">
                      
                        <div class="col-md-4">
                                       <div class="form-group">
                                            <label for="">Account book :</label>
                                            <input name="account_book" type="text" class="form-control" placeholder="Enter the Account_book">
                                        </div>
                        </div>

                        <div class="col-md-4">
                                   <div class="form-group">
                                        <label for="">Debit Taka :</label>
                                        <input name="debit" type="number" class="form-control" placeholder="Enter the Debit Taka ">
                                    </div>
                        </div>

                        <div class="col-md-4">
                                   <div class="form-group">
                                        <label for="">credit Taka :</label>
                                        <input name="credit" type="number" class="form-control" placeholder="Enter the credit Taka ">
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