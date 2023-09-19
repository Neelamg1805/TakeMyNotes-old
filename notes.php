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

<div class="container-fluid  " style="width: 95%;margin-top:20px;">
<div class=" row mt-5 ms-5">
    <div class="col-8 d-flex  ">
 
  <div class="col-sm-12 col-md-6 col-lg-4 me-3 mt-5">
  <div class="card  shadow ">
  <?php
      if (isset($_SESSION['total'])) {
        echo '  <a href="./image/main/page2.jpeg"><img class="card-img-top" src="./image/main/page.jpeg" height="300px"  alt="Card image cap"></a>
        ';
      }
      else{
        echo'  <a href="login.php"><img class="card-img-top" src="./image/main/page.jpeg" height="300px"  alt="Card image cap"></a>
';
      }
      ?>
    <div class="card-body">
      <h5 class="card-title">Metalargy</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

    </div>
  </div>
  </div>
  <div class="col-sm-12 col-md-6 col-lg-4 me-3 mt-5">
  <div class="card shadow ">
  <?php
      if (isset($_SESSION['total'])) {
        echo '  <a href="./image/main/page6.jpeg"><img class="card-img-top" src="./image/main/page2.jpeg" height="300px"  alt="Card image cap"></a>
        ';
      }
      else{
        echo'  <a href="login.php"><img class="card-img-top" src="./image/main/page2.jpeg" height="300px"  alt="Card image cap"></a>
';
      }
      ?>
    <div class="card-body">
      <h5 class="card-title">Metalargy</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

    </div>
  </div>
  </div>
  <div class="col-sm-12 col-md-6 col-lg-4 me-3 mt-5">
  <div class="card mb-2 shadow ">
  <?php
      if (isset($_SESSION['total'])) {
        echo '  <a href="./image/main/page3.jpg"><img class="card-img-top" src="./image/main/page6.jpeg" height="300px"  alt="Card image cap"></a>
        ';
      }
      else{
        echo'  <a href="login.php"><img class="card-img-top" src="./image/main/page6.jpeg" height="300px"  alt="Card image cap"></a>
';
      }
      ?>
    <div class="card-body">
      <h5 class="card-title">Electrical Engineering</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

    </div>
  </div>
  </div>
  <div class="col-sm-12 col-md-6 col-lg-4 me-3 mt-5">
  <div class="card  shadow ">
  <?php
      if (isset($_SESSION['total'])) {
        echo '  <a href="./image/main/page5.PNG"><img class="card-img-top" src="./image/main/page2.jpeg" height="300px"  alt="Card image cap"></a>
        ';
      }
      else{
        echo'  <a href="login.php"><img class="card-img-top" src="./image/main/page2.jpeg" height="300px"  alt="Card image cap"></a>
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
  <div class="col-4">
    
    
  </div>
</div>
<div class=" row ms-5 mt-5">
    <div class="col-8 d-flex ">
 
  <div class="col-sm-12 col-md-6 col-lg-4 me-3">
  <div class="card shadow ">
  <?php
      if (isset($_SESSION['total'])) {
        echo '  <a href="./image/main/page6.jpeg"><img class="card-img-top" src="./image/main/page6.jpeg" height="300px"  alt="Card image cap"></a>
        ';
      }
      else{
        echo'  <a href="login.php"><img class="card-img-top" src="./image/main/page6.jpeg" height="300px"  alt="Card image cap"></a>
';
      }
      ?>
    <div class="card-body">
      <h5 class="card-title">Metalargy</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

    </div>
  </div>
  </div>
  <div class="col-sm-12 col-md-6 col-lg-4 me-3">
  <div class="card shadow ">
  <?php
      if (isset($_SESSION['total'])) {
        echo '  <a href="./image/main/page3.jpg"><img class="card-img-top" src="./image/main/page.jpeg" height="300px"  alt="Card image cap"></a>
        ';
      }
      else{
        echo'  <a href="login.php"><img class="card-img-top" src="./image/main/page.jpeg" height="300px"  alt="Card image cap"></a>
';
      }
      ?>
    <div class="card-body">
      <h5 class="card-title">Metalargy</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

    </div>
  </div>
  </div>
  <div class="col-sm-12 col-md-6 col-lg-4 me-3">
  <div class="card mb-2 shadow ">
  <?php
      if (isset($_SESSION['total'])) {
        echo '  <a href="./image/main/page5.PNG"><img class="card-img-top" src="./image/main/page2.jpeg" height="300px"  alt="Card image cap"></a>
        ';
      }
      else{
        echo'  <a href="login.php"><img class="card-img-top" src="./image/main/page2.jpeg" height="300px"  alt="Card image cap"></a>
';
      }
      ?>
    <div class="card-body">
      <h5 class="card-title">Electrical Engineering</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

    </div>
  </div>
  </div>
  <div class="col-sm-12 col-md-6 col-lg-4 me-3">
  <div class="card  shadow ">
  <?php
      if (isset($_SESSION['total'])) {
        echo '  <a href="./image/main/page6.jpeg"><img class="card-img-top" src="./image/main/page6.jpeg" height="300px"  alt="Card image cap"></a>
        ';
      }
      else{
        echo'  <a href="login.php"><img class="card-img-top" src="./image/main/page6.jpeg" height="300px"  alt="Card image cap"></a>
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
  <div class="col-4 ms-1">


  
    
  </div>
</div>
<div class=" row ms-5 mt-5">
    <div class="col-8 d-flex ">
 
  <div class="col-sm-12 col-md-6 col-lg-4 me-3">
  <div class="card  shadow ">
  <?php
      if (isset($_SESSION['total'])) {
        echo '  <a href="./image/main/page2.jpeg"><img class="card-img-top" src="./image/main/page5.PNG" height="300px"  alt="Card image cap"></a>
        ';
      }
      else{
        echo'  <a href="login.php"><img class="card-img-top" src="./image/main/page5.PNG" height="300px"  alt="Card image cap"></a>
';
      }
      ?>
    <div class="card-body">
      <h5 class="card-title">Metalargy</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

    </div>
  </div>
  </div>
  <div class="col-sm-12 col-md-6 col-lg-4 me-3">
  <div class="card mb-2 shadow ">
  <?php
      if (isset($_SESSION['total'])) {
        echo '  <a href="./image/main/page6.jpeg"><img class="card-img-top" src="./image/main/page6.jpeg" height="300px"  alt="Card image cap"></a>
        ';
      }
      else{
        echo'  <a href="login.php"><img class="card-img-top" src="./image/main/page6.jpeg" height="300px"  alt="Card image cap"></a>
';
      }
      ?>
    <div class="card-body">
      <h5 class="card-title">Electrical Engineering</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

    </div>
  </div>
  </div>
  <div class="col-sm-12 col-md-6 col-lg-4 me-3">
  <div class="card  shadow ">
  <?php
      if (isset($_SESSION['total'])) {
        echo '  <a href="./image/main/page2.jpeg"><img class="card-img-top" src="./image/main/page2.jpeg" height="300px"  alt="Card image cap"></a>
        ';
      }
      else{
        echo'  <a href="login.php"><img class="card-img-top" src="./image/main/page2.jpeg" height="300px"  alt="Card image cap"></a>
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
  <div class="col-4">
    

    
  </div>
</div>


</div>




