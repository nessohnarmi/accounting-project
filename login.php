<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="css/login.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
        <title>Login page</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card m-2 p-5">
                        <h2>Login form</h2>
                        <hr />
                        <form action="login_process.php" method="POST">
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" aria-describedby="helpId" placeholder="Enter your email address" />
                            </div>
                            <br />
                            <div class="mb-3">
                                <label for="" class="form-label">Password</label>
                                <input type="text" class="form-control" name="password" aria-describedby="helpId" placeholder="Enter the password" />
                            </div>
                            <br />
                            <div class="md-3">
                                <button type="submit" class="btn btn-info">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
