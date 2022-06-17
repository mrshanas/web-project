<?php
    include('../db/connect.php');

    $firstname = $_POST['fname'];
    $middlename = $_POST['mname'];
    $surname = $_POST['sname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $_POST['username'];
    $dob = $_POST['dob'];
    $cv = $_POST['cv'];
    $tel = $_POST['tel'];
    $insta = $_POST['insta'];
    $fb = $_POST['fb'];
    $twitter = $_POST['twitter'];

    
    $existingCredsQuery = 'SELECT username,email FROM users';
    $results = mysqli_query($connection,$existingCredsQuery);


    if($results){
        while($data = mysqli_fetch_assoc($results)){
            if($data['email'] == $email){
                die('Email already exists');
            }
            if($data['username'] == $username){
                die('Username already exists');
            }
        }

        $query = "INSERT INTO `users`(`first_name`,`middle_name`,`surname`,`username`,`email`,`password`,`dob`,`phone_number`,`cv`,`instagram`,`facebook`,`twitter`) VALUES ('$firstname','$middlename','$surname','$username','$email','$password','$dob','$tel','$cv','$insta','$fb','$twitter')";

        if(mysqli_query($connection,$query)){
            session_start();
            $_SESSION['email'] = $email;
            header('location:http://localhost/web-project/pages/alumni.php');
        }else{
            echo "Failed!! ".mysqli_error($connection);
        }
    }
?>