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
      echo "<link rel='stylesheet' type='text/css' href='showPasswordResetBox.php'>";
      echo "<link rel='stylesheet' type='text/css' href='style.css'>";
    ?>
</head>
<body>


  <!-- <form action="" method="post" style="display:none" id="resetPass">
    Change your password
    <br>
    <input type="text" name="newPass" id="newPass">
    <button type="submit" class="btn btn-success">Submit</button>
  </form> -->


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

    $email = "";

    function getEmail($code){
      global $conn;
      $sql = "SELECT email FROM emailverification where code='$code'";

      $result = $conn->query($sql);
      $row = $result->fetch_assoc();
      return $row['email'];
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
        $email = getEmail($code);
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

    function confirmVerification($code){
      if(checkCode($code)){

        echo "<form action='' method='post' id='resetPass'>Change your password<br><input type='password' name='newPass' id='newPass'><br><br>Re-enter your password<br><input type='password' name='CnewPass' id='CnewPass'><br><br><button type='submit' class='btn btn-success'>Submit</button></form>";
      }
      else
        echo "This email verification link has expired";
    }

    function resetPass($newPass,$email,$code){
      global $conn;
      $email = getEmail($code);
      print_r($newPass);
      $sql = "UPDATE users SET password ='$newPass' WHERE email = '$email'";

      $conn->query($sql);

      echo "Password has been change for account $email";
      echo $code;
      $sql = "DELETE from emailverification where code = '$code'";
      $conn->query($sql);
      header("Location:login.php");
    }

    if(isset($_GET['token'])){
      $code = $_GET['token'];
      confirmVerification($code);
    }

    if(isset($_POST['newPass'])){
      $newPass = $_POST['newPass'];
      $code = $_GET['token'];
      resetPass($newPass,$email,$code);
    }
?>
</html>