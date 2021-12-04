<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "userinfo";

    $id = $_GET["id"];

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "DELETE FROM userinformation WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    header ("Location: content.html");
?>