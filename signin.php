<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style/base.css" />
    <link rel="stylesheet" href="./style/form.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sign In</title>

    <script>
      function hidepassword() {
        var pwd = document.getElementById('password')
        pwd.type = "password";
      }
      
      function showpassword() {
        var pwd = document.getElementById('password')
        pwd.type = "text";
      }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./script/form.js"></script>
  </head>
  <body>
    <?php include './navbar.html'; ?>

    <div class="nav-space"></div>

    <div class="form">
      <div class="inner-form">
        <div class="form-heading">
          Welcome to WOMP
          <div class="form-sub-heading">
            Please Sign into your account
          </div>
        </div>
        <div class="form-spacer"></div>
        <form action="signin.php" method="post">
          <div class="form-field">
            <input type="text" class="form-field-input" placeholder=" " id="username" name="username" />
            <label for="username" class="form-field-label">Username</label>
          </div>
          <div class="form-field">
            <input type="password" class="form-field-input" placeholder=" " id="password" name="password" />
            <label for="password" class="form-field-label">Password</label>
            <div class="form-show-pass">
              <button type="button" onmousedown="showpassword()" onmouseup="hidepassword()">
                <i class="fa fa-eye" style="font-size:24px"></i>
              </button>
            </div>
          </div>
          <div>
            <input type="checkbox" class="form-field-checkbox" name="remember" id="remember" value="remember">
            <label for="remember" class="form-checkbox-label">Remember me</label>
          </div>
          <div>
            <button type="submit" class="form-submit-button">Sign In</button>
          </div>
          <div class="form-links">
            New here?
            <a href="./registration.php">Create an account</a>
          </div>
          <div class="form-links">
            Forgot password?
            <a href="">Recovery Options</a>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>

<?php
  session_start();
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $hashed_password = hash("sha256", $_POST["password"]);
    $remember = $_POST["remember"];

    $conn = mysqli_connect("localhost", "cse3002", "");
    if (!$conn)
      print mysqli_error($conn);
    mysqli_select_db($conn, "cse3002");

    $query = "SELECT username, passhash FROM customer WHERE username=? and passhash=?;";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ss", $username, $hashed_password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $user, $passh);
    mysqli_stmt_fetch($stmt);
    if ($user) {
      $_SESSION["username"] = $username;
      // cookie expire after 24 days
      if ($remember)
        setcookie("womp-cookie", $username." ".$hashed_password, time()+(24*24*60*60));
      mysqli_close($conn);
      header("location: ./profile.php");
    }

    mysqli_close($conn);
  }
?>
