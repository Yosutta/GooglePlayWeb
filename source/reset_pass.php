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
      <h1>This code has expired</h1>
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

    function checkCode($code){
      global $conn;
      $sql = "SELECT * FROM emailverification";
  
      $result = $conn->query($sql);
  
      $codes = [];
  
      while($row = $result->fetch_assoc()){
        array_push($codes,$row['code']);
      }
  
      if(in_array($code,$codes)){
        return true;
      }
      else
        return false;
    }
    

    // function sendCodeByMail($email,$code){
    //   $subject = "Googleplay Project has just sent an email verification code";
    //   $body = "Your verification code is : ".$code;
    //   $headers = "From: Verification code";
    //   if (mail($email, $subject, $body, $headers)) {
    //       echo "Email successfully sent to $email...";
    //   } 
    //   else {  
    //       echo "Email sending failed...";
    //   }
    // }

    function resetPassword($code){
      if(checkCode($code)){
        echo $code;
      }
    }

    if(isset($_GET['token'])){
      $code = $_GET['token'];
      resetPassword($code);
    }
?>
</html>