<?php
    $servername = "localhost";
    $username ="root";
    $password = "";
    $dbname = "database";

    $conn = new mysqli($servername,$username,$password,$dbname);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    function getAppfromCreator($creator){
        $sql = "SELECT * FROM apps WHERE creator = '$creator'";
        global $conn;
        
        $result = $conn->query($sql);
        $appid =[];
        while($row=$result->fetch_assoc()){
            array_push($appid,$row['appid']);
        }
        return $appid;
    }
?>