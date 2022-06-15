<?php
    $connection = mysqli_connect('localhost','root','','o-level');

    if(!$connection){
        echo die('Cant connect to the database').mysqli_error();
    }
?>