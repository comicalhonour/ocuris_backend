<?php
//read
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "userinfo";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "SELECT * FROM inquire";

    $result = mysqli_query($conn, $sql);


    $i = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<button onclick="history.go(-1);"> Back </button>
<body>
    <table class="table" >
        <tr>
            <th>ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>E-mail</th>
            <th>Questions</th>
            <th>Action</th>
        </tr>
        
        <?php
            while($row = mysqli_fetch_array($result)){ 
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['firstname']."</td>";
                echo "<td>".$row['lastname']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['question']."</td>";
        ?>
            <td><a href="delete.php?id=<?php echo $row["id"]; ?>" onclick='return confirm("Are you sure?")'>DELETE</a></td>
        <?php    
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>