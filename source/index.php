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
      echo "<link rel='stylesheet' href='style.css'>";
  ?>
  <title>Google Play</title>
</head>
<body>
  <!-- Header  -->
  <div class="container-fluid" id="header">
      <a href="index.php">
          <img class="" src="https://www.gstatic.com/android/market_images/web/play_prism_hlock_2x.png" alt="GooglePlay">
      </a>
      <form action="#" method="GET">
          <nav class="navbar">
              <input class="focus" type="text" name="search" placeholder="Search">
              <button class="bg-primary text-white border rounded-right" type="submit">
                  <i class="fas fa-search"></i>
              </button>
          </nav>
      </form>
      <a href="#ToAccount">
          <img class="rounded-circle float-right mr-4 mt-2" src="resources/account/J2.png" alt="J2">
      </a>
  </div>
  <!-- Topic chooser -->
  <div class="row">
      <div class="col-lg-center-1 col-md-center-1 bg-warning" style="height:100px">
          What is happening
      </div>
      <div class="col-lg-center-11 col-md-center-11 bg-danger">
          Details
      </div>
  </div>
  <div class="row">
      <div class="col-lg-2 col-md-center-1" style="height=200px;background-color:green"></div>
      <div class="col-lg-10 col-md-center-11 row">        
        <div class="col-lg-1 col-md-center-item items-holder" style="margin-left:40px">
            <a href="#Items">
                <div class="items"></div>
            </a>
        </div>
        <div class="col-lg-1 col-md-center-item items-holder">
            <a href="#Items">
                <div class="items"></div>
            </a>
        </div>
        <div class="col-lg-1 col-md-center-item items-holder">
            <a href="#Items">
                <div class="items"></div>
            </a>
        </div>
        <div class="col-lg-1 col-md-center-item items-holder">
            <a href="#Items">
                <div class="items"></div>
            </a>
        </div>
        <div class="col-lg-1 col-md-center-item items-holder">
            <a href="#Items">
                <div class="items"></div>
            </a>
        </div>
        <div class="col-lg-1 col-md-center-item items-holder">
            <a href="#Items">
                <div class="items"></div>
            </a>
        </div>
        <div class="col-lg-1 medScreenItems items-holder">
            <a href="#Items">
                <div class="items"></div>
            </a>
        </div>
        <div class="col-lg-1 medScreenItems items-holder">
            <a href="#Items">
                <div class="items"></div>
            </a>
        </div>
        <div class="col-lg-1 medScreenItems items-holder">
            <a href="#Items">
                <div class="items"></div>
            </a>
        </div>
      </div>
  </div>
</body>
</html>