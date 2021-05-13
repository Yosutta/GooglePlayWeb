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
        
        $sql = "SELECT * FROM `apps` where appid = '$appid'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        
    ?>
</head>
<body class="testing_grid">
    <div id="loadheader"></div>
    <div class="alignment_frame_ad">
        <div class="frame_ad">
            <img class="image_ad" style="padding-right:40px; float:left"src="<?php echo $row['link']?>">
            <div class="infor_ad">
            <p class="title_ad"><?php echo $row['appname']?></p>
            <div class="rating_ad">
                <a href="#" class="a_tag_ad"><?php echo $row['creator']?></a>
                <a href="#" class="a_tag_ad"><?php echo $row['category']?></a>
                <p class="float-right rating_start_ad" ><?php echo $row['ranking']?>/5 &#9733</p>
            </div>
            <div class="div_install_btn_ad">
                <button type="submit" class="btn btn-success">Install</button>
            </div>
            </div>
        </div>
    </div>
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
</body>
</html>