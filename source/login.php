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
      echo "<script src='main.js'></script>"
    ?>
    <style>
    <?php include 'style.css'; ?>
    </style>  
    <title>Reset password</title>
    
</head>
<body>

    <form action="login.php" method="POST">
    Username
      <input type="text" name="username" id="username">
      <div name="usernameerror"></div>
      <br>
      Password
      <input type="password" name="password" id="password">
      <div name="passworderror"></div>
      <br>
      <button class="btn btn-primary" type="submit">Submit</button>
    </form>
    <a href="register.php">Create a new account</a>
    <br>
    <a href="send_link.php">Forgot Password?</a>
</body>
<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "database";

  // Create connection
  $conn = new mysqli($servername, $username, $password,$dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
      
  function login($user,$pass){
    global $conn;
    $sql = "SELECT * FROM users WHERE username='$user'";
    $result = $conn->query($sql);
    while($row=$result->fetch_assoc()){
      if($row['password']==$pass){
        echo 'Logged in';
      }
    }
  }
  
  if(isset($_POST['username'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    login($user,$pass);
  }

  $conn->close();
  ?>
</html>