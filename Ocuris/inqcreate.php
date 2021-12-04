<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "userinfo";

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $question = $_POST["question"];

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "INSERT inquire(firstname, lastname, email, question) VALUES('$firstname', '$lastname', '$email', '$question')";
    
    $result = mysqli_query($conn, $sql);

    header ("Location: inquiries.php");
?>