<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/base.css" />
    <link rel="stylesheet" href="./style/home.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>My Profile</title>
</head>
<?php
session_start();

if (isset($_GET["logout"])) {
  session_unset();
  setcookie("womp-cookie", "", time()-1);
  header("location: ./signin.php");
}

if ($_SESSION["username"]) {

}
elseif ($_COOKIE["womp-cookie"]) {
  $cookie = explode(" ", $_COOKIE["womp-cookie"]);
  $conn = mysqli_connect("localhost", "cse3002", "", "cse3002");
  $query = "SELECT * FROM customer WHERE username=$cookie[0] AND passhash=$cookie[1]";
  $result = mysqli_query($conn, $query);
  
  $data = mysqli_fetch_array($result);
  print_r($data);
}
else {
  header("location: ./signin.php");
}
?>
<body>
    <?php include './navbar.html'; ?>
    <form style="display: flex; width:100%; justify-content:center; position: relative" action="./profile.php" method="get">
      <input type="hidden" name="logout" value="logout">
      <button style="top: 10em; padding: 2em; position: relative;">Logout</button>
    </form>
</body>
</html>