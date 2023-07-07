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
    <link rel="stylesheet" href="index.c. ss">
    <link rel="stylesheet" href="navbar.css">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar bg-body-tertiary">
    
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand" href="index.php"> 
    <img src="img/brand.png" alt="logo brand"  height="50"> </a>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="container">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>


    <div class="offcanvas-body">
        <ul class="navbar-nav mt-4">
          <li class="btn btn-success bg-success-subtle btn-sm">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <br>
          <li class="btn btn-success bg-success-subtle btn-sm">
            <a class="nav-link" href="televalid.php">Televalidasi / Call</a>
          </li>
          <br>
          <li class="btn btn-success bg-success-subtle btn-sm">
            <a class="nav-link" href="report_call.php">Report Hasil Call</a>
          </li>
          <br>
          <li class="btn btn-success bg-success-subtle btn-sm">
            <a class="nav-link" href="report_valid.php">Report Hasil Validasi</a>
          </li>
          <br>
          <li class="btn btn-success bg-success-subtle btn-sm">
            <a class="nav-link" href="user.php">Edit User</a>
          </li>
        </ul>
<br>
        <ul class="navbar-nav mt-3 mx-auto">
          <li class="btn btn-primary bg-primary-subtle btn-sm">
            <a class="nav-link" href="setting.php">Setting Akun</a>
          </li>
          <br>
         
          <li class="btn btn-danger bg-danger-subtle btn-sm">
            <a class="nav-link" href="pargoy.php">Logout</a>
          </li>
        </ul>
          </div>
          </div>
          </div>  
    </div>
  </div>
</nav>

<div class="container  mt-4">
<div id="content">
    



</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
<script src="https://localhost/astra2/js/bootstrap.js"></script>
</body>
</html>