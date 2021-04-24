<?php
    $servername = "localhost";
    $username ="root";
    $password = "";
    $dbname = "database";

    $conn = new mysqli($servername,$username,$password,$dbname);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    function getAppInfo($appid){
        $sql = "SELECT * FROM apps WHERE appid = '$appid'";
        global $conn;
        
        $result = $conn->query($sql);
        while($row=$result->fetch_assoc()){
            return $row;
        }
    }
?>