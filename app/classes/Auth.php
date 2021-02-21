<?php

  namespace App\classes;

  class Auth {
    public function logIn() {
      if($_POST['user_name']=='admin' && $_POST['user_password']==12345){
        session_start();
        $_SESSION['userName'] = $_POST['user_name'];
        $_SESSION['userPassword'] = $_POST['user_password'];
        header('Location: home.php');
      }else{
        echo 'Incorrect Data Inserted!';
      }
      
    }

    public function logOut() {
      session_start();
      unset($_SESSION['userName']);
      unset($_SESSION['userPassword']);
      header('Location: index.php');
    }
  }