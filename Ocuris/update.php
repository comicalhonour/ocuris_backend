<?php
//read
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "userinfo";

    $id = $_GET["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $birthday = $_POST["birthday"];
    $country = $_POST["country"];
    $gender = $_POST["gender"];

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "UPDATE userinformation SET name = '$name', email = '$email', birthday = '$birthday', country = '$country', gender = '$gender'  WHERE id = $id;";

    $result = mysqli_query($conn, $sql);

    header ("Location: accinfo.php");
?>