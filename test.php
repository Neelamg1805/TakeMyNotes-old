<!-- <?php
$requestUri = $_SERVER['REQUEST_URI'];
print_r($requestUri);
$uriArray = explode('/', $requestUri);
print_r($uriArray);
if ($uriArray[2] == 'test.php') {
    echo "test completed";
}else{
    echo "error";
}
?> -->
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
    $_SESSION['user'] = $email;


    // Use double quotes to correctly interpolate the variable

    $referer = isset($_SERVER["HTTP_REFERER"]) ? $_SERVER['HTTP_REFERER'] : 'index.php'; // Default to a safe URL
   
    header("location: home.php");

exit; // Terminate the script after the redirect
} else {
    echo "<script> alert('login failed')</script>";
}
}
?>
