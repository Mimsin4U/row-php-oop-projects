<?php
  session_start();
  require_once './vendor/autoload.php';

  use App\classes\Auth;
  
// Logout 
  if(isset($_GET['status'])){
    $auth = new Auth();
    $auth->logOut();
  }
  // Authentication 
  if(!isset($_SESSION['userName'])){
    header('Location: index.php');
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator</title>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
      <a href="home.php" class="navbar-brand">Row php Projects</a>
      <ul class="navbar-nav">
        <li><a href="home.php" class="nav-link">Home</a></li>
        <li><a href="from-to.php" class="nav-link">FromTo</a></li>
        <li><a href="even-sum.php" class="nav-link">EvenSum</a></li>
        <li><a href="odd-sum.php" class="nav-link">OddSum</a></li>
        <li><a href="word-counter.php" class="nav-link">WordCounter</a></li>
        <li><a href="image-upload.php" class="nav-link">ImageUpload</a></li>
      </ul>
      <!-- Login/Logout  -->
      <ul class="navbar-nav">
        <li class="dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['userName']?></a>
          <ul class="dropdown-menu">
            <li><a href="?status=logout" class="dropdown-item">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>