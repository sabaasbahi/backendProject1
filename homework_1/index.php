<?php


session_start();


ini_set('display_errors', 1);
   ini_set('display_startup_errors', 1);
   error_reporting(E_ALL);

   if(isset($_SESSION['is_logged_in'])){

    header("Location: home.php");
   }

include 'layout/header.php';
  

include 'login.php';

      
include 'layout/footer.php';


              