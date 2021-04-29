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
    ?>
    <title>Upload Applications</title>
    
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="upload_app_frame">
            <div id="title">
                <p>Show us your incredible application</p>
            </div> 
            <div id="content1">
                <input type="file" name="img_app">
            </div> 
            <div id="content2">
                <input type="text" name="title_app" placeholder="Title">
            </div>
            <div id="content3">
                <input type="text" name="creator name" placeholder="Creator">
            </div>
            <div id="cator">
                <select >
                    <option>Select your app's category</opiton>
                </select>
            </div>
        </div>
    </form>
 
</body> 
</html>