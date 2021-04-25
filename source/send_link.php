<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
      session_start();
      echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>";
      echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>";
      echo "<link rel='stylesheet' href=<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js'></script>";
      echo "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>";
      echo "<script src='https://kit.fontawesome.com/a076d05399.js'></script>";
      echo "<link rel='icon' href='resources/icon.png'>";
      echo "<script src='main.js'></script>";
      echo "<link rel='stylesheet' type='text/css' href='style.css'>";
    ?>
    <title>Reset password</title>
    <form action="" method="POST">
      Enter your email to recover your account
      <br>
      <input type="email" name="email" id="email">
      <br>
      <br>
      <button type="submit" class="btn btn-primary">Send a recover link</button>
    </form>
</head>
<body>
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

    function checkSentEmail($email){
      global $conn;
      $sql = "SELECT * FROM emailverification";
  
      $result = $conn->query($sql);
  
      $emails = [];
  
      while($row = $result->fetch_assoc()){
        array_push($emails,$row['email']);
      }
  
      if(in_array($email,$emails)){
        return true;
      }
      return false;
    }

    function sendCodeByMail($email,$link){
      $subject = "Googleplay Project has just sent an email verification code";
      $body = "Your verification code is : ".$link;
      $headers = "From: Verification code";
      if (mail($email, $subject, $body, $headers)) {
          echo "Email successfully sent to $email...";
      } 
      else {  
          echo "Email sending failed...";
      }
    }

    function resetPassword($email){
      if(!checkEmail($email)){
        if(!checkSentEmail($email)){
          global $conn;
          $emailHash = md5($email);
          $link = "/source/reset_pass.php?token=$emailHash";
          $sql = "INSERT INTO emailverification values('$email','$emailHash')";
          $conn->query($sql);
  
          sendCodeByMail($email,$link);
        }
        else
          echo "An email has already been sent to this account";
      }
      else
        echo "Your email is incorrect";
    }

    if(isset($_POST['email'])){
      $email = $_POST['email'];
      resetPassword($email);
    }
?>
</html>