<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
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
      
      <a href="#" class="float-right mr-4 mt-2 rounded bg-primary text-white text-decoration-none" style="font-size:15px;padding:5px 15px">Sign in</a>
      <!-- <a href="#ToAccount">
          <img class="rounded-circle float-right mr-4 mt-2" src="resources/account/J2.png" alt="J2">
      </a> -->
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
        <a class="text-decoration-none" href="#">
            <div class="s3nav">Account</div>
        </a>
        <a class="text-decoration-none" href="#">
            <div class="s3nav">Payment methods</div>
        </a>
        <a class="text-decoration-none" href="#">
            <div class="s3nav">My subscriptions</div>
        </a>
        <a class="text-decoration-none" href="#">
            <div class="s3nav">Redeem</div>
        </a>
        <a class="text-decoration-none" href="#">
            <div class="s3nav">My wishlist</div>
        </a>
        <a class="text-decoration-none" href="#">
            <div class="s3nav">My Play activity</div>
        </a>
        <a class="text-decoration-none" href="#">
            <div class="s3nav">Parent Guide</div>
        </a>
    </div>

    <!-- All apps list -->
    <div style="height:500px;">
        <div class="" style=" margin-top:-350px;margin-left:250px;">
            <a href="" class="items-holder float-left mr-2">
                <div class="card" style="width: 10rem; position:static">
                    <img class="card-img-top" src="<?php echo $row['link']?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['appname'] ?></h5>
                        <p class="card-text"></p>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </a>


            

            
        </div>
    </div>
    <div style="height:500px"></div>
    <div style="height:500px"></div>
    <div style="height:500px"></div>
    <div style="height:500px"></div>
</body>
</html>