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
      
      $sql = "SELECT * from categories";
      $categories = [];
      $result = $conn->query($sql);
      $categoriesTable =  [];
      while($row1 = $result->fetch_assoc()){
        array_push($categories,$row1['catename']);
        array_push($categoriesTable,$row1);
      }

      if (isset($_POST['title_app'], $_POST['creator_name'], $_POST['category_name'], $_POST['creator_id'], $_POST["cost"])){
          if(strlen($_POST['title_app'])!=0){
            global $conn;
            $profileImage = strtolower($_POST['title_app']).".jpg";
            $profileImage = str_replace(' ', '', $profileImage);
            $targets = 'resources/pendingapps/' .$profileImage;
            move_uploaded_file($_FILES["profile-image"]["tmp_name"],$targets);
  
          //   print_r($_POST);
            $appid = '';  
            $apptitle = $_POST['title_app'];
            $creatorid = $_POST['creator_id'];
            $creatorname = $_POST['creator_name'];
            $catename = $_POST['category_name'];
            $cost = $_POST['cost'];
  
  
            for($i=0;$i<count($categoriesTable);$i++){
                if ($categoriesTable[$i]['catename'] == $_POST['category_name']){
                    $appid = $categoriesTable[$i]['cateid'].((int)$categoriesTable[$i]['apps']+1); 
                    break;
                }
            }
  
<<<<<<< HEAD
=======
          // $profileImage = time()."_".$_FILES["profile-image"]["name"];
          global $conn;
          $profileImage = strtolower($_POST['title_app']).".jpg";
          $profileImage = str_replace(' ', '', $profileImage);
          $targets = 'resources/pendingapps/' .$profileImage;
          move_uploaded_file($_FILES["profile-image"]["tmp_name"],$targets);

        //   print_r($_POST);
          $appid = '';  
          $apptitle = $_POST['title_app'];
          $creatorid = $_POST['creator_id'];
          $creatorname = $_POST['creator_name'];
          $catename = $_POST['category_name'];


          for($i=0;$i<count($categoriesTable);$i++){
              if ($categoriesTable[$i]['catename'] == $_POST['category_name']){
                  $appid = $categoriesTable[$i]['cateid'].((int)$categoriesTable[$i]['apps']+1); 
                  break;
              }
          }

          $sql = "INSERT INTO `apps`(`appid`, `appname`, `creatorid`, `creator`, `category`, `link`) VALUES ('$appid','$apptitle','$creatorid','$creatorname','$catename','$targets')";
          $conn->query($sql);

          $sql = "INSERT INTO `pendingapp` VALUES ('$apptitle','$appid','$creatorid','$creatorname','$catename','$targets')";
          $conn->query($sql);
>>>>>>> 8f788da1fcf943714754438b6ef1c0e0e90476be

            if($cost==0){
                $price = $_POST['pricing'];
                $sql = "INSERT INTO `apps`(`appid`, `appname`, `creatorid`, `creator`, `category`, `link`, `free`, `cost`, `ranking`) VALUES ('$appid','$apptitle','$creatorid','$creatorname','$catename','$targets','$cost','$price', 5)";
            }
            else
                $sql = "INSERT INTO `apps`(`appid`, `appname`, `creatorid`, `creator`, `category`, `link`, `ranking` ) VALUES ('$appid','$apptitle','$creatorid','$creatorname','$catename','$targets',4)";
      
            $conn->query($sql);
  
            $sql = "INSERT INTO `pendingapp` VALUES ('$apptitle','$appid','$creatorid','$creatorname','$catename','$targets')";
            $conn->query($sql);
  
            $sql = "INSERT INTO `recentlyAdded` values ('$appid')";
            $conn->query($sql);
          }       
          else
            echo "<h2 style='color:red'>Please provide more information</h2>";
      }
    ?>
    <title>Upload Applications</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="upload_app_frame">
            <div id="title">
                <p>Show us your incredible application</p>
            </div> 
            <!-- App's Image -->
            <div id="content1">
            App's Image
            <div class="image">
                <img src="resources/default/default_img.jpg" id="profile_displayy"/>
                    <div class="img_layout" onclick="triggerClick()">
                        <div class="word_update">Update</div>
                    </div>
                </div>
                <input type="file" style="display: none;" onchange="displayImage(this)" name="profile-image" id="profile-image" class="form-control">
                </div>

            <!-- App's Title -->
            <div id="content2">
                Title
                <input type="text" name="title_app" placeholder="Title">
                <br><br>

                <label for="">Free</label>    
                <input type="radio" name="cost" id="free" onclick="insertCost(),removeCost()" value="1" checked>
                <label for="">Paid</label>    
                <input type="radio" name="cost" id="pay" onclick="insertCost()" value="0">
                
                <br><br>
                Pricing
                <br>
                <input type="number" name="pricing" id="pricing" disabled>

            </div>
            <!-- Hidden Creator id -->
            <input type="hidden" value="
            <?php
                echo $_SESSION['userid'];
            ?>
            " name="creator_id"/>
            <!-- App's Creator -->
            <div id="content3">
                Creator
                <input type="text" name="creator_name" value=
                <?php
                    echo $_SESSION['username'];
                ?>
                >
            </div>

            <!-- App's category -->
            <div id="cator">
                <select name="category_name">
                    <option value="" hidden>Select your app's category</option>
                    <?php 
                        for($i=0;$i<count($categories);$i++){
                            $category = $categories[$i];
                            if($category == $row['category'])
                                echo "<option value='$category' selected>" . $category . "</option>";    
                            else
                                echo "<option value='$category'>" . $category. "</option>";
                        }
                    ?>
                </select>
                <button type="submit">Submit</button>
            </div>
        </div>
    </form>
 
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
                document.querySelector("#profile_displayy").setAttribute('src', e.target.result);
                console.log(reader);
            }
            reader.readAsDataURL(e.files[0]);
        }
    }
</script>
</html>