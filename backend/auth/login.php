<?php
    include('../db/connect.php');

    $email = $_POST['emails'];
    $pswd = $_POST['password'];
    $creds = "SELECT email,password FROM users WHERE email='$email' AND password='$pswd'";
    $results = mysqli_query($connection,$creds);

    
    if($results){       
        while( $data = mysqli_fetch_assoc($results)){
            if(($email == $data['email']) && ($pswd == $data['password'])){
                session_start();
                $_SESSION['email'] = $email;
                header("location:http://localhost/web-project/pages/alumni.php");
            }else{
                echo "Wrong password or email";
                
            }
        }
    }
    
?>