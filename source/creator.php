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
<body class="testing_grid">
    <div id="loadheader"></div>
    <div class="layout_creator">
        <div class="div_background">
            <div>
                <div class="div_title_description">
                    <div>
                        <img class="img_creator"src="./resources/creator/pikachu.png"/>
                    </div>
                    <p class="title_creator">Name creator</p>
                    <p class="title_description">fbkgkbngbkgnbkgbn kgbgkbngkbngk ngbgkbngkbnllekfbnglbn, bgnbmg kbm gbmgbkm kmgbkgmb gbkmgbkm bkgm</p>
                </div>
                <div class="content_text_featured"><p class="featured">Featured</p></div>
                <div class="creator_feature">
                    <div class="featured_app">
                        <img src="./resources/creator/featured_test/clashofclans.jpeg" id="feature_image"/>
                    </div>
                    <div class="infor_feature">
                        Hello
                    </div>
                </div>
                <div>
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