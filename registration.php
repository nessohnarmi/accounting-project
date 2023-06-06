<?php 


include 'include/connection.php'; 
include 'include/header.php'; 

$sql ="SELECT * FROM users" ;
$result = $db->query($sql);

?>

<div class="app-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h2>Users registration</h2>                
            </div>
            <div class="col-md-2">
            <a href="users.php" class="btn btn-success">All users</a>
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
        </div>
    </div>
</div>
<?php include 'include/footer.php'; ?>