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
        if($row = $result->fetch_assoc()){
            print_r($row);

            // GET THE DATA READY
            $appname = $row['appname'];
            $appid = $row['appid'];
            $appdescription = $row['appdescription'];
            $creatorid = $row['creatorid'];
            $creatorname = $row['creatorname'];
            $appcategory = $row['catename'];
            $appprice = $row['price'];
            $appdownloads = $row['appdownloads'];
            $appranking = $row['appranking'];
            $appicon = $row['pictureLink'];
            $appscreenshots = json_decode($row['screenshotslink']);

            $appIcon = str_replace(' ','',strtolower($appname)).".png";
            $appIconTarget = 'resources/apps/'.$appIcon;
            copy($appicon, $appIconTarget);

            $appScreenshotTargets = [];
            for($i=0;$i<count($appscreenshots);$i++){
                $appScreenshot = str_replace(' ','',strtolower($appname)).$i.".png";
                if(file_exists('resources/apps/screenshots/'.str_replace(' ','',strtolower($appname)))==false)
                    mkdir('resources/apps/screenshots/'.str_replace(' ','',strtolower($appname)));
                $appScreenshotTarget = 'resources/apps/screenshots/'.str_replace(' ','',strtolower($appname)).'/'.$appScreenshot;
                copy($appscreenshots[$i], $appIconTarget);
                array_push($appScreenshotTargets,$appScreenshotTarget);
            }

            $appScreenshotTargets = json_encode($appScreenshotTargets);

            if($appprice==0){
                $sql = "INSERT INTO `apps`(`appid`, `appname`, `creatorid`, `creator`, `category`, `ranking`, `free`, `cost`, `downloads`, `description`, `link`, `screenshotlink`) VALUES ('$appid','$appname','$creatorid','$creatorname','$appcategory','$appranking',1,0,'$appdownloads','$appdescription','$appIconTarget','$appScreenshotTargets')";
                $conn->query($sql);
            }
            else{
                $sql = "INSERT INTO `apps`(`appid`, `appname`, `creatorid`, `creator`, `category`, `ranking`, `free`, `cost`, `downloads`, `description`, `link`, `screenshotlink`) VALUES ('$appid','$appname','$creatorid','$creatorname','$appcategory','$appranking',0,$appprice,'$appdownloads','$appdescription','$appIconTarget','$appScreenshotTargets')";
                $conn->query($sql);
            }
        }

        $sql = "UPDATE pendingapp set status = 1 where appid = '$msg'";
        $conn->query($sql);
    }
    else if($status==2){
        $sql = "UPDATE pendingapp set status = 2 where appid = '$msg'";
        $conn ->query($sql);
    }
}

?>