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
            background: #eee;


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



    <section class="">
        <div class="px-4 py-5 px-md-5 text-center text-lg-start  ">
            <div class="container ">

                <div class="row gx-lg-5 align-items-center " id="gradient-custom-2">
                    <h1 class="text-center text-dark mt-5">Upload</h1>
            <div class="col-lg-6 mb-5 mb-lg-0 pb-5">
                        <div class="card border-0 ">
                            <div class="card-body py-5 px-md-5 shadow-lg ">
                                <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">

                                    <div class="input-group mb-3">
                                        <select class="custom-select" id="inputGroupSelect02">
                                            <option selected>Subject...</option>
                                            <option value="1">Python</option>
                                            <option value="2">C Programming</option>
                                            <option value="3">C++</option>
                                        </select>
                                        <div class="input-group-append">
                                            <label class="input-group-text" for="inputGroupSelect02">Options</label>
                                        </div>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="pass" name="password" class="form-control" style="border-radius:20px;">
                                        <label class="form-label" for="form3Example4">Topic</label>
                                    </div>
                                    <div class="row">
                                        <div class="input-group mb-3 col-sm-6" style="border:1px solid gray;border-radius:30px;">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input pt-2 pb-2 border border-0 outline-0 " id="inputGroupFile02">
                                                <!-- <label class="custom-file-label" for="inputGroupFile02">Choose file</label> -->
                                            </div>
                                         
                                            
                                        </div>
                                        <label class="form-label" for="form3Example4">Upload Notes</label>

                                    </div>
                                    <div class="row">
                                        <div class="input-group mb-3 col-sm-6" style="border:1px solid gray;border-radius:30px;">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input pt-2 pb-2 border border-0 outline-0 placeholder-Id Proof" id="inputGroupFile02">
                                            </div>

                                         
                                            
                                        </div>
                                        <label class="form-label" for="form3Example4">Upload your Id Proof</label>

                                    </div>
                                    <button name="submit" type="submit" class="btn text-dark btn-block mb-4 justify-content-center" style="background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);">

                                        Submit
                                    </button>


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