<?php
    require '../config/db.php';
    $roll = $_POST['roll'];
    $name = $_POST['name'];
    $year = $_POST['year'];
    $branch = $_POST['branch'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    echo $pass;
    $sql = "insert into Student values('$roll','$name','$year','$branch','$email','$pass')";
    $conn->query($sql);
    header('location: ../views/login.html');
    // location('header: ../views/login.html')
?>
