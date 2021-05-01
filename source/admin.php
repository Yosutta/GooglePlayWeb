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

      $price = "";
      $numbers = "";


      if(isset($_POST['giftcodeprice']) and isset($_POST['codes'])){
        global $price, $numbers;
        $price = $_POST['giftcodeprice'];
        $numbers = $_POST['codes'];
        }
    ?>
    <title>Upload Applications</title>
</head>
<body>
    <div class="upload_app_frame">
        <div id="title">
            <p>Show us your incredible application</p>
        </div> 
        <!-- App's Image -->
        <div id="content1">
        Apps 
        </div>
        <!-- App's Title -->
        <div id="content2">
            Title

        </div>
        <!-- Hidden Creator id -->
        <input type="hidden" value="
        <?php
            echo $_SESSION['userid'];
        ?>
        " name="creator_id"/>
        <!-- App's Creator -->
        <div id="content3">
            Creator
        </div>

        <!-- App's category -->
        <form action="" method="post" id="cator">
            <h3>Create gift code</h3>
            Price
            <select name="giftcodeprice" id="giftcodeprice">
                <option value="20000">20000₫</option>
                <option value="50000">50000₫</option>
                <option value="100000">100000₫</option>
                <option value="200000">200000₫</option>
                <option value="500000">500000₫</option>
            </select>
            <br><br>
            Numbers of codes
            <input type="number" name="codes" id="codes">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
 
</body> 
<?php
    if(isset($_POST['giftcodeprice']) and isset($_POST['codes'])){
       include("generateGiftCode.php");
       generateGiftCode($price,$numbers);
       header("Location:admin.php");
    }
?>
</html>