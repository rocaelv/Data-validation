<?php
session_start();

if($_SESSION['password']=='')
{
    if((time() - $_SESSION['login_time']) > 900)
    {
      header("location: pargoy.php");
    }
    else
    {
      header("location: login.php");    
    }
  }
include 'config/koneksi.php';
 ?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Home </title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar bg-body-tertiary">
    
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand" href="localhost/astra2/index.php"> 
    <img src="img/brand.png" alt="logo brand"  height="50"> </a>
    
    <a class="nav-item mr-3 nav-link p-3 text-danger" href="pargoy.php">Logout</a>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="container">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    

    
    <div class="offcanvas-body">
      
      <div class="text-center">
      <img src="img/brand.png" alt="User" width="150" height="150" class=" align-items-center rounded-circle shadow">
    </div>
     

        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 mt-4">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="upload.php">Upload</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dataup.php">Data Uploaded</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="result.php">Result</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user.php">User</a>
          </li>
        </ul>
          </div>

          </div>
          </div>  
    </div>
  </div>
</nav>
<div class="container  mt-4">

<div class="card border-light mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">1</h5>
    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas, similique.</p>
  </div>
  <br>
  <div class="card border-light mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">2</h5>
    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque, magni.</p>
  </div>
  <br>
  <div class="card border-light mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">3</h5>
    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil, corrupti.</p>
  </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
<script src="https://localhost/astra2/js/bootstrap.js"></script>
</body>
</html>