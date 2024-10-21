<?php

session_start();

if($_SERVER['REQUEST_METHOD']== "POST" && isset($_POST['submit'])){

    if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])){

        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

            if(isset($_FILES['file'])){

                $target = "uploads/";

                $target_file = $target.uniqid().".".explode("/", $_FILES["file"]["type"])[1];

                if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)){

                    $_SESSION['email'] = $_POST['email'];

                    $_SESSION['is_logged_in'] = true;

                    header("Location: home.php");
                }else{

                header("Location: register.php?error=unexpected error please try again later");

            }

        }else{

            header("Location: index2.php?error=invalid email adress");

        }

    }else{
        header("Location: index2.php?error=please fill all the fields");
    }
}else{
    header("Location: index2.php?error=unexpected error please try again later");
}
}