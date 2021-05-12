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
            if($price_pending>0)
                $cost = 0;
            else
                $cost = 1;
            $pictureLink = $row['pictureLink'];
    
            if($cost==0){
                $sql = "INSERT INTO `apps`(`appid`, `appname`, `creatorid`, `creator`, `category`, `link`, `free`, `cost`, `ranking`) VALUES ('$appid_pending','$appname_pending','$creatorid_pending','$creatorname_pending','$catename_pending','$pictureLink','$cost','$price_pending', 5)";
            }
            else
                $sql = "INSERT INTO `apps`(`appid`, `appname`, `creatorid`, `creator`, `category`, `link`, `ranking` ) VALUES ('$appid_pending','$appname_pending','$creatorid_pending','$creatorname_pending','$catename_pending','$pictureLink', 4)";
            $conn->query($sql);
        }  
    }

    $sql = "UPDATE pendingapp set `status` = $status where appid = '$msg'";
    $conn->query($sql);
}
?>