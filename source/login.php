<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <?php
      echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>";
      echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>";
      echo "<link rel='stylesheet' href=<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js'></script>";
      echo "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>";
      echo "<script src='https://kit.fontawesome.com/a076d05399.js'></script>";
      echo "<link rel='icon' href='resources/icon.png'>";
     ?>
    <style>
    <?php include 'style.css'; ?>
    </style>  
    <title>Google Play</title>
    
</head>
<body>

    <form action="login.php" method="POST">
    Username
      <input type="text" name="username" id="usename">
      <br>
      Password
      <input type="text" name="password" id="password">
      </div>
      <br>
      <button class="btn btn-primary" type="submit">Submit</button>
    </form>

</body>
<?php
    $dbservername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "database";

    $conn = new mysqli($dbservername,$dbusername,$dbpassword,$dbname);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }


    function login($user,$pass){
      if(strlen($user)>0 || strlen($pass)){
        $sql = "select * from users";
        global $conn;
        $result = $conn->query($sql);
        $usernames = [];

        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            array_push($usernames,$row['username']);
          }
        }


        $i=0;
        while($i<count($usernames)){

          if($usernames[$i] == $user){

            echo "Username True"."<br>";

            $sql = "select password from users where username ='".$usernames[$i]."'";
            $result = $conn->query($sql);
            $row1 = $result->fetch_assoc();

            if($row1['password'] == $pass){
              echo "Password True";
              break;
            }
            else
              echo "Password not true";
            break;
          }
          else

            if($i==count($usernames)){
              echo "Username not true";
            }
          $i+=1;

        }

      }
      else{
        echo "Not enough info";
      }
    }

    if(isset($_POST['username']))
    {
      $user = $_POST['username'];
      $pass = $_POST['password'];
      login($user,$pass);
    } 
    
    ?>
</html>