<?php
//This script will handle login
session_start();

// check karo k user pahly se hi to login nahii
if(isset($_SESSION['username']))
{
    header("location: welcome.php");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // statement ko execute karne k liye 
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // iska mtlb k password sahi hai user ko allow karo
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //user ko index pe redirect kardo
                            header("location: welcome.php");
                            
                        }
                    }

                }

    }
}    


}


?>

<!doctype html>
<html lang="en">
  <head>
  <link rel='stylesheet' type='text/css' media='screen' href='styles.css'>
  <link href="fontawesome-free-5.15.3-web/css/fontawesome.css" rel="stylesheet">
    <link href="fontawesome-free-5.15.3-web/css/brands.css" rel="stylesheet">
    <link href="fontawesome-free-5.15.3-web/css/solid.css" rel="stylesheet">
    <title>Mohsin Ali</title>
  </head>
  <body>
  <div id="navbar">
        <div id="logo">
            <img src="Images/logo.png"  alt="logo" width="70px" height="70px" />
        </div>
        <div id="Navlink">
            <a href="index.php">Home</a>
            <a href="about.html#">About</a>
            <a href="products.html">Products</a>
            <a href="login.php"  style="color:crimson">Login</a>
            <a href="#" onclick="show()"><i class="fas fa-shopping-cart"></i><span style="color: rgb(160, 0, 0);" id="cart">0</span></a>
        </div>
    </div>

    <form action="" method="post">
  <div class="imgcontainer">
    <h2> Login at Mohsin Store </h2>
  </div>

  <div class="logincontainer">
    <label for="uname"><b>Username</b></label>
    <input id="inputSignIn" type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input id="inputSignIn" type="password" placeholder="Enter Password" name="password" required>

    <button id="loginBtn" type="submit">Login</button>
  </div>
  <div id='linkToSignup'>
      <p> Don't Have Account? <a href='register.php'> Register Now!!</a></p>
</div>
</form>



</div>

  <script src='main.js'></script>
  </body>
</html>
