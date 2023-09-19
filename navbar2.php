<style>
  a:hover{
    background-color: white;
  }
  button:hover.btn{
    background-color: white;
    padding-right:10px;
  }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <div class="container-fluid shadow p-3">
    <a class="navbar-brand h1" href="#"><span style="font-size:40px;color:rgb(252, 89, 189);"><i class="fa-solid fa-book-open-reader"></i></span><span style="color: black;font-size:40px;">Digital</span><span style="color: rgb(224, 25, 148);font-size:40px;">Collage</span>
                        </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll " style="--bs-scroll-height: 100px;">
        <li class="nav-item ms-2">
          <a class="nav-link active" aria-current="page" href="#">  <i class="fa-solid fa-house"style="color:rgb(252, 89, 189);"></i>Home</a>
        </li>
        <li class="nav-item ms-2">
          <a class="nav-link" href="./notes.php"><i class="fa-regular fa-note-sticky"style="color:rgb(252, 89, 189);"></i><span style="margin-left:10px;">Notes</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa-solid fa-book"style="color:rgb(252, 89, 189);"></i><span style="margin-left:10px;">Branch</span>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="./branch.php">Branch</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa-solid fa-book" style="color:rgb(252, 89, 189);"></i><span style="margin-left:10px;">Subject</span>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown ms-2">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa-solid fa-arrow-up-from-bracket"style="color:rgb(252, 89, 189);"></i><span style="margin-left:10px;">Upload</span>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      
      </ul>
      <form class="d-flex ">

      <button class="btn btn-outline-success p-3" type="submit"style="border-radius:10px;border:2px solid gray;"><a href="./login.php"style="text-decoration:none;color:black;">Log Out</a></button>

        
      </form>
    </div>
  </div>
</nav>






