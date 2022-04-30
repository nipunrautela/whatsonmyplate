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
            <input type="text" class="form-field-input" placeholder=" " id="email" />
            <label for="username" class="form-field-label">Email</label>
          </div>
          <div class="form-field">
            <input type="password" class="form-field-input" placeholder=" " id="password" />
            <label for="password" class="form-field-label">Password</label>
            <div class="form-show-pass">
              <button type="button" onmousedown="showpassword()" onmouseup="hidepassword()">
                <i class="fa fa-eye" style="font-size:24px"></i>
              </button>
            </div>
          </div>
          <div>
            <input type="checkbox" class="form-field-checkbox" name="remember" id="remember">
            <label for="remember" class="form-checkbox-label">Remember me</label>
          </div>
          <div>
            <button type="button" class="form-submit-button">Sign In</button>
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
