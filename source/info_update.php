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
      echo "<link href='https://fonts.googleapis.com/css?family=Inter:400,800,900&display=swap' rel='stylesheet'>";
      echo "<link rel='icon' href='resources/icon.png'>";
      echo "<script src='main.js'></script>";
      echo "<link rel='stylesheet' type='text/css' href='style.css'>";

      $servername = "localhost";
      $username ="root";
      $password = "";
      $dbname = "database";
    
      $conn = new mysqli($servername,$username,$password,$dbname);
    
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $userid = $_SESSION['userid'];
      $sql = "SELECT * FROM usersinfo WHERE userid = $userid";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();

      $sql = "SELECT email FROM users WHERE userid = $userid";
      $result = $conn->query($sql);
      $email = $result->fetch_assoc()['email'];

      $sql =  "SELECT * from countries";
      $countries = [];
      $result = $conn->query($sql);
      while($row1 = $result->fetch_assoc()){
        array_push($countries,$row1['country_name']);
      }

    ?>
    <title>Account</title>
</head>
<body>
    <div class="container"> 
        <div class="row">
            <div class="col-4 offset-md-4 alignment_center">
                <div class="acc_frame">
                    <form action="" method="POST" enctype="multipart/form-data">
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
                                            <td ><p><?php echo $email?> - <?php echo $row['fullName']?></p></td>
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
                                <td colspan="4" ><input type="text" class="res_input" id="Username" name="fullname" value="<?php echo $row['fullName']?>" disabled></td>
                            </tr>
                            <tr>
                                <td colspan="4" class ="alignment_left"><label>gender</label></td>
                            </tr>
                            <tr>
                                <td>
                                    <?php
                                        if($row['gender']==1)
                                            echo '<input type="radio" id="male_radio" name="gender_radio" value="1" checked disabled>';
                                        else
                                            echo '<input type="radio" id="male_radio" name="gender_radio" disabled>'
                                    ?>
                                </td>
                                <td class="alignment_left"><label for="male_radio">Male</label></td>
                                <td>
                                    <?php
                                        if($row['gender']==0)
                                            echo '<input type="radio" id="female_radio" name="gender_radio" value="0" checked disabled>';
                                        else
                                            echo '<input type="radio" id="female_radio" name="gender_radio" disabled>'
                                    ?>
                                </td>
                                <td class="alignment_left"><label for="female_radio">Female</label></td>
                            </tr>
                            <tr>
                                <td colspan="4" class ="alignment_left"><label>birthday</label></td>
                            </tr>
                            <tr>
                                <td colspan="4"><input type="date" class="res_input" id="birthday" name="birthday" value="<?php echo $row['birthDate']?>" disabled></td>
                            </tr>
                            <tr>
                                <td colspan="4" class ="alignment_left" ><label>nationality</label></td>
                            </tr>
                            <tr>
                                <td colspan="4"><select name="nation" id="nation_select" class="res_input" disabled>
                                    <option hidden>Select Your Nationality</option>
                                    <?php 
                                        for($i=0;$i<count($countries);$i++){
                                            $country = $countries[$i];
                                            if($country == $row['country'])
                                                echo "<option value='$country' selected>" . $country . "</option>";    
                                            else
                                                echo "<option value='$country'>" . $country . "</option>";
                                        }
                                    ?>
                                </select></td>
                            </tr>
                            <!-- <tr>
                                <td colspan="4" class ="alignment_left"><label>email</label></td>
                            </tr>
                            <tr>
                                <td colspan="4"><input type="text" class="res_input" value="" disabled></td>
                            </tr> -->
                            <tr>
                                <td colspan="4" class ="alignment_left"><label>phonenumber</label></td>
                            </tr>
                            <tr>
                                <td colspan="4"><input type="text" class="res_input" id="phonenumber" name="phone" value="<?php echo $row['phoneNumber']?>" disabled></td>
                            </tr>
                            <tr>
                                <td><div class='form-group'>
                                <button class ="btn btn-primary" id="edit" type="button" onclick="enableEdit()" value="0">Edit</button>
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

    function enableEdit(){
        if(document.getElementById("Username").disabled == true){
            document.getElementById("Username").disabled = false;
            document.getElementById("birthday").disabled = false;
            document.getElementById("nation_select").disabled = false;
            document.getElementById("phonenumber").disabled = false;
            document.getElementById("male_radio").disabled = false;
            document.getElementById("female_radio").disabled = false;
        }
        else{
            document.getElementById("Username").disabled = true;
            document.getElementById("birthday").disabled = true;
            document.getElementById("nation_select").disabled = true;
            document.getElementById("phonenumber").disabled = true;
            document.getElementById("male_radio").disabled = true;
            document.getElementById("female_radio").disabled = true;
        }
    }

</script>
<?php
    if (isset($_POST["save_account"])){
        // echo "<pre>", print_r($_FILES["profile-image"]["name"]) ,"</pre>";

        // $profileImage = time()."_".$_FILES["profile-image"]["name"];
        global $conn;

        $profileImage = $_SESSION['username'].".jpg";
        $targets = 'resources/account/' .$profileImage;
        $userid = $_SESSION['userid'];
        move_uploaded_file($_FILES["profile-image"]["tmp_name"],$targets);

        $fullname = $_POST['fullname'];
        $birthDate = $_POST['birthday'];
        $country = $_POST["nation"];
        $phoneNumber = $_POST["phone"];

        if($_POST['gender_radio']=='on')
            $gender = 1;
        else
            $gender = 0;

        // $sql = "UPDATE usersinfo SET `pictureLink`='$targets' WHERE userid='$userid'";
        $sql = "UPDATE usersinfo SET `fullName`='$fullname',`birthDate`='$birthDate',`gender`=$gender,`country`='$country',`phoneNumber`='$phoneNumber',`pictureLink`='$targets' WHERE userid=$userid";
        $conn->query($sql);

        echo $sql;

        include("updateSession.php");
        updateAccount($userid);
    }
?>
</html>