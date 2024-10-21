<?php

session_start();

$users = [
    [
        'email' => 'ahmad@gmail.com',
        'password' => '123',
    ],
    [
        'email' => 'waled@gmail.com',
        'password' => '123',
    ]
];


if($_SERVER['REQUEST_METHOD']== "POST" && isset($_POST['submit'])){

    if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])){

        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){


            if(array_search($_POST['email'], array_column($users, 'email')) !== false){

                 $user = $users [array_search($_POST['email'], array_column($users, 'email'))];

                 if($user['password'] == $_POST['password']){

                    $_SESSION['email'] = $_POST['email'];

                    $_SESSION['is_logged_in'] = true;

                    header("Location: home.php");

                 }else{
                    
                    header("Location: index.php?error=incorrect password ");

                 }

            }else{
                header("Location: index.php?error=your email does not exist in our database");
            }


        }else{

            header("Location: index.php?error=invalid email adress");

        }

    }else{
        header("Location: index.php?error=please fill all the fields");
    }
}else{
    header("Location: index.php?error=unexpected error please try again later");
}
