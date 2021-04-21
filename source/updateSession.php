<?php
    function updateAccount($userid){
        $servername = "localhost";
        $username ="root";
        $password = "";
        $dbname = "database";
    
        $conn = new mysqli($servername,$username,$password,$dbname);
    
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM users WHERE userid='$userid'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        $_SESSION['username'] = $row['username'];
        $_SESSION['userid'] = $row['userid'];
        $_SESSION['level'] = $row['level'];
        $sql1 = "SELECT * FROM usersinfo WHERE userid='$userid'";
        $result1 = $conn->query($sql1);
        $row1=$result1->fetch_assoc();
        $_SESSION['pictureLink'] = $row1["pictureLink"];
    }
?>