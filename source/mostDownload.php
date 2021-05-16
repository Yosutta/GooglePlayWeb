<?php
    function mostDownloads(){
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
        
    
        $sql = "SELECT appid,downloads,cost from apps ORDER BY downloads DESC";
        $result = $conn->query($sql);
        $mostDownload = [];
        while($row = $result->fetch_assoc()){
            if($row['cost']==0)
                array_push($mostDownload,[$row['appid'],$row['downloads']]);
            if (count($mostDownload)==9)
                break;
        }
    
        $sql = "TRUNCATE TABLE mostdownloadsfree";
        $conn->query($sql);
    
        for($i=0;$i<count($mostDownload);$i++){
            $appid = $mostDownload[$i][0];
            $downloads = $mostDownload[$i][1];
            $sql = "INSERT INTO `mostdownloadsfree` VALUES ('$appid',$downloads)";
            $conn -> query($sql);
        }
    }
?>