<!-- header -->
<?php include 'include/header.php' ; ?>
<br><br>


<div class="row justify-content-center">




   
                      <div class="col-md-8">
                            <h1><b>Registration page</b></h1><hr>
                            <form action="registration_insert.php" method="POST">
                                <p>Name : <input name="name" type="text" class="form-control" placeholder="Enter your name"></p>
                                <p>User Id : <input name="user_id" type="text" class="form-control" placeholder="Enter User Id"></p>
                                <p>Email : <input name="email" type="email" class="form-control" placeholder="Enter your email" required></p>
                                <p>Password: <input name="password" type="password" class="form-control" placeholder="Enter the password" required></p>
                                <p>Mobile No : <input name="mobile_no" type="number" placeholder="Enter your mobile no" class="form-control"></p>
                                <!-- <p>Image : <input name="image" type="image" placeholder="Enter your mobile no" class="form-control"></p> -->
                                <button type="submit" class="btn btn-success">Submit</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </form>
                            </div>
    


</div><br><br><br><br><br><br>







<div class="row justify-content-center">
        <div class="col-md-5">  
                      <h5> <a class="btn btn-info" href="registration_users.php">  <b> Registration users page</b></a>  </h5>        
        </div>
    


</div>



    

        <br>
        <br>


<!-- footer -->
<?php include 'include/footer.php' ; ?>