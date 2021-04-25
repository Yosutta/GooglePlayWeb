<?php

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

    function generateRandomString() {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 10; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
      }

    function generateGiftCode($price,$numbers){
        global $conn;
        
        for ($i = 0; $i <= $numbers; $i++) {
            $serial = generateRandomString();
            $sql = "INSERT INTO giftcode values('$serial','$price')";
            $conn->query($sql);
        }
        
    }

    generateGiftCode(20000,10);

?>