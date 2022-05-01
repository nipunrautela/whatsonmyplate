<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/base.css">
  <link rel="stylesheet" href="./style/form.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Register</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="./script/base.js"></script>
  <script src="./script/form.js"></script>
</head>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $hashed_password = hash("sha256", $_POST["password"]);
    $phno = $_POST["phno"];
    $tnc = $_POST["tnc"];
    $pp = $_POST["pp"];

    if (!$tnc || !$pp)
      die("Error: terms and condition or privacy policy not accepted");

    $conn = mysqli_connect("localhost", "cse3002", "");
    if (!$conn)
      print mysqli_error($conn);
    mysqli_select_db($conn,"cse3002");
    $query = 'INSERT INTO customer(customer_name, username, passhash, email, mobile) VALUES(?,?,?,?,?);';
    mysqli_query($conn, $query);
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "sssss", $name, $username, $hashed_password, $email, $phno);
    mysqli_stmt_execute($stmt);

    mysqli_close($conn);
  }
?>

<body>
    <?php include './navbar.html'; ?>

    <div class="nav-space"></div>

    <div class="form">
      <div class="inner-form">
        <div class="form-heading">
          Welcome to WOMP
          <div class="form-sub-heading">
            Please create your account
          </div>
        </div>
        <div class="form-spacer"></div>
        <form action="registration.php" method="post">
          <div class="form-field">
            <input type="text" class="form-field-input" placeholder=" " name="name" id="name" />
            <label for="username" class="form-field-label">Full Name</label>
          </div>
          <div class="form-field">
            <input type="text" class="form-field-input" placeholder=" " name="username" id="username" />
            <label for="username" class="form-field-label">Username</label>
          </div>
          <div class="form-field">
            <input type="text" class="form-field-input" placeholder=" " name="email" id="email" />
            <label for="username" class="form-field-label">Email</label>
          </div>
          <div class="form-field">
            <input type="password" class="form-field-input" placeholder=" " name="password" id="password" />
            <label for="password" class="form-field-label">
              Password 
            </label>
            <div class="form-show-pass">
              <button type="button" onmousedown="showpassword()" onmouseup="hidepassword()">
                <i class="fa fa-eye" style="font-size:24px"></i>
              </button>
            </div>
          </div>
          <div class="form-field">
            <input type="password" class="form-field-input" placeholder=" " name="repassword" id="repassword" />
            <label for="password" class="form-field-label">Repeat Password</label>
          </div>
          <div class="form-field">
            <input type="number" class="form-field-input" placeholder=" " name="phno" id="phno" />
            <label for="username" class="form-field-label">Mobile</label>
          </div>
          <div>
            <input type="checkbox" class="form-field-checkbox" name="tnc" id="tnc">
            <label for="tnc" class="form-checkbox-label">
              Accept <a href="" target="_blank">Terms</a> and <a href="" target="_blank">Condition</a>
            </label>
          </div>
          <div>
            <input type="checkbox" class="form-field-checkbox" name="pp" id="pp">
            <label for="pp" class="form-checkbox-label">
              Accept <a href="" target="_blank">Privacy Policy</a>
            </label>
          </div>
          <div>
            <button type="submit" class="form-submit-button">Register</button>
          </div>
          <div class="form-links">
            Already have an account?
            <a href="./signin.php">Sign In</a>
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
