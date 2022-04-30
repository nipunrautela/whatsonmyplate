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
  <script src="./script/base.js"></script>
</head>
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
            <input type="text" class="form-field-input" placeholder=" " id="name" />
            <label for="username" class="form-field-label">Full Name</label>
          </div>
          <div class="form-field">
            <input type="text" class="form-field-input" placeholder=" " id="username" />
            <label for="username" class="form-field-label">Username</label>
          </div>
          <div class="form-field">
            <input type="text" class="form-field-input" placeholder=" " id="email" />
            <label for="username" class="form-field-label">Email</label>
          </div>
          <div class="form-field">
            <input type="password" class="form-field-input" placeholder=" " id="password" />
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
            <input type="password" class="form-field-input" placeholder=" " id="repassword" />
            <label for="password" class="form-field-label">Repeat Password</label>
          </div>
          <div>
            <input type="checkbox" class="form-field-checkbox" name="tnc" id="tnc">
            <label for="remember" class="form-checkbox-label">
              Accept <a href="">Terms</a> and <a href="">Condition</a>
            </label>
          </div>
          <div>
            <input type="checkbox" class="form-field-checkbox" name="pp" id="pp">
            <label for="remember" class="form-checkbox-label">
              Accept <a href="">Privacy Policy</a>
            </label>
          </div>
          <div>
            <button class="form-submit-button">Register</button>
          </div>
          <div class="form-links">
            Already have an account?
            <a href="./signin.html">Sign In</a>
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
  if ($_SERVER["REQUEST_METHOD"] != "post")
    die;
  $conn = mysqli_connect("localhost", "cse3002", "Test@0987");
  if (!$conn)
    print mysqli_error($conn);
  print $conn
?>