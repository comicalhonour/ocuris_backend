<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "userinfo";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $sql = 'SELECT * FROM userinformation';

    $result = mysqli_query($conn, $sql);

    if(mysqli_query($conn, $sql)){
      echo "Registration Successfully Stored!!";
    }

    $i = 0;
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Updating Information</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="test1.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/geodatasource-countryflag-round.css">
  </head>
  <body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <body background="background5.png">
    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active"  href="content.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="about.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="accinfo.php">Account information</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contact.html">Contact</a>
        </li>
    </ul>
    
    </style>
    <body>
      <table class="table" >
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Birthday</th>
            <th>Country</th>
            <th>Gender</th>
            <th>UDPATE</th>
        </tr>
        
        <?php
            while($row = mysqli_fetch_array($result)){ 
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['birthday']."</td>";
                echo "<td>".$row['country']."</td>";
                echo "<td>".$row['gender']."</td>";
        ?>
                <td><a href="usrUpdate.php?id=<?php echo $row["id"]; ?>">UPDATE</a></td>
        <?php    
                echo "</tr>";
            }
        ?>
    </table>
    </body>
    
    <h1>Welcome to</h1> 
    <h3>OCURIS</h3>
    <p>An assistant to your life<br>We provide protection and convenience</p>
    <style>
      h1{
      color: orange;
      position:relative;
      top:248px;
      width:49%;
      text-align: right;
      }
      h3{
      color: orange;
      position:relative;
      top:248px;
      width:49%;
      text-align: right;
      font-family: 'Times New Roman', Times, serif;
      font-size: 50px;
      }
      p{
        color: peachpuff;
        position:relative;
        top:250px;
        width:49%;
        text-align: right;
      }
    </style>

  </body>
</html>