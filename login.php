<?php
session_start();
include 'connection.php';
// print_r($_SERVER);
// print_r($_SERVER["HTTP_REFERER"]);

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "select * from users where email ='$email' && password = '$password' ";
  $data = mysqli_query($conn, $query);
  
  $total = mysqli_num_rows($data);



  if ($total == 1) {
   
    $_SESSION['email'] = $email ;
    $_SESSION['password'] = $password;
    $_SESSION['total'] =  $total;



print_r(  $_SESSION['total'] );
    print_r($_SESSION['user'] = $email);


    // Use double quotes to correctly interpolate the variable

    $referer = isset($_SERVER["HTTP_REFERER"]) ? $_SERVER['HTTP_REFERER'] : 'index.php'; // Default to a safe URL
   
    header("location: home.php");

exit; // Terminate the script after the redirect
} else {
    echo "<script> alert('login failed')</script>";
}
}






?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
  #gradient-custom-2 {
/* fallback for old browsers */
background: #fccb90;


/* background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593); */

background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
height: 650px;
width: 1250px;
justify-content: center;
margin-left: 30px;

}
</style>



</head>

<body>

  <div style=" text-align: left; ">
    <!-- <h1 style="font-size: 40px; text-transform: capitalize; color:black;">digital<span style="background-image: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
">Collage</span></h1> -->

    </p>
  </div>
  <section class="">
    <div class="px-4 py-5 px-md-5 text-center text-lg-start  ">
      <div class="container ">
      
      <div class="row gx-lg-5 align-items-center "id="gradient-custom-2">
        <h1 class="text-center text-white mt-5">
       Login</h1>  
          <div class=" col-sm-6 col-md-4 col-lg-12 mb-5 mb-lg-0 ">
<!-- 
<div class="gradient-custom-2">

</div> -->
            <!-- <img src="./image/main/l.png" class="" height="600px" width="600px" style="margin-right:300px;"> -->

          </div>

          <div class="col-lg-6 mb-5 mb-lg-0 pb-5">
            <div class="card border-0 ">
              <div class="card-body py-5 px-md-5 shadow-lg ">
                <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">

                  <div class="form-outline mb-4">
                    <input type="email" id="email" name="email" class="form-control" style="border-radius:20px;"value=" ">
                    <label class="form-label" for="form3Example3">Email address</label><span id="mgs"></span>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="password" id="pass" name="password" class="form-control" style="border-radius:20px;">
                    <label class="form-label" for="form3Example4">Password</label>
                  </div>
                  <button name="submit" type="submit" class="btn text-light btn-block mb-4 justify-content-center" style="background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);">

                    Login
                  </button>
                  <p class="small mb-5 pb-lg-2 text-center "><a class="text-primary text-decoration-none " href="#!">Forgot password?</a></p>
                  <p class="text-center">Don't have an account? <a href="./form.php" class="link-info text-primary  ">Sign Up</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>



 

     
  </script>

</body>

</html>