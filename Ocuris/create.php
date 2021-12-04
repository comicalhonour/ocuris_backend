<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "userinfo";

    $name = $_POST["name"];
    $email = $_POST["email"];
    $birthday = $_POST["birthday"];
    $country = $_POST["country"];
    $gender = $_POST["gender"];

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "INSERT userinformation(name, email, birthday, country, gender) VALUES('$name', '$email', '$birthday', '$country', '$gender')";
    
    $result = mysqli_query($conn, $sql);

    header ("Location: accinfo.php");
?>