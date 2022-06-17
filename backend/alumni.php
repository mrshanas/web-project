<?php
    include('./db/connect.php');

    $aname = $_POST['alname'];
    $eyear = $_POST['enrol_year'];
    $gyear = $_POST['grad_year'];
    $hmaster = $_POST['headmasters'];
    $teacher = $_POST['teachers'];
    $result = $_POST['results'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $occpxn = $_POST['occupation'];
    $address = $_POST['address'];

    $query = "INSERT INTO `alumni`(`name`,`enrol_year`,`grad_year`,`headmaster`,`famous_teacher`,`results`,`occupation`,`address`,`email`,`mob_number`) VALUES ('$aname','$eyear','$gyear','$hmaster','$teacher','$result','$occpxn','$address','$email','$tel')";
    $results = mysqli_query($connection,$query);

    if($results){
        echo "Success";
    }
?>