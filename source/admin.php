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

      $price = "";
      $numbers = "";

      $sql = "SELECT * FROM pendingapp";
      $result = $conn->query($sql);
      $pendingapps = [];
      $row = $result->fetch_assoc();
      if($row){
          array_push($pendingapps, $row);
          while($row=$result->fetch_assoc()){
              array_push($pendingapps, $row);
          }    
        }
        

      if(isset($_POST['giftcodeprice']) and isset($_POST['codes'])){
        global $price, $numbers;
        $price = $_POST['giftcodeprice'];
        $numbers = $_POST['codes'];
        }
    ?>
    <script>
    let pendingapps = <?php echo json_encode($pendingapps);?>
    </script>
    <title>A.D.M.I.N</title>
</head>
<body>
        <div id="test"></div>
        <!-- App's Image -->
        <div class="container">
            <div class="row">
                <div class="col-3" id="statistic">
                    Statistic
                </div>
                <div class="col-9" id="appmanagement">
                    <div class="overflow-auto" style="">
                        <table id="appsGrid">
                            <tr>
                                <th>App's name</th>
                                <th>App's thumbnail </th>
                                <th>Category</th>
                                <th>Creator</th>
                                <th>Status</th>
                                <th>Approval</th>
                            </tr>
                            <tr>
                                <td>Microsoft</td>
                                <td>Picture</td>
                                <td>Social</td>
                                <td>Windows</td>
                                <td>Waiting</td>
                                <td>
                                    <span style="background-color:greenyellow;padding:5px 10px 5px 10px;border-radius:5px">
                                        <i class="fas fa-check mt-3" style="color:white"></i>
                                    </span>
                                    <span class="m-4" style="background-color:red;padding:5px 10px 5px 10px;border-radius:5px">
                                        <i class="fas fa-times" style="color:white"></i>
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- App's category -->
        <form action="" method="post" id="cator">
            <h3>Create gift code</h3>
            Price
            <select name="giftcodeprice" id="giftcodeprice">
                <option value="20000">20000₫</option>
                <option value="50000">50000₫</option>
                <option value="100000">100000₫</option>
                <option value="200000">200000₫</option>
                <option value="500000">500000₫</option>
            </select>
            <br><br>
            Numbers of codes
            <input type="number" name="codes" id="codes">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
 
</body> 
<?php
    if(isset($_POST['giftcodeprice']) and isset($_POST['codes'])){
       include("generateGiftCode.php");
       generateGiftCode($price,$numbers);
       header("Location:admin.php");
    }
?>
<script>
    for(let i=0;i<pendingapps.length;i++){
        let table = document.getElementById("appsGrid");
        let row  = table.insertRow(2);

        let appname = row.insertCell(0)
        let appimage = row.insertCell(1)
        let category = row.insertCell(2)
        let creator = row.insertCell(3)
        let status = row.insertCell(4)

        appname.innerHTML = pendingapps[i]['appname']

        var img = document.createElement('img'); 
        img.src = pendingapps[i]['pictureLink']; 
        img.style.height = "100px";
        appimage.appendChild(img);

        category.innerHTML = pendingapps[i]['catename']

        creator.innerHTML = pendingapps[i]['creatorname']

        status.innerHTML = "Waiting"

    }
</script>
</html>