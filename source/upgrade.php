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
      echo "<link href='https://fonts.googleapis.com/css?family=Inter:400,800,900&display=swap' rel='stylesheet'>";
      echo "<link rel='icon' href='resources/icon.png'>";
      echo "<script src='main.js'></script>";
      echo "<link rel='stylesheet' type='text/css' href='style.css'>";

      $servername = "localhost";
      $username ="root";
      $password = "";
      $dbname = "database";
  
      $conn = new mysqli($servername,$username,$password,$dbname);
        
      if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
      }

      include("addNewCreator.php");

      if($_SESSION['userid']==null){
          header("Location:index.php");
      }

      if($_SESSION['level']>1)
        header("Location: upload_apps.php");
      

      $userid = $_SESSION['userid'];
      $sql= "SELECT * FROM usersinfo where userid = $userid";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();
      if($row['balance']<500000){
          header("Location:redeemCode.php");
      }

      ?>
</head>
<body>
      <form action="addNewCreator.php">
          <h1>Pay 500000 dong to become a developer?</h1>
          Your developer slogan
          <br>
          <input type="text" name="name" value="<?php echo $_SESSION['username']?>" hidden></div>
          <textarea name="slogan" id="" cols="30" rows="5"></textarea>
          <br>
          <button type="submit" naclass="btn btn-success">Submit</button>
      </form>
</body>
</html>
