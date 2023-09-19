<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<?php include("navbar.php"); ?>



<div class=" row">
  <div class="col-sm-12 col-md-6 col-lg-3">
  <div class="card  shadow ">
    <div class="card-body">
    <?php
      if (isset($_SESSION['total'])) {
        echo '  <a href="./image/main/page.jpeg"><img class="card-img-top" src="./image/main/cs.png" height="300px"  alt="Card image cap"></a>
        ';
      }
      else{
        echo'  <a href="login.php"><img class="card-img-top" src="./image/main/cs.png" height="300px"  alt="Card image cap"></a>
';
      }
      ?>
      <h5 class="card-title">Computer Science</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

    </div>
  </div>
  </div>
  <div class="col-sm-12 col-md-6 col-lg-3">
  <div class="card  shadow ">
  <!-- <a href="#"><img class="card-img-top" src="./image/main/card2.webp" height="300px" alt="Card image cap"></a> -->
  <?php
      if (isset($_SESSION['total'])) {
        echo '  <a href="./image/main/page.jpeg"><img class="card-img-top" src="./image/main/card1.jpeg" height="300px"  alt="Card image cap"></a>
        ';
      }
      else{
        echo'  <a href="login.php"><img class="card-img-top" src="./image/main/card1.jpeg" height="300px"  alt="Card image cap"></a>
';
      }
      ?>
  
  <div class="card-body">
      <h5 class="card-title">Information Technology</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

    </div>
  </div>
  </div>
  <div class="col-sm-12 col-md-6 col-lg-3">
  <div class="card mb-2 shadow ">
  <!-- <a href="#"><img class="card-img-top" src="./image/main/card3.webp" height="300px" alt="Card image cap"></a> -->
  <?php
      if (isset($_SESSION['total'])) {
        echo '  <a href="./image/main/page.jpeg"><img class="card-img-top" src="./image/branch/elecrical.png" height="300px"  alt="Card image cap"></a>
        ';
      }
      else{
        echo'  <a href="login.php"><img class="card-img-top" src="./image/branch/elecrical.png" height="300px"  alt="Card image cap"></a>
';
      }
      ?>
  
  <div class="card-body">
      <h5 class="card-title">Electrical Engineering</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

    </div>
  </div>
  </div>
  <div class="col-sm-12 col-md-6 col-lg-3">
  <div class="card  shadow ">
  <!-- <a href="#"><img class="card-img-top" src="./image/main/cs.png" height="300px" alt="Card image cap"></a> -->
  <?php
      if (isset($_SESSION['total'])) {
        echo '  <a href="./image/main/page.jpeg"><img class="card-img-top" src="./image/main/sicil.webp" height="300px"  alt="Card image cap"></a>
        ';
      }
      else{
        echo'  <a href="login.php"><img class="card-img-top" src="./image/main/sivil.webp" height="300px"  alt="Card image cap"></a>
';
      }
      ?>
  <div class="card-body">
      <h5 class="card-title">Civil</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

    </div>
  </div>
  </div>
</div>


