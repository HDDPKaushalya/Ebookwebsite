<?php

$is_invalid = false;

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $mysqli = require __DIR__ . "/cusotmersDB.php";

    $sql = sprintf("SELECT * FROM customers
                    WHERE user_name = '%s'",
                    $mysqli->real_escape_string($_POST["user_name"]));
    
    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();

    if($user){
        if(password_verify($_POST["password"], $user["password_hash"])){
            
            session_start();

            session_regenerate_id();

            $_SESSION["user_id"] = $user["user_id"];

            header("Location: index.php?page=home");
            exit;
        }
    }

    $is_invalid = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, hight=device-hight,  initial-scale=1.0">
    
    <title>Login</title>
    
    <!--Bootstrap-->
    <link rel="stylesheet" type="text/css" href="Components/Bootstrap/css/bootstrap.min.css" >
    <script type="text/javascript" src="Components/Bootstrap/js/bootstrap.min.js"></script>
    
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="Components/CSS/login/Loginpage v1.css" >

    
</head>

<body style="background-image: url('Components/images/15442036_5592750.png')">
  <?php if ($is_invalid): ?>
        <em>Invalid login</em>
    <?php endif; ?>

    <div class="container">
    
    <!--Upper border-->

    <div class="ubod1">

    </div>

    <!-- Login area -->
    <div class="LA1">
      
      <a href = "index.php"><img id="loginimg"  src="Components/images/recreate 1.3.png" ></a>
        <form id="Loginform" style="margin-top: 20px;" method="post">
          
          <div style = "margin: 20px;">
          <label for="user_name">User Name</label>
          <br>
          <input class="area" type="text" id="user_name" name="user_name"
          value ="<?= htmlspecialchars($_POST["user_name"] ?? "") ?>">
          </div>
            
          <div style = "margin: 20px;">
          <label for="password">Password</label>
          <br>
          <input class="area" type="password" id="password" name="password">
          </div>
          
          <div style = "margin: 30px;">
          <input class="form-check-input" value = "" type="checkbox">
          <label >Remember me</label>&nbsp;&nbsp; 
          <a id="lab1" href="Forget.html" style="float: center;">Forgot password</a>
          </div>
          
          <div style = "margin-top: 10px" >
            
            <button id="sub">Log In</button>
            <input type="button" id="signup" onclick="window.location.href='Signup v1.html'" value="Sign Up">  
          
          </div>
          
        </form>
  
      </div>
  
      <!--Lower border-->
      <div class="Lbod1">
  
      </div>
    </div>
</html>


