<?php

session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        body {
            
            height: 100%;
            /* background-color: rgb(223, 217, 228); */
            overflow: scroll;

        }

        .main {
            height: 900px;
            /* height: 100%; */
            width: 700px;
            /* border: 3px solid black; */

            /* justify-content: center; */
            margin: auto;


            margin-bottom: 100px;

            border-radius: 10px;
            
            
        }
    </style>
</head>

<body>

    <div style=" text-align: left; ">
        <h1 style="font-size: 40px; text-transform: capitalize; color:black;">digital<span style="color: rgb(224, 25, 148);">Collage</span></h1>

        </p>
    </div>
    <div class="row justify-content-center m-5 bg-light shadow-lg bg-white " style="height:800px;">
        <h3 style="text-align: center;font-size: 40px; text-transform: capitalize; padding-top:20px">Sign In</h3>

        <div class=" mt-1  col-sm-12 col-md-10 col-lg-6 shadow-lg h-75">
            <form action="#" class="main" method="POST">
                <div class="row justify-content-center m-4 ">
                    <div class=" mb-4 col-sm-12 col-md-12 col-lg-6">
                        <label for="" class="form-label">First Name</label>
                        <input type="text" class="form-control  border border-dark " placeholder="First name" name="fname" required>
                    </div>
                    <div class="col-6 mb-4 col-sm-12 col-md-12 col-lg-6">
                        <label for="" class="form-label">Last Name</label>

                        <input type="text" class="form-control border border-dark" placeholder="Last name" name="lname" required>
                    </div>
                </div>
                <div class="row justify-content-center m-4 ">
                    <div class="col-sm-12 col-md-12 col-lg-6 mb-4 ">
                        <label for="" class="form-label">Branch</label>
                        <input type="text" class="form-control  border border-dark " placeholder="Branch" name="branch" required>
                    </div>
                    <div class="col-sm-12 col-md-11 col-lg-6 mb-4 ">
                        <label for="" class="form-label">semester</label>

                        <input type="text" class="form-control border border-dark" placeholder="Semester" name="semester" required>
                    </div>

                </div>
                <div class="row justify-content-center m-4 ">
                    <div class="col-sm-12 col-md-11 col-lg-6 mb-4 ">
                        <label for="" class="form-label">Roll No</label>
                        <input type="text" class="form-control  border border-dark " placeholder="Enter Roll no." name="roll_no" required>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 mb-4 ">
                        <label for="" class="form-label">mobile</label>

                        <input type="text" class="form-control border border-dark" placeholder="Enter Your Phone No" name="mobile" required>
                    </div>
                </div>
                <div class="row justify-content-center m-4">
                    <div class="col-sm-12 col-md-12 col-lg-6 mb-4 ">
                        <label for="" class="form-label">E-mail</label>

                        <input type="text" class="form-control border border-dark" placeholder="Enter your E-mail" name="email" required>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 mb-4">
                        <label class="form-label">Password</label>
                        <input type="text" class="form-control border border-dark" placeholder="Enter your Password" name="password" required>
                    </div>


                    <br>

                    <div class="col-sm-12 col-md-12 col-lg-6 ms-4 mb-4 mt-4 w-50 justify-content-center ">
                        <button type="submit" class="btn btn-warning w-100 rounded-pill text-light border-0 " style="background-color: red; background-image: linear-gradient(rgb(234, 75, 157), rgb(165, 67, 187));" name="submit">Sign in</button>

                    </div>
                    <!-- <p style="text-align: center;">or</p>
        <div class="col-6 ms-4 mb-5 w-50 justify-content-center ">
            <button type="submit" class="btn btn-primary w-100 rounded-pill ">Sign in with Google</button>
          
        </div> -->
                    <!-- <div class="col-6 ms-4 w-50 justify-content-center">
            <button type="submit" class="btn btn-primary w-100 rounded-pill ">Sign in with Facebook</button>
          
        </div> -->
        
        <p class="d-flex justify-content-center">Already  have an account? <a href="./login.php" class="link-info text-primary">Login</a></p>

                </div>
               
            </form>
        </div>
        <div class=" col-sm-12 col-md-12 col-lg-6">

            <img src="./image/main/l.png" alt="" height="600px" width="700px">

        </div>
    </div>
</body>

</html>
<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    $first_name   = $_POST['fname'];
    $last_name    = $_POST['lname'];
    $branch       = $_POST['branch'];
    $semester     = $_POST['semester'];
    $roll_no      = $_POST['roll_no'];
    $mobile       = $_POST['mobile'];
    $email        = $_POST['email'];
    $password     = $_POST['password'];
    $insertquery  = "INSERT INTO users (first_name, last_name, branch, semester, roll_no, mobile, email, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt         = mysqli_prepare($conn, $insertquery);

    mysqli_stmt_bind_param($stmt, "ssssssss", $first_name, $last_name, $branch, $semester, $roll_no, $mobile, $email, $password);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        $_SESSION['fname'] = $first_name;
        $_SESSION['lname'] = $last_name;
        $_SESSION['branch'] = $branch;
        $_SESSION['semester'] =  $semester;
        $_SESSION['rollno'] = $roll_no;
        $_SESSION['mobile'] =$mobile;
        // $_SESSION['email'] = $email ;
        // $_SESSION['password'] = $password;
        
        echo "Data is inserted into the database";
      
} else {
        echo "Error: " . mysqli_error($conn); // Display the actual error message
    }
    
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