<div class=" row">
  <div class="col-sm-12 col-md-6 col-lg-3">
  <div class="card  shadow ">
 
 <!-- <a href="#"><img class="card-img-top" src="./image/main/card1.jpeg" height="300px"  alt="Card image cap"></a> -->
 
 
 
 <div class="card-body">
 <?php
      if (isset($_SESSION['total'])) {
        echo '  <a href="./image/main/page.jpeg"><img class="card-img-top" src="./image/branch/mech.png" height="300px"  alt="Card image cap"></a>
        ';
      }
      else{
        echo'  <a href="login.php"><img class="card-img-top" src="./image/branch/mech.png" height="300px"  alt="Card image cap"></a>
';
      }
      ?>
      <h5 class="card-title">Mechanical</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

    </div>
  </div>
  </div>
  <div class="col-sm-12 col-md-6 col-lg-3">
  <div class="card  shadow ">
  <!-- <a href="#"><img class="card-img-top" src="./image/main/card2.webp" height="300px" alt="Card image cap"></a> -->

  <?php
      if (isset($_SESSION['total'])) {
        echo '  <a href="./image/main/page.jpeg"><img class="card-img-top" src="./image/branch/mom.png" height="300px"  alt="Card image cap"></a>
        ';
      }
      else{
        echo'  <a href="login.php"><img class="card-img-top" src="./image/branch/mom.png" height="300px"  alt="Card image cap"></a>
';
      }
      ?>

  <div class="card-body">
      <h5 class="card-title">Modern Office Management</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

    </div>
  </div>
  </div>
  <div class="col-sm-12 col-md-6 col-lg-3">
  <div class="card mb-2 shadow ">
  <!-- <a href="#"><img class="card-img-top" src="./image/main/card3.webp" height="300px" alt="Card image cap"></a> -->
  <?php
      if (isset($_SESSION['total'])) {
        echo '  <a href="./image/main/page.jpeg"><img class="card-img-top" src="./image/branch/elecrical.jpeg" height="300px"  alt="Card image cap"></a>
        ';
      }
      else{
        echo'  <a href="login.php"><img class="card-img-top" src="./image/branch/elecrical.jpeg" height="300px"  alt="Card image cap"></a>
';
      }
      ?>
  
  <div class="card-body">
      <h5 class="card-title">Electronics & Telecommunication </h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

    </div>
  </div>
  </div>
  <div class="col-sm-12 col-md-6 col-lg-3">
  <div class="card  shadow ">
  <!-- <a href="#"><img class="card-img-top" src="./image/main/cs.png" height="300px" alt="Card image cap"></a> -->
  <?php
      if (isset($_SESSION['total'])) {
        echo '  <a href="./image/main/page.jpeg"><img class="card-img-top" src="./image/main/card1.jpeg" height="300px"  alt="Card image cap"></a>
        ';
      }
      else{
        echo'  <a href="login.php"><img class="card-img-top" src="./image/main/card1.jpeg" height="300px"  alt="Card image cap"></a>
';
      }
      ?>

  
  <div class="card-body">
      <h5 class="card-title">Metalurgi</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

    </div>
  </div>
  </div>
</div>



<div class=" row">
  <div class="col-sm-12 col-md-6 col-lg-3">
  <div class="card  shadow ">
  <!-- <a href="#"><img class="card-img-top" src="./image/main/card1.jpeg" height="300px"  alt="Card image cap"></a> -->
  <?php
      if (isset($_SESSION['total'])) {
        echo '  <a href="./image/main/page.jpeg"><img class="card-img-top" src="./image/branch/meta.jpg" height="300px"  alt="Card image cap"></a>
        ';
      }
      else{
        echo'  <a href="login.php"><img class="card-img-top" src="./image/branch/meta.jpg" height="300px"  alt="Card image cap"></a>
';
      }
      ?>
  
  
  <div class="card-body">
      <h5 class="card-title">Metalargy</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

    </div>
  </div>
  </div>
  <div class="col-sm-12 col-md-6 col-lg-3">
  <div class="card  shadow ">
  <!-- <a href="#"><img class="card-img-top" src="./image/main/card2.webp" height="300px" alt="Card image cap"></a> -->
  <?php
      if (isset($_SESSION['total'])) {
        echo '  <a href="./image/main/page.jpeg"><img class="card-img-top" src="./image/main/card2.webp" height="300px"  alt="Card image cap"></a>
        ';
      }
      else{
        echo'  <a href="login.php"><img class="card-img-top" src="./image/main/card2.webp" height="300px"  alt="Card image cap"></a>
';
      }
      ?>
  
  
  <div class="card-body">
      <h5 class="card-title">Metalargy</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

    </div>
  </div>
  </div>
  <div class="col-sm-12 col-md-6 col-lg-3">
  <div class="card mb-2 shadow ">
  <?php
      if (isset($_SESSION['total'])) {
        echo '  <a href="./image/main/page.jpeg"><img class="card-img-top" src="./image/main/card3.webp" height="300px"  alt="Card image cap"></a>
        ';
      }
      else{
        echo'  <a href="login.php"><img class="card-img-top" src="./image/main/card3.webp"height="300px"  alt="Card image cap"></a>
';
      }
      ?>
    <div class="card-body">
      <h5 class="card-title">Electrical Engineering</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

    </div>
  </div>
  </div>
  <div class="col-sm-12 col-md-6 col-lg-3">
  <div class="card  shadow ">
 
  <?php
      if (isset($_SESSION['total'])) {
        echo '  <a href="./image/main/page.jpeg"><img class="card-img-top" src="./image/main/cd.jpeg" height="300px"  alt="Card image cap"></a>
        ';
      }
      else{
        echo'  <a href="login.php"><img class="card-img-top" src="./image/main/cd.jpeg" height="300px"  alt="Card image cap"></a>
';
      }
      ?>
 
  <div class="card-body">
      <h5 class="card-title">Civil</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

    </div>
  </div>
  </div>
</div>


