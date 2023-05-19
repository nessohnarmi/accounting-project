<?php include 'include/header.php' ; ?>

<main>
  <h1>Login Page</h1><hr>

  <div class="container">
    <div class="row">
      <div class="col-md-8">
          <form action="login_process.php" method="POST">
          <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input type="text"
              class="form-control" name="email" id="" aria-describedby="helpId" placeholder="Enter your email address">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Password</label>
            <input type="text"
              class="form-control" name="password" id="" aria-describedby="helpId" placeholder="Enter the password">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
   
          </form>
      </div>
    </div>
  </div>
  


</main>
<?php include 'include/footer.php' ; ?>