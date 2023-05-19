<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/login.css" rel="stylesheet">
  <title>login page </title>
</head>
<body >
 <center>
<div class="a">
  <br><br><br><br> <br><br><br><br> <br><br><br><br>
    <h1 class="m-0 text-primary" style="font-size:20px;"><b>Accounting System</b></h1>

      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <form action="login_process.php" method="POST">
              <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="text"
                  class="form-control" name="email" aria-describedby="helpId" placeholder="Enter your email address">
              </div><br>
              <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input type="text"
                  class="form-control" name="password" aria-describedby="helpId" placeholder="Enter the password">
              </div>  <br>
              <div class="md-3">
              <button type="submit" class="btn btn-info">Login</button>
              </div>
            
              </form>
          </div>
        </div>
      </div>
      


    </main>
</div>

    
</center>

  
  
</body>
</html>