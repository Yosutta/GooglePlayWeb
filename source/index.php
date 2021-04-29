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

        
        $sql = "SELECT * FROM `apps`";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        
        
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


  <!-- Navigation bar -->
    <div class="bg-white stickyNav" style="height:48px;top:0">
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
        <!-- Account, Payment methods, My subsciptions, Redeem -->
    </div>

    <div class="snav shadow-sm stickyNav" style="height:200px;background-color:#e9e9e9;top:248px;padding-top:8px">
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
        <button type="button" class="btn container-fluid s3nav" data-toggle="" data-target="">
            Parent's guide
        </button>
    </div>

    <!-- Code Redeem pop up -->
    <!-- Button trigger modal -->

    <!-- Modal -->
            

    <!-- All apps list -->
    <!-- Most downloads -->
    <div class="" style="">
        <?php
            $sql = "SELECT * FROM `mostdownloadsfree`";
            $result = $conn->query($sql);
            $mostDownloadsFree = [];
            while($row=$result->fetch_assoc()){
                array_push($mostDownloadsFree,$row['appid']);
            }
            
            include("getAppInfo.php");
        ?>
        <h2 class="appGridNameFirst">Most Downloads</h2>
        <div class="appGridPosition" style="margin-left:250px;">
            <div class="float-left mr-2">
                <?php  $row = getAppInfo($mostDownloadsFree[0]);?>
                <div class="card" style="width: 10rem; position:static">
                <a href="appTemplate.php?appid=<?php echo $row['appid']?>" class="items-holder" name="appImage">
                    <img class="card-img-top appImage" src="<?php echo $row['link']?>" alt="Card image cap">
                </a>
                    <div class="card-body">
                        <a href="appTemplate.php?appid=<?php echo $row['appid']?>" name="appid" class="card-title"><?php echo $row['appname'] ?></a>
                        <br>
                        <a href="appTemplate.php?creator=<?php echo $row['creator']?>" name="creator"><?php echo $row['creator'] ?></a>
                    </div>
                    <p class="float-left display-5 pl-3 d-inline mb-0"><?php echo $row['ranking']?>/5 &#9733</p>
                    <?php 
                        if($row['cost']!=0){
                            $cost = $row['cost'];
                            echo '<p class="float-right d-inline-block pl-3 text-success">&#8363;'.$cost.'</p>';
                        }
                        else
                            echo '<p class="text-success pl-3">Free</p>'
                    ?>
                    <!-- <p class="float-right d-inline-block text-success">&#8363;<?php echo $row['cost']?></p> -->
                </div>
            </div>
    
            <div class="float-left mr-2">
                <?php  $row = getAppInfo($mostDownloadsFree[1]);?>
                <div class="card" style="width: 10rem; position:static">
                <a href="appTemplate.php?appid=<?php echo $row['appid']?>" class="items-holder" name="appImage">
                    <img class="card-img-top appImage" src="<?php echo $row['link']?>" alt="Card image cap">
                </a>
                    <div class="card-body">
                        <a href="appTemplate.php?appid=<?php echo $row['appid']?>" name="appid" class="card-title"><?php echo $row['appname'] ?></a>
                        <br>
                        <a href="appTemplate.php?creator=<?php echo $row['creator']?>" name="creator"><?php echo $row['creator'] ?></a>
                    </div>
                    <p class="float-left display-5 pl-3 d-inline mb-0"><?php echo $row['ranking']?>/5 &#9733</p>
                    <?php 
                        if($row['cost']!=0){
                            $cost = $row['cost'];
                            echo '<p class="float-right d-inline-block pl-3 text-success">&#8363;'.$cost.'</p>';
                        }
                        else
                            echo '<p class="text-success pl-3">Free</p>'
                    ?>
                    <!-- <p class="float-right d-inline-block text-success">&#8363;<?php echo $row['cost']?></p> -->
                </div>
            </div>
            <div class="float-left mr-2">
                <?php  $row = getAppInfo($mostDownloadsFree[2]);?>
                <div class="card" style="width: 10rem; position:static">
                <a href="appTemplate.php?appid=<?php echo $row['appid']?>" class="items-holder" name="appImage">
                    <img class="card-img-top appImage" src="<?php echo $row['link']?>" alt="Card image cap">
                </a>
                    <div class="card-body">
                        <a href="appTemplate.php?appid=<?php echo $row['appid']?>" name="appid" class="card-title"><?php echo $row['appname'] ?></a>
                        <br>
                        <a href="appTemplate.php?creator=<?php echo $row['creator']?>" name="creator"><?php echo $row['creator'] ?></a>
                    </div>
                    <p class="float-left display-5 pl-3 d-inline mb-0"><?php echo $row['ranking']?>/5 &#9733</p>
                    <?php 
                        if($row['cost']!=0){
                            $cost = $row['cost'];
                            echo '<p class="float-right d-inline-block pl-3 text-success">&#8363;'.$cost.'</p>';
                        }
                        else
                            echo '<p class="text-success pl-3">Free</p>'
                    ?>
                    <!-- <p class="float-right d-inline-block text-success">&#8363;<?php echo $row['cost']?></p> -->
                </div>
            </div>
            <div class="float-left mr-2">
                <?php  $row = getAppInfo($mostDownloadsFree[3]);?>
                <div class="card" style="width: 10rem; position:static">
                <a href="appTemplate.php?appid=<?php echo $row['appid']?>" class="items-holder" name="appImage">
                    <img class="card-img-top appImage" src="<?php echo $row['link']?>" alt="Card image cap">
                </a>
                    <div class="card-body">
                        <a href="appTemplate.php?appid=<?php echo $row['appid']?>" name="appid" class="card-title"><?php echo $row['appname'] ?></a>
                        <br>
                        <a href="appTemplate.php?creator=<?php echo $row['creator']?>" name="creator"><?php echo $row['creator'] ?></a>
                    </div>
                    <p class="float-left display-5 pl-3 d-inline mb-0"><?php echo $row['ranking']?>/5 &#9733</p>
                    <?php 
                        if($row['cost']!=0){
                            $cost = $row['cost'];
                            echo '<p class="float-right d-inline-block pl-3 text-success">&#8363;'.$cost.'</p>';
                        }
                        else
                            echo '<p class="text-success pl-3">Free</p>'
                    ?>
                    <!-- <p class="float-right d-inline-block text-success">&#8363;<?php echo $row['cost']?></p> -->
                </div>
            </div>
            <div class="float-left mr-2">
                <?php  $row = getAppInfo($mostDownloadsFree[4]);?>
                <div class="card" style="width: 10rem; position:static">
                <a href="appTemplate.php?appid=<?php echo $row['appid']?>" class="items-holder" name="appImage">
                    <img class="card-img-top appImage" src="<?php echo $row['link']?>" alt="Card image cap">
                </a>
                    <div class="card-body">
                        <a href="appTemplate.php?appid=<?php echo $row['appid']?>" name="appid" class="card-title"><?php echo $row['appname'] ?></a>
                        <br>
                        <a href="appTemplate.php?creator=<?php echo $row['creator']?>" name="creator"><?php echo $row['creator'] ?></a>
                    </div>
                    <p class="float-left display-5 pl-3 d-inline mb-0"><?php echo $row['ranking']?>/5 &#9733</p>
                    <?php 
                        if($row['cost']!=0){
                            $cost = $row['cost'];
                            echo '<p class="float-right d-inline-block pl-3 text-success">&#8363;'.$cost.'</p>';
                        }
                        else
                            echo '<p class="text-success pl-3">Free</p>'
                    ?>
                    <!-- <p class="float-right d-inline-block text-success">&#8363;<?php echo $row['cost']?></p> -->
                </div>
            </div>
            <div class="float-left mr-2">
                <?php  $row = getAppInfo($mostDownloadsFree[5]);?>
                <div class="card" style="width: 10rem; position:static">
                <a href="appTemplate.php?appid=<?php echo $row['appid']?>" class="items-holder" name="appImage">
                    <img class="card-img-top appImage" src="<?php echo $row['link']?>" alt="Card image cap">
                </a>
                    <div class="card-body">
                        <a href="appTemplate.php?appid=<?php echo $row['appid']?>" name="appid" class="card-title"><?php echo $row['appname'] ?></a>
                        <br>
                        <a href="appTemplate.php?creator=<?php echo $row['creator']?>" name="creator"><?php echo $row['creator'] ?></a>
                    </div>
                    <p class="float-left display-5 pl-3 d-inline mb-0"><?php echo $row['ranking']?>/5 &#9733</p>
                    <?php 
                        if($row['cost']!=0){
                            $cost = $row['cost'];
                            echo '<p class="float-right d-inline-block pl-3 text-success">&#8363;'.$cost.'</p>';
                        }
                        else
                            echo '<p class="text-success pl-3">Free</p>'
                    ?>
                    <!-- <p class="float-right d-inline-block text-success">&#8363;<?php echo $row['cost']?></p> -->
                </div>
            </div>
            <div class="float-left mr-2 appGridCounts-sm">
                <?php  $row = getAppInfo($mostDownloadsFree[6]);?>
                <div class="card" style="width: 10rem; position:static">
                <a href="appTemplate.php?appid=<?php echo $row['appid']?>" class="items-holder" name="appImage">
                    <img class="card-img-top appImage" src="<?php echo $row['link']?>" alt="Card image cap">
                </a>
                    <div class="card-body">
                        <a href="appTemplate.php?appid=<?php echo $row['appid']?>" name="appid" class="card-title"><?php echo $row['appname'] ?></a>
                        <br>
                        <a href="appTemplate.php?creator=<?php echo $row['creator']?>" name="creator"><?php echo $row['creator'] ?></a>
                    </div>
                    <p class="float-left display-5 pl-3 d-inline mb-0"><?php echo $row['ranking']?>/5 &#9733</p>
                    <?php 
                        if($row['cost']!=0){
                            $cost = $row['cost'];
                            echo '<p class="float-right d-inline-block pl-3 text-success">&#8363;'.$cost.'</p>';
                        }
                        else
                            echo '<p class="text-success pl-3">Free</p>'
                    ?>
                    <!-- <p class="float-right d-inline-block text-success">&#8363;<?php echo $row['cost']?></p> -->
                </div>
            </div>
            <div class="float-left mr-2 appGridCounts-md">
                <?php  $row = getAppInfo($mostDownloadsFree[7]);?>
                <div class="card" style="width: 10rem; position:static">
                <a href="appTemplate.php?appid=<?php echo $row['appid']?>" class="items-holder" name="appImage">
                    <img class="card-img-top appImage" src="<?php echo $row['link']?>" alt="Card image cap">
                </a>
                    <div class="card-body">
                        <a href="appTemplate.php?appid=<?php echo $row['appid']?>" name="appid" class="card-title"><?php echo $row['appname'] ?></a>
                        <br>
                        <a href="appTemplate.php?creator=<?php echo $row['creator']?>" name="creator"><?php echo $row['creator'] ?></a>
                    </div>
                    <p class="float-left display-5 pl-3 d-inline mb-0"><?php echo $row['ranking']?>/5 &#9733</p>
                    <?php 
                        if($row['cost']!=0){
                            $cost = $row['cost'];
                            echo '<p class="float-right d-inline-block pl-3 text-success">&#8363;'.$cost.'</p>';
                        }
                        else
                            echo '<p class="text-success pl-3">Free</p>'
                    ?>
                    <!-- <p class="float-right d-inline-block text-success">&#8363;<?php echo $row['cost']?></p> -->
                </div>
            </div>
            <div class="float-left mr-2 appGridCounts-lg">
                <?php  $row = getAppInfo($mostDownloadsFree[8]);?>
                <div class="card" style="width: 10rem; position:static">
                <a href="appTemplate.php?appid=<?php echo $row['appid']?>" class="items-holder" name="appImage">
                    <img class="card-img-top appImage" src="<?php echo $row['link']?>" alt="Card image cap">
                </a>
                    <div class="card-body">
                        <a href="appTemplate.php?appid=<?php echo $row['appid']?>" name="appid" class="card-title"><?php echo $row['appname'] ?></a>
                        <br>
                        <a href="appTemplate.php?creator=<?php echo $row['creator']?>" name="creator"><?php echo $row['creator'] ?></a>
                    </div>
                    <p class="float-left display-5 pl-3 d-inline mb-0"><?php echo $row['ranking']?>/5 &#9733</p>
                    <?php 
                        if($row['cost']!=0){
                            $cost = $row['cost'];
                            echo '<p class="float-right d-inline-block pl-3 text-success">&#8363;'.$cost.'</p>';
                        }
                        else
                            echo '<p class="text-success pl-3">Free</p>'
                    ?>
                    <!-- <p class="float-right d-inline-block text-success">&#8363;<?php echo $row['cost']?></p> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Games -->
    <br>
    <div class="" style="margin-left: 250px;">
        <?php
            $sql = "SELECT * FROM `apps`";
            $result = $conn->query($sql);
            $list = [];
            while($row=$result->fetch_assoc()){
                if($row['category'] == "Game"){
                    array_push($list,$row['appid']);
                }
            }
        ?> 
        <h2 class="appGridName">Games</h2>
        <div class="appGridPosition">
            <div class="float-left mr-2">
                <?php  $row = getAppInfo($list[0]);?>
                <div class="card" style="width: 10rem; position:static">
                <a href="appTemplate.php?appid=<?php echo $row['appid']?>" class="items-holder" name="appImage">
                    <img class="card-img-top appImage" src="<?php echo $row['link']?>" alt="Card image cap">
                </a>
                    <div class="card-body">
                        <a href="appTemplate.php?appid=<?php echo $row['appid']?>" name="appid" class="card-title"><?php echo $row['appname'] ?></a>
                        <br>
                        <a href="appTemplate.php?creator=<?php echo $row['creator']?>" name="creator"><?php echo $row['creator'] ?></a>
                    </div>
                    <p class="float-left display-5 pl-3 d-inline mb-0"><?php echo $row['ranking']?>/5 &#9733</p>
                    <?php 
                        if($row['cost']!=0){
                            $cost = $row['cost'];
                            echo '<p class="float-right d-inline-block pl-3 text-success">&#8363;'.$cost.'</p>';
                        }
                        else
                            echo '<p class="text-success pl-3">Free</p>'
                    ?>
                    <!-- <p class="float-right d-inline-block text-success">&#8363;<?php echo $row['cost']?></p> -->
                </div>
            </div>
    
            <div class="float-left mr-2">
                <?php  $row = getAppInfo($list[1]);?>
                <div class="card" style="width: 10rem; position:static">
                <a href="appTemplate.php?appid=<?php echo $row['appid']?>" class="items-holder" name="appImage">
                    <img class="card-img-top" src="<?php echo $row['link']?>" alt="Card image cap">
                </a>
                    <div class="card-body">
                        <a href="appTemplate.php?appid=<?php echo $row['appid']?>" name="appid" class="card-title"><?php echo $row['appname'] ?></a>
                        <br>
                        <a href="appTemplate.php?creator=<?php echo $row['creator']?>" name="creator"><?php echo $row['creator'] ?></a>
                    </div>
                    <p class="float-left display-5 pl-3 d-inline mb-0"><?php echo $row['ranking']?>/5 &#9733</p>
                    <?php 
                        if($row['cost']!=0){
                            $cost = $row['cost'];
                            echo '<p class="float-right d-inline-block pl-3 text-success">&#8363;'.$cost.'</p>';
                        }
                        else
                            echo '<p class="text-success pl-3">Free</p>'
                    ?>
                    <!-- <p class="float-right d-inline-block text-success">&#8363;<?php echo $row['cost']?></p> -->
                </div>
            </div>
            <div class="float-left mr-2">
                <?php  $row = getAppInfo($list[2]);?>
                <div class="card" style="width: 10rem; position:static">
                <a href="appTemplate.php?appid=<?php echo $row['appid']?>" class="items-holder" name="appImage">
                    <img class="card-img-top appImage" src="<?php echo $row['link']?>" alt="Card image cap">
                </a>
                    <div class="card-body">
                        <a href="appTemplate.php?appid=<?php echo $row['appid']?>" name="appid" class="card-title"><?php echo $row['appname'] ?></a>
                        <br>
                        <a href="appTemplate.php?creator=<?php echo $row['creator']?>" name="creator"><?php echo $row['creator'] ?></a>
                    </div>
                    <p class="float-left display-5 pl-3 d-inline mb-0"><?php echo $row['ranking']?>/5 &#9733</p>
                    <?php 
                        if($row['cost']!=0){
                            $cost = $row['cost'];
                            echo '<p class="float-right d-inline-block pl-3 text-success">&#8363;'.$cost.'</p>';
                        }
                        else
                            echo '<p class="text-success pl-3">Free</p>'
                    ?>
                    <!-- <p class="float-right d-inline-block text-success">&#8363;<?php echo $row['cost']?></p> -->
                </div>
            </div>
            <div class="float-left mr-2">
                <?php  $row = getAppInfo($list[3]);?>
                <div class="card" style="width: 10rem; position:static">
                <a href="appTemplate.php?appid=<?php echo $row['appid']?>" class="items-holder" name="appImage">
                    <img class="card-img-top appImage" src="<?php echo $row['link']?>" alt="Card image cap">
                </a>
                    <div class="card-body">
                        <a href="appTemplate.php?appid=<?php echo $row['appid']?>" name="appid" class="card-title"><?php echo $row['appname'] ?></a>
                        <br>
                        <a href="appTemplate.php?creator=<?php echo $row['creator']?>" name="creator"><?php echo $row['creator'] ?></a>
                    </div>
                    <p class="float-left display-5 pl-3 d-inline mb-0"><?php echo $row['ranking']?>/5 &#9733</p>
                    <?php 
                        if($row['cost']!=0){
                            $cost = $row['cost'];
                            echo '<p class="float-right d-inline-block pl-3 text-success">&#8363;'.$cost.'</p>';
                        }
                        else
                            echo '<p class="text-success pl-3">Free</p>'
                    ?>
                    <!-- <p class="float-right d-inline-block text-success">&#8363;<?php echo $row['cost']?></p> -->
                </div>
            </div>
            <div class="float-left mr-2">
                <?php  $row = getAppInfo($list[4]);?>
                <div class="card" style="width: 10rem; position:static">
                <a href="appTemplate.php?appid=<?php echo $row['appid']?>" class="items-holder" name="appImage">
                    <img class="card-img-top appImage" src="<?php echo $row['link']?>" alt="Card image cap">
                </a>
                    <div class="card-body">
                        <a href="appTemplate.php?appid=<?php echo $row['appid']?>" name="appid" class="card-title"><?php echo $row['appname'] ?></a>
                        <br>
                        <a href="appTemplate.php?creator=<?php echo $row['creator']?>" name="creator"><?php echo $row['creator'] ?></a>
                    </div>
                    <p class="float-left display-5 pl-3 d-inline mb-0"><?php echo $row['ranking']?>/5 &#9733</p>
                    <?php 
                        if($row['cost']!=0){
                            $cost = $row['cost'];
                            echo '<p class="float-right d-inline-block pl-3 text-success">&#8363;'.$cost.'</p>';
                        }
                        else
                            echo '<p class="text-success pl-3">Free</p>'
                    ?>
                    <!-- <p class="float-right d-inline-block text-success">&#8363;<?php echo $row['cost']?></p> -->
                </div>
            </div>
            <div class="float-left mr-2">
                <?php  $row = getAppInfo($list[5]);?>
                <div class="card" style="width: 10rem; position:static">
                <a href="appTemplate.php?appid=<?php echo $row['appid']?>" class="items-holder" name="appImage">
                    <img class="card-img-top appImage" src="<?php echo $row['link']?>" alt="Card image cap">
                </a>
                    <div class="card-body">
                        <a href="appTemplate.php?appid=<?php echo $row['appid']?>" name="appid" class="card-title"><?php echo $row['appname'] ?></a>
                        <br>
                        <a href="appTemplate.php?creator=<?php echo $row['creator']?>" name="creator"><?php echo $row['creator'] ?></a>
                    </div>
                    <p class="float-left display-5 pl-3 d-inline mb-0"><?php echo $row['ranking']?>/5 &#9733</p>
                    <?php 
                        if($row['cost']!=0){
                            $cost = $row['cost'];
                            echo '<p class="float-right d-inline-block pl-3 text-success">&#8363;'.$cost.'</p>';
                        }
                        else
                            echo '<p class="text-success pl-3">Free</p>'
                    ?>
                    <!-- <p class="float-right d-inline-block text-success">&#8363;<?php echo $row['cost']?></p> -->
                </div>
            </div>
            <div class="float-left mr-2 appGridCounts-sm">
                <?php  $row = getAppInfo($list[6]);?>
                <div class="card" style="width: 10rem; position:static">
                <a href="appTemplate.php?appid=<?php echo $row['appid']?>" class="items-holder" name="appImage">
                    <img class="card-img-top appImage" src="<?php echo $row['link']?>" alt="Card image cap">
                </a>
                    <div class="card-body">
                        <a href="appTemplate.php?appid=<?php echo $row['appid']?>" name="appid" class="card-title"><?php echo $row['appname'] ?></a>
                        <br>
                        <a href="appTemplate.php?creator=<?php echo $row['creator']?>" name="creator"><?php echo $row['creator'] ?></a>
                    </div>
                    <p class="float-left display-5 pl-3 d-inline mb-0"><?php echo $row['ranking']?>/5 &#9733</p>
                    <?php 
                        if($row['cost']!=0){
                            $cost = $row['cost'];
                            echo '<p class="float-right d-inline-block pl-3 text-success">&#8363;'.$cost.'</p>';
                        }
                        else
                            echo '<p class="text-success pl-3">Free</p>'
                    ?>
                    <!-- <p class="float-right d-inline-block text-success">&#8363;<?php echo $row['cost']?></p> -->
                </div>
            </div>
            <div class="float-left mr-2 appGridCounts-md">
                <?php  $row = getAppInfo($list[7]);?>
                <div class="card" style="width: 10rem; position:static">
                <a href="appTemplate.php?appid=<?php echo $row['appid']?>" class="items-holder" name="appImage">
                    <img class="card-img-top appImage" src="<?php echo $row['link']?>" alt="Card image cap">
                </a>
                    <div class="card-body">
                        <a href="appTemplate.php?appid=<?php echo $row['appid']?>" name="appid" class="card-title"><?php echo $row['appname'] ?></a>
                        <br>
                        <a href="appTemplate.php?creator=<?php echo $row['creator']?>" name="creator"><?php echo $row['creator'] ?></a>
                    </div>
                    <p class="float-left display-5 pl-3 d-inline mb-0"><?php echo $row['ranking']?>/5 &#9733</p>
                    <?php 
                        if($row['cost']!=0){
                            $cost = $row['cost'];
                            echo '<p class="float-right d-inline-block pl-3 text-success">&#8363;'.$cost.'</p>';
                        }
                        else
                            echo '<p class="text-success pl-3">Free</p>'
                    ?>
                    <!-- <p class="float-right d-inline-block text-success">&#8363;<?php echo $row['cost']?></p> -->
                </div>
            </div>
            <div class="float-left mr-2 appGridCounts-lg">
                <?php  $row = getAppInfo($list[8]);?>
                <div class="card" style="width: 10rem; position:static">
                <a href="appTemplate.php?appid=<?php echo $row['appid']?>" class="items-holder" name="appImage">
                    <img class="card-img-top appImage" src="<?php echo $row['link']?>" alt="Card image cap">
                </a>
                    <div class="card-body">
                        <a href="appTemplate.php?appid=<?php echo $row['appid']?>" name="appid" class="card-title"><?php echo $row['appname'] ?></a>
                        <br>
                        <a href="appTemplate.php?creator=<?php echo $row['creator']?>" name="creator"><?php echo $row['creator'] ?></a>
                    </div>
                    <p class="float-left display-5 pl-3 d-inline mb-0"><?php echo $row['ranking']?>/5 &#9733</p>
                    <?php 
                        if($row['cost']!=0){
                            $cost = $row['cost'];
                            echo '<p class="float-right d-inline-block pl-3 text-success">&#8363;'.$cost.'</p>';
                        }
                        else
                            echo '<p class="text-success pl-3">Free</p>'
                    ?>
                    <!-- <p class="float-right d-inline-block text-success">&#8363;<?php echo $row['cost']?></p> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Most Paid Downloads -->
    <br>
    <div class="" style="margin-left: 250px;">
        <?php
            $sql = "SELECT * FROM `mostDownloadsPaid`";
            $result = $conn->query($sql);
            $list = [];
            while($row=$result->fetch_assoc()){
                array_push($list,$row['appid']);
            }
        ?> 
        <h2 class="appGridName">Most Paid Downloads</h2>
        <div class="appGridPosition">
            <div class="float-left mr-2">
                <?php  $row = getAppInfo($list[0]);?>
                <div class="card" style="width: 10rem; position:static">
                <a href="appTemplate.php?appid=<?php echo $row['appid']?>" class="items-holder" name="appImage">
                    <img class="card-img-top appImage" src="<?php echo $row['link']?>" alt="Card image cap">
                </a>
                    <div class="card-body">
                        <a href="appTemplate.php?appid=<?php echo $row['appid']?>" name="appid" class="card-title"><?php echo $row['appname'] ?></a>
                        <br>
                        <a href="appTemplate.php?creator=<?php echo $row['creator']?>" name="creator"><?php echo $row['creator'] ?></a>
                    </div>
                    <p class="float-left display-5 pl-3 d-inline mb-0"><?php echo $row['ranking']?>/5 &#9733</p>
                    <?php 
                        if($row['cost']!=0){
                            $cost = $row['cost'];
                            echo '<p class="float-right d-inline-block pl-3 text-success">&#8363;'.$cost.'</p>';
                        }
                        else
                            echo '<p class="text-success pl-3">Free</p>'
                    ?>
                    <!-- <p class="float-right d-inline-block text-success">&#8363;<?php echo $row['cost']?></p> -->
                </div>
            </div>
    
            <div class="float-left mr-2">
                <?php  $row = getAppInfo($list[1]);?>
                <div class="card" style="width: 10rem; position:static">
                <a href="appTemplate.php?appid=<?php echo $row['appid']?>" class="items-holder" name="appImage">
                    <img class="card-img-top" src="<?php echo $row['link']?>" alt="Card image cap">
                </a>
                    <div class="card-body">
                        <a href="appTemplate.php?appid=<?php echo $row['appid']?>" name="appid" class="card-title"><?php echo $row['appname'] ?></a>
                        <br>
                        <a href="appTemplate.php?creator=<?php echo $row['creator']?>" name="creator"><?php echo $row['creator'] ?></a>
                    </div>
                    <p class="float-left display-5 pl-3 d-inline mb-0"><?php echo $row['ranking']?>/5 &#9733</p>
                    <?php 
                        if($row['cost']!=0){
                            $cost = $row['cost'];
                            echo '<p class="float-right d-inline-block pl-3 text-success">&#8363;'.$cost.'</p>';
                        }
                        else
                            echo '<p class="text-success pl-3">Free</p>'
                    ?>
                    <!-- <p class="float-right d-inline-block text-success">&#8363;<?php echo $row['cost']?></p> -->
                </div>
            </div>
            <div class="float-left mr-2">
                <?php  $row = getAppInfo($list[2]);?>
                <div class="card" style="width: 10rem; position:static">
                <a href="appTemplate.php?appid=<?php echo $row['appid']?>" class="items-holder" name="appImage">
                    <img class="card-img-top appImage" src="<?php echo $row['link']?>" alt="Card image cap">
                </a>
                    <div class="card-body">
                        <a href="appTemplate.php?appid=<?php echo $row['appid']?>" name="appid" class="card-title"><?php echo $row['appname'] ?></a>
                        <br>
                        <a href="appTemplate.php?creator=<?php echo $row['creator']?>" name="creator"><?php echo $row['creator'] ?></a>
                    </div>
                    <p class="float-left display-5 pl-3 d-inline mb-0"><?php echo $row['ranking']?>/5 &#9733</p>
                    <?php 
                        if($row['cost']!=0){
                            $cost = $row['cost'];
                            echo '<p class="float-right d-inline-block pl-3 text-success">&#8363;'.$cost.'</p>';
                        }
                        else
                            echo '<p class="text-success pl-3">Free</p>'
                    ?>
                    <!-- <p class="float-right d-inline-block text-success">&#8363;<?php echo $row['cost']?></p> -->
                </div>
            </div>
            <div class="float-left mr-2">
                <?php  $row = getAppInfo($list[3]);?>
                <div class="card" style="width: 10rem; position:static">
                <a href="appTemplate.php?appid=<?php echo $row['appid']?>" class="items-holder" name="appImage">
                    <img class="card-img-top appImage" src="<?php echo $row['link']?>" alt="Card image cap">
                </a>
                    <div class="card-body">
                        <a href="appTemplate.php?appid=<?php echo $row['appid']?>" name="appid" class="card-title"><?php echo $row['appname'] ?></a>
                        <br>
                        <a href="appTemplate.php?creator=<?php echo $row['creator']?>" name="creator"><?php echo $row['creator'] ?></a>
                    </div>
                    <p class="float-left display-5 pl-3 d-inline mb-0"><?php echo $row['ranking']?>/5 &#9733</p>
                    <?php 
                        if($row['cost']!=0){
                            $cost = $row['cost'];
                            echo '<p class="float-right d-inline-block pl-3 text-success">&#8363;'.$cost.'</p>';
                        }
                        else
                            echo '<p class="text-success pl-3">Free</p>'
                    ?>
                    <!-- <p class="float-right d-inline-block text-success">&#8363;<?php echo $row['cost']?></p> -->
                </div>
            </div>
            <div class="float-left mr-2">
                <?php  $row = getAppInfo($list[4]);?>
                <div class="card" style="width: 10rem; position:static">
                <a href="appTemplate.php?appid=<?php echo $row['appid']?>" class="items-holder" name="appImage">
                    <img class="card-img-top appImage" src="<?php echo $row['link']?>" alt="Card image cap">
                </a>
                    <div class="card-body">
                        <a href="appTemplate.php?appid=<?php echo $row['appid']?>" name="appid" class="card-title"><?php echo $row['appname'] ?></a>
                        <br>
                        <a href="appTemplate.php?creator=<?php echo $row['creator']?>" name="creator"><?php echo $row['creator'] ?></a>
                    </div>
                    <p class="float-left display-5 pl-3 d-inline mb-0"><?php echo $row['ranking']?>/5 &#9733</p>
                    <?php 
                        if($row['cost']!=0){
                            $cost = $row['cost'];
                            echo '<p class="float-right d-inline-block pl-3 text-success">&#8363;'.$cost.'</p>';
                        }
                        else
                            echo '<p class="text-success pl-3">Free</p>'
                    ?>
                    <!-- <p class="float-right d-inline-block text-success">&#8363;<?php echo $row['cost']?></p> -->
                </div>
            </div>
            <div class="float-left mr-2">
                <?php  $row = getAppInfo($list[5]);?>
                <div class="card" style="width: 10rem; position:static">
                <a href="appTemplate.php?appid=<?php echo $row['appid']?>" class="items-holder" name="appImage">
                    <img class="card-img-top appImage" src="<?php echo $row['link']?>" alt="Card image cap">
                </a>
                    <div class="card-body">
                        <a href="appTemplate.php?appid=<?php echo $row['appid']?>" name="appid" class="card-title"><?php echo $row['appname'] ?></a>
                        <br>
                        <a href="appTemplate.php?creator=<?php echo $row['creator']?>" name="creator"><?php echo $row['creator'] ?></a>
                    </div>
                    <p class="float-left display-5 pl-3 d-inline mb-0"><?php echo $row['ranking']?>/5 &#9733</p>
                    <?php 
                        if($row['cost']!=0){
                            $cost = $row['cost'];
                            echo '<p class="float-right d-inline-block pl-3 text-success">&#8363;'.$cost.'</p>';
                        }
                        else
                            echo '<p class="text-success pl-3">Free</p>'
                    ?>
                    <!-- <p class="float-right d-inline-block text-success">&#8363;<?php echo $row['cost']?></p> -->
                </div>
            </div>
            <div class="float-left mr-2 appGridCounts-sm">
                <?php  $row = getAppInfo($list[6]);?>
                <div class="card" style="width: 10rem; position:static">
                <a href="appTemplate.php?appid=<?php echo $row['appid']?>" class="items-holder" name="appImage">
                    <img class="card-img-top appImage" src="<?php echo $row['link']?>" alt="Card image cap">
                </a>
                    <div class="card-body">
                        <a href="appTemplate.php?appid=<?php echo $row['appid']?>" name="appid" class="card-title"><?php echo $row['appname'] ?></a>
                        <br>
                        <a href="appTemplate.php?creator=<?php echo $row['creator']?>" name="creator"><?php echo $row['creator'] ?></a>
                    </div>
                    <p class="float-left display-5 pl-3 d-inline mb-0"><?php echo $row['ranking']?>/5 &#9733</p>
                    <?php 
                        if($row['cost']!=0){
                            $cost = $row['cost'];
                            echo '<p class="float-right d-inline-block pl-3 text-success">&#8363;'.$cost.'</p>';
                        }
                        else
                            echo '<p class="text-success pl-3">Free</p>'
                    ?>
                    <!-- <p class="float-right d-inline-block text-success">&#8363;<?php echo $row['cost']?></p> -->
                </div>
            </div>
            <div class="float-left mr-2 appGridCounts-md">
                <?php  $row = getAppInfo($list[7]);?>
                <div class="card" style="width: 10rem; position:static">
                <a href="appTemplate.php?appid=<?php echo $row['appid']?>" class="items-holder" name="appImage">
                    <img class="card-img-top appImage" src="<?php echo $row['link']?>" alt="Card image cap">
                </a>
                    <div class="card-body">
                        <a href="appTemplate.php?appid=<?php echo $row['appid']?>" name="appid" class="card-title"><?php echo $row['appname'] ?></a>
                        <br>
                        <a href="appTemplate.php?creator=<?php echo $row['creator']?>" name="creator"><?php echo $row['creator'] ?></a>
                    </div>
                    <p class="float-left display-5 pl-3 d-inline mb-0"><?php echo $row['ranking']?>/5 &#9733</p>
                    <?php 
                        if($row['cost']!=0){
                            $cost = $row['cost'];
                            echo '<p class="float-right d-inline-block pl-3 text-success">&#8363;'.$cost.'</p>';
                        }
                        else
                            echo '<p class="text-success pl-3">Free</p>'
                    ?>
                    <!-- <p class="float-right d-inline-block text-success">&#8363;<?php echo $row['cost']?></p> -->
                </div>
            </div>
            <div class="float-left mr-2 appGridCounts-lg">
                <?php  $row = getAppInfo($list[8]);?>
                <div class="card" style="width: 10rem; position:static">
                <a href="appTemplate.php?appid=<?php echo $row['appid']?>" class="items-holder" name="appImage">
                    <img class="card-img-top appImage" src="<?php echo $row['link']?>" alt="Card image cap">
                </a>
                    <div class="card-body">
                        <a href="appTemplate.php?appid=<?php echo $row['appid']?>" name="appid" class="card-title"><?php echo $row['appname'] ?></a>
                        <br>
                        <a href="appTemplate.php?creator=<?php echo $row['creator']?>" name="creator"><?php echo $row['creator'] ?></a>
                    </div>
                    <p class="float-left display-5 pl-3 d-inline mb-0"><?php echo $row['ranking']?>/5 &#9733</p>
                    <?php 
                        if($row['cost']!=0){
                            $cost = $row['cost'];
                            echo '<p class="float-right d-inline-block pl-3 text-success">&#8363;'.$cost.'</p>';
                        }
                        else
                            echo '<p class="text-success pl-3">Free</p>'
                    ?>
                    <!-- <p class="float-right d-inline-block text-success">&#8363;<?php echo $row['cost']?></p> -->
                </div>
            </div>
        </div>
    </div>

</body>
</html>