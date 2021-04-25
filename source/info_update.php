<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
      session_start();
      echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>";
      echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>";
      echo "<link rel='stylesheet' href=<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js'></script>";
      echo "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>";
      echo "<script src='https://kit.fontawesome.com/a076d05399.js'></script>";
      echo "<link rel='icon' href='resources/icon.png'>";
      echo "<script src='main.js'></script>";
      echo "<link rel='stylesheet' type='text/css' href='style.css'>";
    ?>
    <title>Account</title>
</head>
<body>
    <div class="container"> 
        <div class="row">
            <div class="col-4 offset-md-4 alignment_center">
                <div class="acc_frame">
                    <form action="info_update.php" method="POST" enctype="multipart/form-data">
                        <table>
                            <tr>
                                <td colspan="2"><div class='form-group'>
                                    <div class="image">
                                    <img src="<?php
                                        if(strlen($_SESSION['pictureLink'])>0){
                                            if(file_exists($_SESSION['pictureLink'])){
                                                echo $_SESSION['pictureLink'];
                                            }
                                            else
                                                echo "resources/default/default_img.jpg";
                                        }
                                        else
                                            echo "resources/default/default_img.jpg"
                                    ?>"  id="profile_display"/>
                                        <div class="img_layout" onclick="triggerClick()">
                                            <div class="word_update">Update</div>
                                        </div>
                                    </div>
                                    <input type="file" style="display: none;" onchange="displayImage(this)" name="profile-image" id="profile-image" class="form-control">
                                </div></td>
                                <td colspan="2"><div class="acc_spacing_fullname">
                                    <table>
                                        <tr>
                                            <td><p class="acc_title_fullname">Full name</p></td>
                                        </tr>
                                        <tr>
                                            <td ><p>Email@gmail.com - Users</p></td>
                                        </tr> 
                                    </table>
                                    </div></td>
                            </tr>
                            <tr>
                                <td class ="alignment_left" colspan="4"><p class="acc_account_title">Account</p></td>
                            </tr>
                            <tr>
                                <td class ="alignment_left" colspan="4" ><label>Username</label></td>
                            </tr>
                            <tr>
                                <td colspan="4" ><input type="text" class="res_input"></td>
                            </tr>
                            <tr>
                                <td colspan="4" class ="alignment_left"><label>gender</label></td>
                            </tr>
                            <tr>
                                <td><input type="radio" id="male_radio" name="gender_radio"></td>
                                <td class="alignment_left"><label for="male_radio">Male</label></td>
                                <td><input type="radio" id="female_radio" name="gender_radio" ></td>
                                <td class="alignment_left"><label for="female_radio">Female</label></td>
                            </tr>
                            <tr>
                                <td colspan="4" class ="alignment_left"><label>birthday</label></td>
                            </tr>
                            <tr>
                                <td colspan="4"><input type="text" class="res_input"></td>
                            </tr>
                            <tr>
                                <td colspan="4" class ="alignment_left" ><label>nationality</label></td>
                            </tr>
                            <tr>
                                <td colspan="4"><select name="nation" id="nation_select" class="res_input">
                                    <option>Select Your Nationality</option>
                                </select></td>
                            </tr>
                            <tr>
                                <td colspan="4" class ="alignment_left"><label>email</label></td>
                            </tr>
                            <tr>
                                <td colspan="4"><input type="text" class="res_input"></td>
                            </tr>
                            <tr>
                                <td colspan="4" class ="alignment_left"><label>phonenumber</label></td>
                            </tr>
                            <tr>
                                <td colspan="4"><input type="text" class="res_input"></td>
                            </tr>
                            <tr>
                                <td><div class='form-group'>
                                <button class ="btn btn-primary" name="save_account" type="submit">Edit</button>
                                </div></td>
                                <td><div class='form-group'>
                                <button class ="btn btn-primary" name="save_account" type="submit">Save</button>
                                </div></td>
                        </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    function triggerClick(){
    document.querySelector('#profile-image').click();
    displayImage(e);
}   

function displayImage(e){
    if(e.files[0]){
        var reader = new FileReader();

        console.log(reader);
        reader.onload = function(e){
            document.querySelector("#profile_display").setAttribute('src', e.target.result);
            console.log(reader);
        }
        reader.readAsDataURL(e.files[0]);
    }
}
</script>
<?php
    $servername = "localhost";
    $username ="root";
    $password = "";
    $dbname = "database";
  
    $conn = new mysqli($servername,$username,$password,$dbname);
  
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_POST["save_account"])){
        // echo "<pre>", print_r($_FILES["profile-image"]["name"]) ,"</pre>";

        // $profileImage = time()."_".$_FILES["profile-image"]["name"];
        $profileImage = $_SESSION['username'].".jpg";
        $targets = 'resources/account/' .$profileImage;
        $userid = $_SESSION['userid'];
        global $conn;

        echo $targets;
        
        move_uploaded_file($_FILES["profile-image"]["tmp_name"],$targets);

        $sql = "UPDATE usersinfo SET `pictureLink`='$targets' WHERE userid='$userid'";
        $conn->query($sql);

        include("updateSession.php");
        echo($userid);
        updateAccount($userid);
        
    }
?>
</html>