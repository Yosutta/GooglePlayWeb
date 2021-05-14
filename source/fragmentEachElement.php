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
</head>
<body>
    <?php
        $sql = "SELECT * FROM `mostdownloadsfree`";
        $result = $conn->query($sql);
        $mostDownloadsFree = [];
        while($row=$result->fetch_assoc()){
            array_push($mostDownloadsFree,$row['appid']);
        }
        
        include("getAppInfo.php");
    ?>
    <div class="float-left mr-2">
        <?php  $row = getAppInfo($mostDownloadsFree[0]);?>
        <div class="card" style="width: 10rem; position:static">
        <a href="application_detail.php?appid=<?php echo $row['appid']?>" class="items-holder" name="appImage">
            <img class="card-img-top appImage" src="<?php echo $row['link']?>" alt="Card image cap">
        </a>
            <div class="card-body">
                <a href="application_detail.php?appid=<?php echo $row['appid']?>" name="appid" class="card-title"><?php echo $row['appname'] ?></a>
                <br>
                <a href="creator.php?creator=<?php echo $row['creator']?>" name="creator" class="card-title" class="card-title" class="card-title" class="card-title" class="card-title" class="card-title"><?php echo $row['creator'] ?></a>
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
</body>
</html>