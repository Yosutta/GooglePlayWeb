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
      echo "<script src='main.js'></script>";
      echo "<link rel='stylesheet' type='text/css' href='style.css'>";
    ?>
    <title>Login</title>
    
</head>
<body>
    <div class = "alignment_center">
      <div class ="frame">
        <form action="login.php" method="POST">
          <div class="alignment_left"><img class="alignment_left" src ="./resources/Login/google_logo.png" width="120">
            <br>
            <p class="title">Sign in</p>
            <p class="text_bios">with your Google Account</p>
          
          </div>
          <input class="input_decoration" placeholder="Email or Phone number" type="text" name="username" id="username">
          <div name="usernameerror"></div>
          <br>
          <input class="input_decoration" placeholder="Password" type="password" name="password" id="password">
          <div name="passworderror"></div>
          <br>

          <div class="pt-lg-5 text-right">
            <button class="btn btn-primary" type="submit">Submit</button>
          </div>
        </form>
        <div class ="alignment_left" style="padding-top: 20px">
          <a href="register.php">Create a new account</a>
          <br>
          <a href="send_link.php">Forgot Password?</a>
          <div style="padding-bottom: 120px"></div>
        </div>
      </div>
    </div>
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
        header("Location:index.php");
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