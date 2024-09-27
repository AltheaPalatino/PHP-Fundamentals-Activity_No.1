<?php

session_start();
if (isset($_POST['registerBtn'])) {
 
   $_SESSION['username'] = $_POST['username'];
   $_SESSION['password'] = md5($_POST['password']);

   header("Location: index.php");
   exit();
}
