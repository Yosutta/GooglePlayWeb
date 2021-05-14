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
</head>
<body class="testing_grid">
    <div id="loadheader"></div>
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
                <div style="text-align:left;">
                    <?php include("fully_element_frame.php"); ?>  
                    <p>
                    <br>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br>
                    </p>    
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