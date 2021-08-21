<?php
require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    //check karo agar name khali hai
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // parameter ki value set karain
            $param_username = trim($_POST['username']);

            // ye statement execute karne ki koshish
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken"; 
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);


// sirf password check
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}

// password confirm check kar rahy hain
if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";
}


// agar database nahi to jakar database add karo
if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
{
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

        // in parameters ko set karo
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        // query ko execute karne ki koshish
        if (mysqli_stmt_execute($stmt))
        {
            header("location: login.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}

?>




<!doctype html>
<html lang="en">
  <head>
  <link href="fontawesome-free-5.15.3-web/css/fontawesome.css" rel="stylesheet">
    <link href="fontawesome-free-5.15.3-web/css/brands.css" rel="stylesheet">
    <link href="fontawesome-free-5.15.3-web/css/solid.css" rel="stylesheet">
  <link rel='stylesheet' type='text/css' media='screen' href='styles.css'>

    <title>Mohsin Ali</title>
  </head>
  <body>


  <div id="navbar">
        <div id="logo">
            <img src="Images/logo.png"  alt="logo" width="70px" height="70px" />
        </div>
        <div id="Navlink">
            <a href="index.php">Home</a>
            <a href="about.html">About</a>
            <a href="products.html">Products</a>
            <a href="login.php">Login</a>
            <a href="#" onclick="show()"><i class="fas fa-shopping-cart"></i><span style="color: rgb(160, 0, 0);" id="cart">0</span></a>
        </div>
    </div>

<form action="" method="post" style="border:1px solid #ccc">
  <div class="SignUpcontainer">
<div id="signUpHeading">
<h1>Sign Up</h1>
    <p>To Register at Mohsin Store Fill The Form</p>
    <hr>
</div>

    <label for="email"><b>User Name</b></label>
    <input id="inputSignUp" type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input id="inputSignUp" type="password" placeholder="Enter Password" name="password" required>

    <label for="confirm_password"><b>Confirm Password</b></label>
    <input id="inputSignUp" type="password" placeholder="Confirm Password" name="confirm_password" required>


    

    <div class="clearfix">
      <button id="signUpBtn" type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

   <script src='main.js'></script>
  </body>
</html>
