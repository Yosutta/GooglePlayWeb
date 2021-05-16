<?php
    function mostDownloadsPaid(){
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
        $mostDownloadPaid = [];
        while($row = $result->fetch_assoc()){
            if($row['cost']!=0)
                array_push($mostDownloadPaid,[$row['appid'],$row['downloads'],$row['cost']]);
            if (count($mostDownloadPaid)==9)
                break;
        }
        
    
        $sql = "TRUNCATE TABLE mostdownloadspaid";
        $conn->query($sql);
    
        for($i=0;$i<count($mostDownloadPaid);$i++){
            $appid = $mostDownloadPaid[$i][0];
            $downloads = $mostDownloadPaid[$i][1];
            $cost = $mostDownloadPaid[$i][2];
            $sql = "INSERT INTO `mostdownloadspaid` VALUES ('$appid',$downloads, $cost)";
            $conn -> query($sql);
        }
    }
?>