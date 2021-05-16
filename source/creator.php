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
        echo "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'></script>";
        echo "<link href='https://fonts.googleapis.com/css?family=Inter:400,800,900&display=swap' rel='stylesheet'>";
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

        // UPDATE mostDownloads
        include("mostDownload.php");
        mostDownloads();

        // UPDATE mostDownloadsPaid
        include("mostDownloadPaid.php");
        mostDownloadsPaid();
        
        // GET CATEGORIES
        $sql = "SELECT * from categories";
        $categories = [];
        $result = $conn->query($sql);
        $categoriesTable =  [];
        while($row1 = $result->fetch_assoc()){
          array_push($categories,$row1['catename']);
          array_push($categoriesTable,$row1);
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
          if(isset($_GET['creator'])){
            $creatorname = $_GET['creator'];
        }

        $sql = "SELECT * FROM creator where name = '$creatorname'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        $featured_appid = $row['feature'];

        $sql = "SELECT * FROM apps where appid = '$featured_appid'";
        $result = $conn->query($sql);
        if($featured_app = $result->fetch_assoc()){
        }

        
    ?>
<script>
    src="jquery.js"
    $(function(){
      $("#loadheader").load("header.php"); 
    });
    if (history.scrollRestoration) {
    history.scrollRestoration = 'manual';
} else {
    window.onbeforeunload = function () {
        window.scrollTo(0, 0);
    }
}   
</script>
</head>
<script>
    let appList = <?php echo json_encode($appList)?>;
</script>
</head>
<body class="">
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
        <select name="category_name" style="border:none;outline:0px;" onChange="window.location.href=this.value">
            <option value="" hidden>Categories<i class="fas fa-chevron-down"></i></option>
            <?php 
            for($i=0;$i<count($categories);$i++){
                $category = $categories[$i];
                echo "<option value='fully_element_frame_category.php?category=$category'>" . $category. "</option>";
            }
            ?>
    </select>
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

    <div class="layout_creator">
        <div class="div_background" style="background-image: url(<?php echo $row['backgroundlink']?>);">
            <div>
                <div class="div_title_description">
                    <div>
                        <img class="img_creator" src="<?php echo $row['iconlink']?>"/>
                    </div>
                    <p class="title_creator"><?php echo $row['name']?></p>
                    <p class="title_description"><?php echo $row['tittle']?></p>
                    </div>
                <div class="content_text_featured"><p class="featured">Featured</p></div>
                <div class="creator_feature">
                    <div class="featured_app">
                        <img src="<?php
                            $screenshot = json_decode($featured_app['screenshotlink'])[0];
                            echo $screenshot;
                        ?>" id="feature_image"/>
                    </div>
                    <div class="infor_feature">
                        <img src="<?php echo $featured_app['link']?>" id="featured_app_img"/>
                        <p id="title_featured_app"><?php echo $featured_app['appname']?></p>
                        <p id="title_featured_star"><?php echo $featured_app['ranking']?>/5&#9733</p>
                        <p id="title_featured_app_description"><?php echo $featured_app['description']?></p>
                    </div>
                </div>
                <form action="fully_element_frame.php">
                    <input type="text" name="creator" value="<?php echo $_GET['creator']?>" hidden>
                    <div style="text-align:left;">
                        <?php include("fully_element_frame.php"); ?>  
                        <p>
                        <br>
                        <br><br><br><br><br><br><br><br><br><br><br><br><br>
                        </p>    
                    </div>
                </form>
            </div>
        </div>
	</div>
</body>
<?php
    if($_SESSION !=null){
        $level = $_SESSION['level'];
        echo '<script type="text/javascript">activateLink('.$level.');</script>';
    }
?>
</html>