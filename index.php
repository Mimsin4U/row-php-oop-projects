<?php
  session_start();
  require_once './vendor/autoload.php';
  use App\classes\Auth;
  
  if (isset($_POST['btn'])){
    $auth = new Auth();
    $auth->logIn();
  }
  if(isset($_SESSION['userName'])){
    header('Location: home.php');
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body class="bg-dark">
  <section>
    <div class="container">
      <div class="row py-5">
        <div class="col-md-6 offset-3">
          <div class="card">
            <div class="card-header">
              <h1 style="text-align: center">LogIn</h1>
            </div>
            <div class="card-body">
              <form action="" method="POST">
                <div class="row form-group ">
                  <label for="" class="col-md-3 col-from-label">User Name:</label>
                  <div class="col-md-9">
                    <input type="text" name="user_name" class="form-control" placeholder="Enter your username">
                  </div>
                </div>
                <div class="row form-group ">
                  <label for="" class="col-md-3 col-from-label">Password:</label>
                  <div class="col-md-9">
                    <input type="number" name="user_password" class="form-control" placeholder="Enter your password"  >
                  </div>
                </div>
                <div class="row form-group ">
                  <label for="" class="col-md-3 col-from-label"></label>
                  <div class="col-md-9">
                    <input class="btn btn-success" type="submit" name="btn" class="form-control" value="Login">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>