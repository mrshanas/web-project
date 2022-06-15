<?php
    include('../db/connect.php');

  

    $email = $_POST['emails'];
    $pswd = $_POST['password'];
    $creds = 'SELECT email,password FROM users WHERE email=$email AND password=$pswd';
    $results = mysqli_query($connection,$creds);

    
    if($results){
        $data = mysqli_fetch_assoc($results);
        
        for ($i=0; $i < 1; $i++) { 
            if(($email == $data['email']) && ($pswd == $data['password'])){
                session_start();
                $_SESSION['email'] = $email;
                header("location:../../../../pages/alumni.html");
            }else{
                echo $email;
                echo "Wrong password or email";
                
            }
        }
    }
    
?>