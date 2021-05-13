<?php
    include("updateSession.php");
    if(isset($_GET['name']) && isset($_GET['slogan'])){
        session_start();
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "database";

        // Create connection
        $conn = new mysqli($servername, $username, $password,$dbname);

        $id = $_SESSION['userid'];
        $name = $_GET['name'];
        $slogan = $_GET['slogan'];  
        $icon = $_SESSION['pictureLink'];

        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM creator";
        $creators = [];
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
            array_push($creators,[$row['name'],$row['id']]);
        }  

        for($i=0;$i<count($creators);$i++){
            if($creators[$i][0] == $name){
                echo $creators[$i][1];
            }
            else{
                $newid = count($creators)+1;
                $sql = "INSERT INTO creator(`name`,id,tittle,iconlink) value('$name',$newid,'$slogan','$icon')";
                print_r($sql);
                $conn->query($sql);
            }
        }

        $sql = "SELECT balance from usersinfo where userid = $id";
        $result = $conn->query($sql);
        if($row = $result->fetch_assoc()){
            $balance = $row['balance'] - 500000;
        }

        $sql = "UPDATE usersinfo set balance = $balance where userid = $id";
        $conn->query($sql);

        $sql = "UPDATE users set `level` = 2 where userid = $id";
        $conn->query($sql);
        
        updateAccount($id);
        header("Location:index.php");
    }


?>
