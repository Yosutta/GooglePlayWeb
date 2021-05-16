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
      echo "<link rel='stylesheet' type='text/css' href='lib/knockout-file-bindings.css'>";
      echo "<link rel='stylesheet' type='text/css' href='style.css'>";

      $servername = "localhost";
      $username ="root";
      $password = "";
      $dbname = "database";
  
      $conn = new mysqli($servername,$username,$password,$dbname);
        
      if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
      }
      
      if($_SESSION['level']==1 || $_SESSION['level'] == null){
          header("Location: index.php");
      }

      $sql = "SELECT * from categories";
      $categories = [];
      $result = $conn->query($sql);
      $categoriesTable =  [];
      while($row1 = $result->fetch_assoc()){
        array_push($categories,$row1['catename']);
        array_push($categoriesTable,$row1);
      }

    //     app_image
    //     title_app
    //     cost
    //     pricing
    //     app_description
    //     app_downloads
    //     app_ranking
    //     category_name
    //     files
    //   creator_icon
    //   creator_background


      if(isset($_POST['title_app'],$_POST['cost'], $_POST['app_description'], $_POST['app_downloads'], $_POST['category_name'], $_FILES['app_image'], $_FILES['files'], $_POST['creator_name'])){
        $apptitle = $_POST['title_app'];
        $appfree = $_POST['cost'];

        if($appfree==0){
            if(isset($_POST['pricing'])){
                $appprice = ($_POST['pricing']);
            }
        }

        // APP
        $appdescription = $_POST['app_description'];
        $appdownloads = $_POST['app_downloads'];
        $appranking = $_POST['app_ranking'];
        $appcategory = $_POST['category_name'];
        $appicon = $_FILES['app_image'];
        $appscreenshots = $_FILES['files'];

        // GET CREATOR NAME
        $creatorname = $_POST['creator_name'];

        // GET APPID
        global $conn;
        $sql = "SELECT cateid, apps from categories where catename = '$appcategory'";
        $result = $conn->query($sql);
        if($category1 = $result->fetch_assoc()){
            $appid = $category1['cateid'].($category1['apps']+1);
        }

        // GET CREATORID
        global $conn;
        $sql = "SELECT id from creator where name = '$creatorname'";
        $result = $conn->query($sql);
        if($row = $result->fetch_assoc()){
            $creatorid = $row['id'];
        }
        else{
            $sql = "SELECT id from creator";
            $result = $conn->query($sql);
            $num_rows = $result->num_rows;
            $creatorid = $num_rows +1;

            if(isset($_FILES['creator_icon'], $_FILES['creator_background'], $_POST['creator_description'])){
                $creatoricon = $_FILES['creator_icon'];
                $creatorbackground = $_FILES['creator_background'];
                $creatordescription = $_POST['creator_description'];

                // MOVE NEW CREATOR PICTURE
                // MOVE ICON
                $creatorIconName = str_replace(' ','',strtolower($creatorname)).".png";
                $creatorIconTarget = 'resources/creator/icon/'.$creatorIconName;
                move_uploaded_file($creatoricon["tmp_name"], $creatorIconTarget);

                // MOVE BACKGROUND
                $creatorBackgroundName = str_replace(' ','',strtolower($creatorname)).".png";
                $creatorBackgroundTarget = 'resources/creator/background/'.$creatorBackgroundName;
                move_uploaded_file($creatorbackground["tmp_name"], $creatorBackgroundTarget);

                // ADD NEW CREATOR
                $sql = "INSERT INTO creator(`name`, `id`, `tittle`, `backgroundlink`, `iconlink`, `feature`) VALUE('$creatorname', '$creatorid', '$creatordescription', '$creatorBackgroundTarget', '$creatorIconTarget', '$appid')";
                $conn->query($sql);
            }
        }

        // MOVE APP ICON AND SCREENSHOTS
        $appicon = $_FILES['app_image'];
        $appscreenshots = $_FILES['files'];

        $appIconName = str_replace(' ','',strtolower($apptitle)).".png";
        $appIconTarget = 'resources/pendingapps/'.$appIconName;
        move_uploaded_file($appicon["tmp_name"], $appIconTarget);

        $appScreenshotsTargets = [];
        for($i=0;$i<count($appscreenshots['name']);$i++){
            $appScreenshot = str_replace(' ','',strtolower($apptitle)).$i.".png";
            // CHECK IF DIRECTORY EXIST
            if(file_exists('resources/pendingapps/screenshots/'.str_replace(' ','',strtolower($apptitle)))==false)
                mkdir('resources/pendingapps/screenshots/'.str_replace(' ','',strtolower($apptitle)));
            $appScreenshotTarget = 'resources/pendingapps/screenshots/'.str_replace(' ','',strtolower($apptitle)).'/'.$appScreenshot;
            move_uploaded_file($appscreenshots["tmp_name"][$i], $appScreenshotTarget);
            array_push($appScreenshotsTargets,$appScreenshotTarget);
        }

        $appScreenshotsTargets = json_encode($appScreenshotsTargets);

        // $apptitle
        // $appid
        // $appfree
        // $appprice
        // $appdescription
        // $appdownloads
        // $appranking 
        // $appcategory
        // $appIconTarget
        // $appScreenshotsTargets
        // $creatorid
        // $creatorname
        if($appfree==0){
            $sql = "INSERT INTO `pendingapp`(`appname`, `appid`, `appdescription`,`creatorid`, `creatorname`, `catename`, `price`, `appdownloads`, `appranking`,`pictureLink`, `screenshotslink`, `status`) VALUES('$apptitle','$appid','$appdescription','$creatorid','$creatorname','$appcategory','$appprice', $appdownloads, $appranking,'$appIconTarget','$appScreenshotsTargets',0)";
            $conn->query($sql);
        }
        else{
            $sql = "INSERT INTO `pendingapp`(`appname`, `appid`, `appdescription`,`creatorid`, `creatorname`, `catename`, `price`, `appdownloads`, `appranking`, `pictureLink`, `screenshotslink`, `status`) VALUES('$apptitle','$appid','$appdescription','$creatorid','$creatorname','$appcategory',0, $appdownloads, $appranking, '$appIconTarget','$appScreenshotsTargets',0)";
            $conn->query($sql);
        }

        print_r($sql);

        // CHANGE CATEGORY QUANTITY
        $categoryQuantity = $category1['apps']+1;
        $sql = "UPDATE categories SET apps = '$categoryQuantity' where catename = '$appcategory'";
        $conn->query($sql);

        //ADD TO RECENTLY ADDED LIST
        $sql = "INSERT INTO recentlyadded(appid) value('$appid')";
        $conn->query($sql);
        
        header("Location:upload_apps.php");
      }
      else{
          echo "bruh";
      }

    ?>
    <title>Upload Applications</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="upload_app_frame">
            <div id="title">
                <div id="div_content">
                    <div class="title_box">
                        <p class="title_text">Show us your incredible application</p>
                    </div>
                    <div class="layout_box"> 
                    </div>
                </div>
            </div> 
            <!-- App's Image -->
            <div id="content1">
            App's Image
                <div class="apps_image">
                    <img src="resources/default/defaut_app-icon.png" id="apps_profile_display"/>
                    <div class="apps_img_layout" onclick="triggerClick()">
                        <div class="apps_word_update">Upload</div>
                    </div>
                </div>
                <input type="file" style="display: none;" onchange="displayImage(this)" name="app_image" id="profile-image" class="form-control">
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
                <input type="number" name="pricing" id="pricing" disabled>
                
                <div class="form-group mt-5">
                    <label for="app_description">Application's Description</label>
                    <textarea class="form-control" name="app_description" id="app_description" rows="4"></textarea>
                </div>

                <br>Downloads
                <input type="number" name="app_downloads" id="app_downloads">

                <br><br>Ranking
                <input type="number" name="app_ranking" id ="app_ranking" max="5" min="1">
            </div>
            <!-- Hidden Creator id -->  
            <!-- App's Creator -->
            <div id="content3" >
            <div class="well" data-bind="fileDrag: multiFileData">
            <div class="form-group row">
                <div class="col-md-6">
                    <!-- ko foreach: {data: multiFileData().dataURLArray, as: 'dataURL'} -->
                    <img style="height: 100px; margin: 5px;" class="img-rounded  thumb" data-bind="attr: { src: dataURL }, visible: dataURL">
                    <!-- /ko -->
                    <div data-bind="ifnot: multiFileData().dataURL">
                        <label class="drag-label"></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <input type="file" multiple data-bind="fileInput: multiFileData, customFileInput: {
                    buttonClass: 'btn btn-success',
                    fileNameClass: 'disabled form-control',
                    onClear: onClear,
                    onInvalidFileDrop: onInvalidFileDrop
                    }" accept="image/*" name="files[]">
                </div>
            </div>
            <button class="btn btn-default" data-bind="click: debug">Debug</button>
        </div>
                Creator
                <input type="text" name="creator_name" value=
                <?php
                    echo $_SESSION['username'];
                ?>
                >
                <br>
                Creator icon
                <input type="file" name="creator_icon" class="form-control">
                Creator background
                <input type="file" name="creator_background" class="form-control">
                Creator description
                <textarea class="form-control" name="creator_description" rows="4"></textarea>
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
                <button type="submit" name="save_btn">Submit</button>
            </div>
        </div>
    </form>
 
</body> 
<script src='http://cdnjs.cloudflare.com/ajax/libs/knockout/3.1.0/knockout-min.js'></script><script src='lib/knockout-file-bindings.js'></script>
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
    var viewModel = {};
    viewModel.multiFileData = ko.observable({ dataURLArray: ko.observableArray() });
    viewModel.onClear = function (fileData) {
        if (confirm('Are you sure?')) {
            fileData.clear && fileData.clear();
        }
    };
    viewModel.debug = function () {
        window.viewModel = viewModel;
        var lit = viewModel.multiFileData().dataURLArray()
        console.log(viewModel.multiFileData())
        console.log(viewModel.multiFileData().dataURLArray());
        console.log(viewModel.multiFileData().fileArray());
        debugger;
    };
    viewModel.onInvalidFileDrop = function(failedFiles) {
    var fileNames = [];
    for (var i = 0; i < failedFiles.length; i++) {
        fileNames.push(failedFiles[i].name);
    }
    var message = 'Invalid file type: ' + fileNames.join(', ');
    alert(message)
    console.error(message);
    };
    ko.applyBindings(viewModel);
</script>
<?php
if (isset($_POST["save_btn"])){
    echo "<pre>", print_r($_FILES["files"]["name"]) ,"</pre>";    
}
?>
</html>