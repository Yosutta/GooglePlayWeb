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
      echo "<script type='text/javascript' src='lib/datepicker.js'></script>";
      echo "<link rel='stylesheet' type='text/css' href='lib/bootstrap-datepicker.css'>";
      echo "<link rel='stylesheet' type='text/css' href='style.css'>";
    ?>
    <title>Register</title>
    
</head>
<script type="text/javascript">
    $(function(){
      $('.dates #datepicker').datepicker({
        'format':'yyyy-mm-dd', 
        'autoclose':true
      });
    });
</script>
<body class ="white_body">
  <div class="alignment_center">
    <div class="res_frame">
      <table>
        <tr>
          <td>
            <form action="" method="POST">
              <div class="alignment_left"><img class="alignment_left" src ="./resources/Login/google_logo.png" width="120">
              <p class="res_title">Create your Google Account</p></div>
              
              <table>
                <tr>
                  <td class="alignment_left" colspan="2"><div><input type="text" name="fullname" id="fullname"placeholder="Full name" class="res_2col_2_input"></div></td>
                  <td class="alignment_left" ><div class="dates"><input type="text" autocomplete="off" id="datepicker"  placeholder="Date of birth" name="birthDate" class="res_2col_input" ></div></td>
                </tr>
                <tr>
                  <td><div class="spacing_bottom"></div></td> 
                </tr>
                <tr>
                  <td class="alignment_left" colspan="3"><input type="text" name="username" id="username" placeholder="Username" class="res_input"></td>
                </tr>
                <tr>
                  <td class="alignment_left" colspan="3"><div class="spacing_bottom"><p class="res_instruction_text">You can use letters,numbers & periods</p></div></td>
                </tr>
                <tr>
                  <td class="alignment_left" colspan="3"><input type="email" name="email" id="email" placeholder="Email" class="res_input"></td>
                </tr>
                <tr>
                  <td  class="alignment_left" colspan="3"><div class="spacing_bottom"><p class="res_instruction_text">You'll need to confirm that this email belongs to you.</p></div></td>
                </tr>
                <tr>
                  <td class="alignment_left" colspan="2"><input type="password" name="password" id="password" placeholder="Password" class="res_2col_2_input" ></td>
                  <td class="alignment_left"><input type="password" name="Cpassword" id="Cpassword" placeholder="Confirm" class="res_2col_input" ></td>
                </tr>
                <tr>
                  <td class="alignment_left" colspan="3"><div class="spacing_bottom"><p class="res_instruction_text">Use 8 or more characters with a mix of letters, numbers & <br>symbols</p></div></td>
                </tr>
                <tr>
                  <td ><input type="checkbox" id="showpass" class="res_custom_checkbox"></td>
                  <td class="alignment_left" ><label class="res_custom_label" for="showpass">Show password</label>
                  <td></td>
                </tr>
                <tr>
                  <td><div class="spacing_bottom"></div></td> 
                </tr>
                <tr>
                  <td class="alignment_left" ><a href="login.php"><button type="button"class="btn btn-outline-primary">Sign in instead</button></a></td>
                  <td></td>
                  <td style="text-align:right;"><button type="submit" class="btn btn-primary">Register</button><td>
                </tr>  
              </table>
            </form>
          </td>
          <td><div class="res_img_decoration"><img src="./resources/Register/img.png" width="320px"></div></td>
        </tr>
      </table>
    </div>
  </div>
</body>
<script>
    document.getElementById('showpass').onclick = function() {
    if ( this.checked ) {
       document.getElementById('password').type = "text";
       document.getElementById('Cpassword').type = "text";
    } else {
       document.getElementById('password').type = "password";
       document.getElementById('Cpassword').type = "password";
    }
};
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

  function checkUsername($user){
    global $conn;
    $sql = "SELECT * FROM users";

    $result = $conn->query($sql);

    $usernames = [];

    while($row = $result->fetch_assoc()){
      array_push($usernames,$row['username']);
    }

    if(in_array($user,$usernames)){
      return false;
    }
    return true;
    
  }

  function checkEmail($email){
    global $conn;
    $sql = "SELECT * FROM users";

    $result = $conn->query($sql);

    $emails = [];

    while($row = $result->fetch_assoc()){
      array_push($emails,$row['email']);
    }

    if(in_array($email,$emails)){
      return false;
    }
    return true;
  }

  function register($user,$pass,$fullName,$birthDate,$email){
    if(checkUsername($user)==true){
      if(checkEmail($email)==true){
        global $conn;

        $sql1 = "INSERT INTO `users`(`username`, `password`, `email`, `level`) VALUES ('$user','$pass','$email',1)";
        $sql2 = "INSERT INTO `usersinfo` (`fullName`, `birthDate`, `pictureLink`) VALUES ('$fullName', '$birthDate', '')";

        $conn->query($sql1);
        $conn->query($sql2);

        header("Location:login.php");
      }
      else
        echo "This email has already been used";
    }
    else
      echo "This username has already been used";
  }

  if(isset($_POST['email'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $fullName = $_POST['fullname'];
    $email = $_POST['email'];
    $birthDate = $_POST['birthDate'];

    register($user,$pass,$fullName,$birthDate,$email);
  }

?>
</html>