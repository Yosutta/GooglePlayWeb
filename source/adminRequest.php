<?php
if(isset($_GET['appid'])){
    $servername = "localhost";
    $username ="root";
    $password = "";
    $dbname = "database";

    $conn = new mysqli($servername,$username,$password,$dbname);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $msg = $_GET['appid'];
    $status = $_GET['status'];

    if($status == 1){
        $sql = "SELECT * FROM pendingapp where appid = '$msg'";

        $result = $conn->query($sql);
        

        if($row=$result->fetch_assoc()){
            $appname_pending =  $row['appname'];
            $appid_pending = $row['appid'];
            $creatorid_pending = $row['creatorid'];
            $creatorname_pending = $row['creatorname'];
            $catename_pending = $row['catename'];
            $price_pending = $row['price'];
            $screenshotsRaw = json_decode($row['screenshotslink']);
            print_r($appid_pending);

            if($price_pending>0)
                $cost = 0;
            else
                $cost = 1;

            $profileImage = strtolower($row['appname']).".png";
            $profileImage = str_replace(' ', '', $profileImage);
            $targets = 'resources/apps/' .$profileImage;
            copy('resources/pendingapps/'.$profileImage,$targets);


            // Đổi tên vào chuyển hình screenshots từ pendingapps sang apps
            $screenshots = [];
            for($i=0;$i<count($screenshotsRaw);$i++){
                $appScreenShots = strtolower($appname_pending).($i+1).".png";
                $appScreenShots = str_replace(' ', '', $appScreenShots);
                $name = strtolower($appname_pending );
                $targets1 = 'resources/apps/screenshots/'.str_replace(' ', '', $name).'/'.$appScreenShots;
                if(file_exists('resources/apps/screenshots/'.str_replace(' ', '', $name))==false)
                    mkdir('resources/apps/screenshots/'.str_replace(' ', '', $name));
                copy('resources/pendingapps/screenshots/'.str_replace(' ', '', $name).'/'.$appScreenShots,$targets1);
                array_push($screenshots, $targets1);
            }
            $screenshots = json_encode($screenshots);

            $pictureLink = $targets;

            if($cost==0){
                $sql = "INSERT INTO `apps`(`appid`, `appname`, `creatorid`, `creator`, `category`, `link`, `free`, `cost`, `ranking`,`screenshotlink`) VALUES ('$appid_pending','$appname_pending','$creatorid_pending','$creatorname_pending','$catename_pending','$pictureLink','$cost','$price_pending', 5, '$screenshots')";
            }
            else
                $sql = "INSERT INTO `apps`(`appid`, `appname`, `creatorid`, `creator`, `category`, `link`, `ranking`, `screenshotlink` ) VALUES ('$appid_pending','$appname_pending','$creatorid_pending','$creatorname_pending','$catename_pending','$pictureLink', 4, '$screenshots')";
            $conn->query($sql);
        }  
    }

    $sql = "UPDATE pendingapp set `status` = $status where appid = '$msg'";
    $conn->query($sql);
}
?>