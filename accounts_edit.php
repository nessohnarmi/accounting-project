<?php 

    include 'include/connection.php';
    include 'include/header.php' ; 

    $id = $_GET['id'] ;
    $sql = "SELECT * FROM accounts WHERE id='$id'";
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
                <h2>  Accounts Edit Page</h2>  <hr>              
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
                <form action="update_accounts.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id; ?>">

                            <div class="col-md-6">

                                <div class="form-group">
                                        <label for="">Date :</label>
                                        <input name="date" type="date" value="<?php echo $data['date'] ; ?>" class="form-control" placeholder="Enter the date">
                                </div>

                            </div>


                           <div class="form-group">
                                    <label for="">Product description :</label>
                                    <textarea name="description" id="" cols="30" rows="2" placeholder="Enter the product description" value="<?php echo $data['description'] ; ?>" class="form-control"></textarea>
                            </div>

                    <div class="row">
                      
                        <div class="col-md-4">
                                       <div class="form-group">
                                            <label for="">Account book :</label>
                                            <input name="account_book" type="text" value="<?php echo $data['account_book'] ; ?>" class="form-control" placeholder="Enter the Account_book">
                                        </div>
                        </div>

                        <div class="col-md-4">
                                   <div class="form-group">
                                        <label for="">Dr Taka :</label>
                                        <input name="debit" type="number" value="<?php echo $data['debit'] ; ?>" class="form-control" placeholder="Enter the Debit Taka ">
                                    </div>
                        </div>

                        <div class="col-md-4">
                                   <div class="form-group">
                                        <label for="">Cr Taka :</label>
                                        <input name="credit" type="number" value="<?php echo $data['credit'] ; ?>" class="form-control" placeholder="Enter the credit Taka ">
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