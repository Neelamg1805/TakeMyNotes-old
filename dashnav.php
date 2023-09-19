<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container-fluid shadow p-3">
        <a class="navbar-brand h1" href="#"><span style="font-size:40px;color:rgb(252, 89, 189);"><i class="fa-solid fa-book-open-reader"></i></span><span style="color: black;font-size:40px;">Digital</span><span style="color: rgb(224, 25, 148);font-size:40px;">Collage</span></a>

        <form class="d-flex ">

    <?php

           if (isset($_SESSION['total'])) {
         
           echo'<button class="btn btn-outline-success p-3" type="submit" style="border-radius:10px;border:2px solid gray;"><a href="./logout.php" style="text-decoration:none;color:black;">Log Out</a></button>';

        }
    ?>
            <button class="btn btn-outline-success p-3" type="submit" style="border-radius:10px;border:2px solid gray;"><a href="./logout.php" style="text-decoration:none;color:black;">Log Out</a></button>
        </form>
    </div>
    
</nav>


<div class="container ms-5 w-100">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-white border-end ">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">


                <ul class="nav nav-pills flex-column mt-5 ms-5 mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">

                    <li>
                        <a href="./dashboard.php" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Profile</span> </a>


                    </li>
                    <li>
                        <a href="./upload.php" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Uploads</span></a>
                    </li>


                </ul>
                <hr>
            </div>
        </div>