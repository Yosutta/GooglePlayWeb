
    <?php

        $servername = "localhost";
        $username ="root";
        $password = "";
        $dbname = "database";

        $conn = new mysqli($servername,$username,$password,$dbname);

        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        include("getAppInfo.php");

        function HtmlGenerate($apps) {
            echo '<div class="float-left mr-2">';
            $row = getAppInfo($apps);
            echo '<div class="card" style="width: 10rem; position:static">';
            echo '<a href="application_detail.php?appid='.$row['appid'].'" class="items-holder" name="appImage"><img class="card-img-top appImage" src="'.$row['link'].'" alt="Card image cap"></a>';
                echo'<div class="card-body">';
                    echo '<a href="application_detail.php?appid='.$row['appid'].'" name="appid" class="card-title">'.$row['appname'].'</a>';
                    echo '<br>';
                    echo '<a href="creator.php?creator='.$row['creator'].'" name="creator" class="card-title" class="card-title" class="card-title" class="card-title" class="card-title" class="card-title">'.$row['creator'].'</a>';
                echo '</div>';
                echo '<p class="float-left display-5 pl-3 d-inline mb-0">'.$row['ranking'].'/5 &#9733</p>';
                    if($row['cost']!=0){
                        $cost = $row['cost'];
                        echo '<p class="float-right d-inline-block pl-3 text-success">&#8363;'.$cost.'</p>';
                    }
                    else
                        echo '<p class="text-success pl-3">Free</p>';
            echo '</div>';
            echo '</div>';
            }
            ?>
    