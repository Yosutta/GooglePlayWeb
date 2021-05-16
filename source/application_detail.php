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

        if(isset($_GET['appid'])){
            $appid =  $_GET['appid'];
        }

        $sql = "SELECT * FROM `apps`";
        $appList = [];
        $result = $conn->query($sql);
        $row = $result->fetch_assoc(); 
        if($row){
            array_push($appList, [$row['appname'],$row['appid']]);
            while($row=$result->fetch_assoc()){
                array_push($appList, [$row['appname'],$row['appid']]);
            }    
          }

        $sql = "SELECT * FROM `apps` where appid = '$appid'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $screenshots = json_decode($row['screenshotlink']);  
        $decrip =$row['description'];
    ?>
</head>
<script>
    let appList = <?php echo json_encode($appList)?>;
</script>
<body class="testing_Grid">     
  <!-- Header  -->
    <div class="container-fluid" id="header">
      <a href="index.php">
          <img class="" src="https://www.gstatic.com/android/market_images/web/play_prism_hlock_2x.png" alt="GooglePlay">
      </a>
      <form action="#" autocomplete="off">
          <nav class="navbar">
              <input class="focus" id="searchbar" type="text" name="search" placeholder="Search" onkeyup="appSearch(appList,value)">
              <button class="bg-primary text-white border rounded-right" type="submit">
                  <i class="fas fa-search"></i>
              </button>
              <table class="mt-5 fixed-top shadow" id="suggestion"></table>
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


  <!-- Navigation bar -->
    <div class="bg-white stickyNav" style="height:48px;top:0px;">
    <a href="#">
        <div class="catPlacement float-left text-white" style="background-color:#689f38;font-size:18px;padding:10px 30px;padding-right:83px">
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
    <div class="stickyNav shadow-sm snav">
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
            <a href="appList.php?category=Game" class="text-decoration-none">
                <div class="catFont s2nav">Games</div>
            </a>
            <a href="#" class="text-decoration-none">
                <div class="catFont s2nav">Family</div>
            </a>
            <a href="#" class="text-decoration-none">
                <div class="catFont s2nav">Editors' Choice</div>
            </a>
        </div>
        <!-- Account, Payment methods, My subsciptions, Redeem -->
    </div>

    <div class="snav shadow-sm stickyNav" style="height:200px;background-color:#e9e9e9;top:248px;padding-top:8px">
        <a href="info_update.php" id="account" class="inactiveLink">
            <button type="button" class="btn container-fluid s3nav" data-toggle="" data-target="">
                Account
            </button>
        </a>
        <a href="upgrade.php?userid=<?php echo $_SESSION['userid']?>" id="payment" class="inactiveLink">
            <button type="button" class="btn container-fluid s3nav" data-toggle="" data-target="">
                Payment methods
            </button>
        </a>
        <button type="button" class="btn container-fluid s3nav" data-toggle="" data-target="">
            My subsciptions
        </button>
        <a href="redeemCode.php">
            <button type="button" class="btn container-fluid s3nav" data-toggle="" data-target="">
                Redeem
            </button>
        </a>
        <button type="button" class="btn container-fluid s3nav" data-toggle="" data-target="">
            My wishlist
        </button>
        <button type="button" class="btn container-fluid s3nav" data-toggle="" data-target="">
            My play activity
        </button>
        <a href="upload_apps.php" id="devsite" class="inactiveLink">
            <button type="button" class="btn container-fluid s3nav" data-toggle="tooltip" title="Hello" data-target="">
                Developer's site
            </button>
        </a>
    </div>  
    <div class="alignment_frame_ad">
        <div class="frame_ad">
            <img class="image_ad" style="padding-right:40px; float:left"src="<?php echo $row['link']?>">
            <div class="infor_ad">
            <p class="title_ad"><?php echo $row['appname']?></p>
            <div class="rating_ad">
                <a href="creator.php?creator=<?php echo $row['creator']?>" class="a_tag_ad"><?php echo $row['creator']?></a>
                <a href="#" class="a_tag_ad"><?php echo $row['category']?></a>
                <p class="float-right rating_start_ad" ><?php echo $row['ranking']?>/5 &#9733</p>
                <p class="float-right"><?php echo $row['downloads']?></p>
            </div>


            <div class="div_install_btn_ad">
                <button type="submit" class="btn btn-success">Install</button>
            </div>
            </div>
            <br> 
            <br>
            <div style="width: auto; height :auto">
            <div id="myCarousel" class="carousel slide float-left" data-ride="carousel">
            <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
            <?php
             for($i=0;$i<count($screenshots);$i++){
                if ($i!= 0){
                    echo '<div class="carousel-item">' ;
                    echo "<img class='d-block h-100  w-100 p-3 ' src='$screenshots[$i]'>";
                    echo '</div>';
                }
                else {
                    echo '<div class="carousel-item active">' ;
                    echo "<img class='d-block  h-100 w-100 p-3' src='$screenshots[$i]'>";
                    echo '</div>';
                }
            }
            ?>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
            </div>
            </div>
            <div>
                <p class ="ad_descript_title">App Description</p> 
                <?php echo  '<p>'.$row['description'].'</p>' ?>
            </div>
            <br>
        </div>
    </div>
<script>
// Activate Carousel
$("#myCarousel").carousel();

// Enable Carousel Indicators
$(".item").click(function(){
  $("#myCarousel").carousel(1);
});

// Enable Carousel Controls
$(".left").click(function(){
  $("#myCarousel").carousel("prev");
});
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>  
</body>
</html>