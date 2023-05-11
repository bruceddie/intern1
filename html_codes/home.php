<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>home-exceptional</title>
  <link rel="stylesheet" href="../css/hom.css" />
</head>

<body>
  <div class="container">
    <div class="left-nav">
      <img src="../img/hum.png" alt="" id="humberger">
     <div class="sml">
     <img src="../img/google.png" alt="">
      <img src="../img/microsoft.png" alt="">
      <img src="../img/ut.png" alt="">
      <img src="../img/logo.png" alt="">
     </div>
    </div>
    <div class="edd">
      <div class="top-nav">
        <a href="../"> <img src="../img/back.png" alt=""></a>
        <form action="" method="post">
        <ul>
          <li>
            <button class="button-85" role="button">Products</button>
          </li>
          <li>
            <button class="button-85" role="button">Review</button>
          </li>
          <li>
            <button class="button-85" role="button">Contact us</button>
          </li>
          <li>
          <button class="button-85" role="button" name="getstarted">Get started</button>
          </li>
        </ul>
        </form>
      </div>
      <div class="main">
        <h1 class="hmain">XCEPTIONAL TECH</h1>
        <div class="headings">
          <h1 class="hone">MEET EXCEPTIONAL</h1>
          <h1 class="htwo">TECHNOLOGY</h1>
          <h1 class="hthree">&QUALITY PRODUCTS</h1>
          <div class="desc">
            <p>Build your website with mobile devices and SEO in mind &</p>
            <p>Handling tough Tech Tasks</p>
          </div>
        </div>
        <img src="../pictures/photo.png" alt="">
        <h3>Bless both ur hands and ur eyes
          with computers fom Xceptional tech </h3>
      </div>
    </div>
  </div>
</body>

</html>
<?php
 if(isset($_POST['getstarted'])){
  header("location:product.php");
 }
?>