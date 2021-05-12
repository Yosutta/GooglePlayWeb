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
        echo "<link href='https://fonts.googleapis.com/css?family=Inter:400,800,900&display=swap' rel='stylesheet'>";
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

        
        $sql = "SELECT * FROM `apps`";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        
        
    ?>    
    <!-- Header  -->
    <div class="container-fluid" id="header" >
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
    <div  id="Appsbar">
    <div style="height:48px;" class=" container-fluid p-0 bg-white ">
        <a href="#">
            <div class="catPlacement float-left text-white" style="background-color:#689f38;font-size:18px;padding:10px 30px; padding-right:83px;">
                <i class="mt-1 fas fa-border-all"></i> &nbsp &nbsp Apps
            </div>
        </a>
        <a href="#">
            <div class="catPlacement float-left catFont" style="margin-left:60px">
                Categories <i class="fas fa-chevron-down"></i>
            </div>
        </a>
        <div class="float-left mt-2" style="border-left:1px solid #c1c1c1;height:30px;"></div>
        <a href="#">
            <div class="catPlacement float-left catFont">
                Home
            </div>
        </a>
        <a href="#">
            <div class="catPlacement float-left catFont">
                Top Chart
            </div>
        </a>
        <a href="#">
            <div class="catPlacement float-left catFont">
                New releases
            </div>
        </a>
        <button type="button" class="float-right rounded" style="margin-top:8px;margin-right:55px;padding:2px 20px;border:1px solid #c1c1c1">
            <i class="fas fa-cog"></i>
        </button>
    </div>
    <!-- Navigation Sidebar-->
    <div class="shadow-sm snav">
    <!-- My Apps, Shop -->
    <div style="padding-top:7px;padding-bottom:7px">
        <a href="#" class="text-decoration-none">
            <div class="s1nav">My apps</div>
        </a>
        <a href="#" class="text-decoration-none">
            <div class="s1nav" style="color:rgb(124, 175, 48)">Shop</div>
        </a>
        <hr style="width:130px;margin-left:25px;margin-bottom:5px">
    </div>
    <!-- Games, Family, Editor's Choice -->
    <div>
        <a href="#" class="text-decoration-none">
            <div class="catFont s2nav">Games</div>
        </a>
        <a href="#" class="text-decoration-none">
            <div class="catFont s2nav">Family</div>
        </a>
        <a href="#" class="text-decoration-none">
            <div class="catFont s2nav">Editors' Choice</div>
        </a>
    </div>
    </div>

    <!-- Account, Payment methods, My subsciptions, Redeem -->
    <div class="stickyNav shadow-sm snav" style="height:200px;background-color:#e9e9e9;">
        <a href="info_update.php">
            <button type="button" class="btn container-fluid s3nav" data-toggle="" data-target="">
                Account
            </button>
        </a>
        <button type="button" class="btn container-fluid s3nav" data-toggle="" data-target="">
            Payment methods
        </button>
        <button type="button" class="btn container-fluid s3nav" data-toggle="" data-target="">
            My subsciptions
        </button>
        <button type="button" class="btn container-fluid s3nav" data-toggle="modal" data-target="#exampleModal">
            Redeem
        </button>
        <button type="button" class="btn container-fluid s3nav" data-toggle="" data-target="">
            My wishlist
        </button>
        <button type="button" class="btn container-fluid s3nav" data-toggle="" data-target="">
            My play activity
        </button>
        <a href="upload_apps.php">
            <button type="button" class="btn container-fluid s3nav" data-toggle="" data-target="">
                Parent's guide
            </button>
        </a>
    </div>
    </div> 
</head>
<body>
    <script>
        window.onscroll = function() {myFunction()};
        var navbar = document.getElementById("Appsbar");
        var sticky = navbar.offsetTop;
        function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky");
        } else {
            navbar.classList.remove("sticky");
        }
        }
    </script>
</body>
</html>