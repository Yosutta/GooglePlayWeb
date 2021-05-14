<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GooglePlay</title>
    <?php
        if(!isset($_SESSION)) 
        { 
            session_start(); 
        } 
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

        if(isset($_GET['creator'])){
            $creatorname = $_GET['creator'];
        }

        }

        
    ?>    
</head>
<body>
    <?php include("getAppidfromCreator.php"); ?>
    <div id="div_seemore_fragment">
    <div>
        <p class="title_seemore">More by <?php echo  $_GET['creator']?></p>
        <button type="submit" class="btn btn-success button_seemore">See More</button>
    </div>
    <div id="store_element"></div>
    </div>
    <?php 
        print_r(getAppfromCreator($_GET['creator']));
        ?>
<script> 
    src="jquery.js"
    $(function(){
      $("#store_element").load("fragmentEachElement.php"); 
    });
    </script>
</body>
</html>