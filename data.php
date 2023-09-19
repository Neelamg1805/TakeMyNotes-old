
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Tables in css</title>
    <style>
       
        table{
            border-collapse: collapse;
            width: 95%;
            border: 2px solid black;
            margin: 30px;
            margin-right: 20px;

        }
        th{
            height: 60px;
            width: 90px;
            background-color: purple;
            color: white;
        }
        td ,th{
            text-align: center;
            border: 2px solid black;
        }

 
 
    </style>
</head>
<body>
   


<table>
  <tr>
  <th>Roll No</th>

    <th>Firstname</th>
    <th>Lastname</th>
    <th>mobile</th>

    <th>Email</th>
    <th>password</th>
    <th>branch</th>
    <th>semester</th>

  </tr>
  <?php

include "connection.php";
$selectquery = "select * from users";

 $query = mysqli_query($conn,$selectquery);

//  $num = mysqli_num_rows($query);

//  echo "$num";

while ( $res = mysqli_fetch_array($query)){
 ?>
  <tr>
  <td><?php echo $res['roll_no']?></td>
    <td><?php echo $res['first_name']?></td>
    <td><?php echo $res['last_name']?></td>
    <td><?php echo $res['mobile']?></td>

    <td><span class="email-style"><?php echo $res['email']?></span></td>
    <td><?php echo $res['password']?></td>
    <td><?php echo $res['branch']?></td>
    <td><?php echo $res['semester']?></td>
  


  </tr>
<?php
}
?>
 
 
</table>

</body>
</html>