<?php
session_start();

echo "
<nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
<a class='navbar-brand' href='#'>CodeMe</a>
<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
  <span class='navbar-toggler-icon'></span>
</button>

<div class='collapse navbar-collapse' id='navbarSupportedContent'>
  <ul class='navbar-nav mr-auto'>
    <li class='nav-item active'>
      <a class='nav-link' href='index.php'>Home <span class='sr-only'>(current)</span></a>
    </li>
    <li class='nav-item'>
      <a class='nav-link' href='#'>Link</a>
    </li>
    <li class='nav-item dropdown'>
      <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
        Dropdown
      </a>
      <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
        <a class='dropdown-item' href='#'>Action</a>
        <a class='dropdown-item' href='#'>Another action</a>
        <div class='dropdown-divider'></div>
        <a class='dropdown-item' href='#'>Something else here</a>
      </div>
    </li>
    <li class='nav-item'>
      <a class='nav-link disabled' href='#' tabindex='-1' aria-disabled='true'>Disabled</a>
    </li>
  </ul>
  <div class='row mx-2'>";
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true) {
      echo "  <form class='form-inline my-2 my-lg-0'>
      <input class='form-control mr-sm-2' type='search' placeholder='Search' aria-label='Search'>
      <button class='btn btn-outline-success my-2 my-sm-0' type='submit'>Search</button>
     <p class='text-light my-0 mx-2'> Welcome ".$_SESSION['useremail']."</p>
     <button class='btn btn-outline-success my-2 my-sm-0 ml-5' ><a href='logout.php'>Logout</a></button>
    </form>";
  }
  else {
    echo "<form class='form-inline my-2 my-lg-0'>
    <input class='form-control mr-sm-2' type='search' placeholder='Search' aria-label='Search'>
    <button class='btn btn-outline-success my-2 my-sm-0' type='submit'>Search</button>
  <button class='btn btn-outline-success my-2 my-sm-0 ml-5' ><a href='login.php'>Login</a></button>
  <button class='btn btn-outline-success my-2 my-sm-0 mx-2' ><a href='signup.php'>Sign Up</a></button>
  </form>";
  }
 
 
  echo "</div>
</div>
</nav>";


  if (isset($_GET['signupsuccess'])&& $_GET['signupsuccess']=="true") {
    echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
    <strong>Success</strong> You are signed in.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  }
  elseif (isset($_GET['signupsuccess']) && isset($_GET['signupsuccess'])=='false' ) {
    echo "<div class='alert alert-danger alert-dismissible fade show my-0' role='alert'>
    <strong>Failed </strong>".$_GET['error']."
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>";
  } 

  if (isset($_GET['loginsuccess'])&& $_GET['loginsuccess']=="true") {
    echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
    <strong>Success</strong> You are logged in.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  }
  elseif (isset($_GET['loginsuccess']) && isset($_GET['loginsuccess'])=='user_id_not_available' ) {
    echo "<div class='alert alert-danger alert-dismissible fade show my-0' role='alert'>
    <strong>Failed </strong>".$_GET['error']."
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>";
  } 

?>