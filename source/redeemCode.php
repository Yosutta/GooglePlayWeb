<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GooglePlay</title>
    <?php
        session_start();
        echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>";
        echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>";
        echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js'>";
        echo "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>";
        echo "<script src='https://kit.fontawesome.com/a076d05399.js'></script>";
        echo "<link rel='icon' href='resources/icon.png'>";
        echo "<script src='main.js'></script>";
        echo "<link rel='stylesheet' type='text/css' href='style.css'>";

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


        if(isset($_POST['giftCode'])){
            $code = addslashes($_POST['giftCode']);
            $sql = "SELECT * from `giftcode` where serial ='$code'";
            global $conn;
            $result = $conn->query($sql);
            if($row = $result->fetch_assoc()){  
                $userid = $_SESSION['userid'];
                $sql = "SELECT balance from usersinfo where userid = $userid";
                $result = $conn->query($sql);
                $row1 = $result->fetch_assoc();
                $balance = $row1['balance'] + $row['price'];
             
                $sql = "UPDATE `usersinfo` SET `balance`=$balance WHERE userid = $userid";
                $conn->query($sql);

                global $code;
                echo $code;
                $sql = "DELETE FROM `giftcode` WHERE serial = '$code'";
                $conn->query($sql);
            }
            else{
                echo "<p style='color:red'>This code is invalid or has expired</p>";
            }
        }

    ?>
</head>
<body>
  <!-- Header  -->
    <div class="container-fluid" id="header">
      <a href="index.php">
          <img class="" src="https://www.gstatic.com/android/market_images/web/play_prism_hlock_2x.png" alt="GooglePlay">
      </a>
      <form action="#">
          <nav class="navbar">
              <input class="focus" type="text" name="search" placeholder="Search">
              <button class="bg-primary text-white border rounded-right" type="submit">
                  <i class="fas fa-search"></i>
              </button>
          </nav>
      </form>
      <!-- Account Image -->
      <?php
        if(isset($_POST['btn1'])){
            unset($_SESSION['username']);
            unset($_SESSION['userid']);
            unset($_SESSION['level']);
            unset($_SESSION['pictureLink']);
        }
        if(!isset($_SESSION['username'])){
            echo '<a href="login.php" class="float-right mr-4 mt-2 rounded bg-primary text-white text-decoration-none" style="font-size:15px;padding:5px 15px">Sign in</a>';
        }
        else{
            $username = $_SESSION['username'];
            echo $_SESSION['level'];
            echo $username;
            if(strlen($_SESSION['pictureLink'])>3){
                $pictureLink = $_SESSION['pictureLink'];
            }
            else
                $pictureLink = "resources/default/default_img.jpg";
            echo '<img class="rounded-circle float-right mr-4 mt-2" src='.$pictureLink.' alt='.$username.'>';
            }
      ?>
      <form action="" method="post">
          <button type="submit" name="btn1">Log out</button>
      </form>
     </div>
    
    <form action="" method="post">
        <h1>Redeem Code</h1>
        <input style="text-transform:uppercase" type="text" name="giftCode" id="giftCode" maxlength="8">
        <button type="submit" class="btn btn-success">Redeem</button>
    </form>
</body>
</html>