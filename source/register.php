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
  <form action="" method="POST">
    <div>
    Username 
    <input type="text" name="username" id="username">
    <div></div>
    Password
    <input type="password" name="password" id="password">
    </div>

    <div>
      FullName
      <input type="text" name="fullname" id="fullname">
      <div></div>
      Date of Birth
      <input type="date" name="birthDate" id="birthDate">
      <div></div>
      Email
      <input type="email" name="email" id="email">
    </div>

    <button type="submit" class="btn btn-primary">Register</button>
  </form>
<body>
<?php
  $servername = "localhost";
  $username ="root";
  $password = "";
  $dbname = "database";

  $conn = new mysqli($servername,$username,$password,$dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  function checkUsername($user){
    global $conn;
    $sql = "SELECT * FROM users";

    $result = $conn->query($sql);

    $usernames = [];

    while($row = $result->fetch_assoc()){
      array_push($usernames,$row['username']);
    }

    if(in_array($user,$usernames)){
      return false;
    }
    return true;
    
  }

  function checkEmail($email){
    global $conn;
    $sql = "SELECT * FROM users";

    $result = $conn->query($sql);

    $emails = [];

    while($row = $result->fetch_assoc()){
      array_push($emails,$row['email']);
    }

    if(in_array($email,$emails)){
      return false;
    }
    return true;
  }

  function register($user,$pass,$fullName,$birthDate,$email){
    if(checkUsername($user)==true){
      if(checkEmail($email)==true){
        global $conn;

        $sql1 = "INSERT INTO `users`(`username`, `password`, `email`, `level`) VALUES ('$user','$pass','$email',1)";
        $sql2 = "INSERT INTO `usersinfo` (`fullName`, `birthDate`, `pictureLink`) VALUES ('$fullName', '$birthDate', '')";

        $conn->query($sql1);
        $conn->query($sql2);
      }
      else
        echo "This email has already been used";
    }
    else
      echo "This username has already been used";
  }

  if(isset($_POST['email'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $fullName = $_POST['fullname'];
    $email = $_POST['email'];
    $birthDate = $_POST['birthDate'];

    register($user,$pass,$fullName,$birthDate,$email);
  }

?>
</html>