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
  
      if($_SESSION['level']!=3){
          header("Location: index.php");
      }

      $conn = new mysqli($servername,$username,$password,$dbname);
  
      if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
      }

      $price = "";
      $numbers = "";

      $sql = "SELECT * FROM pendingapp order by date_added desc";
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
        
        function utf8ize($d) {
            if (is_array($d)) {
                foreach ($d as $k => $v) {
                    $d[$k] = utf8ize($v);
                }
            } else if (is_string ($d)) {
                return utf8_encode($d);
            }
            return $d;
        }
    ?>
    <script>
        let pendingapps = <?php echo json_encode(utf8ize($pendingapps))?>
    </script>
    <title>GPlay - A.D.M.I.N</title>
</head>
<body>
        <!-- App's Image -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-3" id="statistic">
                    Statistic
                </div>
                <div class="col-9" id="appmanagement">
                    <div class="overflow-auto" style="">
                        <button class="btn btn-warning" onclick="showAdminAppsGrid(pendingapps,index)">
                            <i class="fas fa-redo-alt text-white"></i>
                        </button>  
                        <button class="btn btn-info" id="previousAppGrid" onclick="removeAdminAppsGrid(),showAdminAppsGrid(pendingapps,index-5), index = index -5,console.log(index)">
                            <i class="fas fa-angle-double-left"></i>
                        </button>
                        <button class="btn btn-info" id="nextAppGrid" onclick="removeAdminAppsGrid(),showAdminAppsGrid(pendingapps,index+5),index = index +5,console.log(index)">
                            <i class="fas fa-angle-double-right"></i>
                        </button>
                        <table id="appsGrid">
                            <tr class="tradmin">
                                <th>App's name</th>
                                <th>App's thumbnail </th>
                                <th>Category</th>
                                <th>Creator</th>
                                <th>Status</th>
                                <th>Approval</th>
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
    }
?>
<script>
let index = 0
showAdminAppsGrid(pendingapps,index)
</script>
</html>