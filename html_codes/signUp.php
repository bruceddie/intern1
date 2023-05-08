<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>signUp-xceptional</title>
  <link rel="stylesheet" href="../css/signUp.css">
</head>
<div class="container">

  <body>
    <div class="header">
      <h1>XCEPTIONAL TECH</h1>
    </div>
  
  
    <div class="form" >
      <h3>Create a new account?</h3>
      <form action="#" method="POST" autocomplete="off">
        <input type="email" placeholder="email" name="em" required>
        <input type="text" placeholder="First name" name="fname" required>
        <input type="text" placeholder="Last name" name="lname" required>
        <input type="password" placeholder="password" name="pass" required>
        <button name="btn">submit</button>
        <p>arleady have an account?<a href="/index.html">login</a></p>
      </form>
    </div>
</div>
</body>

</html>
<?php
if (isset($_POST['btn'])) {
  include"connect.php";
  $email = $_POST['em'];
  $firstname = $_POST['fname'];
  $lastname = $_POST['lname'];
  $password = $_POST['pass'];
  $qery = mysqli_query($conn, "insert into users values ('','$email','$firstname','$lastname','$password')");
  if($qery){
    echo "<script> alert('Added successfully!!');</script>";
  }
  else{
    echo "<script> alert('failed to connect!!');</script>";
  }
}
?>