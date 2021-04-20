<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
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
                <form action="info_update.php" method="POST" enctype="multipart/form-data">
                    <div class='form-group'>
                        <img src="resources/default/default_img.jpg" onclick="triggerClick()" id="profile_display"/>
                        <input type="file" style="display: none;" onchange="displayImage(this)" name="profile-image" id="profile-image" class="form-control">
                    </div>
                    <div class='form-group'>
                        <button class ="btn btn-primary" name="save_account" type="submit">Save</button>
                    </div>
                    <!-- <label>Fullname</label>
                    <input type="text">
                    <br>
                    <label>gender</label>
                    <input type="text">
                    <br>
                    <label>birthday</label>
                    <input type="text">
                    <br>
                    <label>nationality</label>
                    <input type="text">
                    <br>
                    <label>Email</label>
                    <input type="text">
                    <br>
                    <label>phonenumber</label>
                    <input type="text">
                    <br> -->
                </form>
            </div>
        </div>
    </div>
</body>
<script>
    function triggerClick(){
    document.querySelector('#profile-image').click();
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
    if (isset($_POST["save_account"])){
        echo "<pre>", print_r($_FILES["profile-image"]["name"]) ,"</pre>";
        $profileImage = time()."_".$_FILES["profile-image"]["name"];
        $tagets = 'resources/account/' .$profileImage;
        move_uploaded_file($_FILES["profile-image"]["tmp_name"],$tagets);
    }
?>
</html>