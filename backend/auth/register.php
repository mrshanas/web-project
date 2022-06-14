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

    echo "Register";
?>