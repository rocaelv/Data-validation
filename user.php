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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="css/bootstrap.css">

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

<div class="container mt-4">
    <h3>Edit User</h3>
    
    <div class="user">
	<br/>
		<form action="proses_register.php" method="post" onSubmit="return validasi()">
      
      <div>
        <select class="form-select" name="user_type" id="floatingInput" value="<?php echo @$_SESSION['user_type']?>">
        <option selected>Level</option>
        <option value="1">ADM</option>
        <option value="2">TLV</option>
        <option value="3">HC3</option>
        <option value="4">DLR</option>
      </select>
      </div>
      <br>
      <div class="form-floating mb-3">
        <input type="text" name="nama" class="form-control" id="floatingInput" value="<?php echo @$_SESSION['nama']?>" placeholder="Nama Lengkap" autocomplete="off">
        <label for="floatingInput">Nama Lengkap</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" name="email" class="form-control" id="floatingInput" value="<?php echo @$_SESSION['email']?>" placeholder="E-mail" autocomplete="off">
        <label for="floatingInput">E-mail</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" name="username" class="form-control" id="floatingInput" value="<?php echo @$_SESSION['username']?>" placeholder="Username" autocomplete="off">
        <label for="floatingInput">Username</label>
      </div>
      
       <div class="form-floating mb-3">
        <input type="password" name="password" class="form-control" id="floatingPassword" value="<?php echo @$_SESSION['password']?>" placeholder="Password" autocomplete="off">
        <label for="floatingPassword">Password</label>
      </div>
			</div>			
      <div class="form-floating mb-3">
        <input type="password" name="password2" class="form-control" id="floatingPassword2" value="<?php echo @$_SESSION['password2']?>" placeholder="Konfirmasi Password" autocomplete="off">
        <label for="floatingPassword"> Konfirmasi Password </label>
        <br>
			<div>
        <button class="btn btn-danger" type="reset">Reset</button>
        <button class="btn btn-success" type="submit">Simpan</button>
			</div>
      <br>
      <?php
      if( isset($_SESSION['eror'])){ ?>
      <div class="alert alert-warning" role="alert">
        <?php echo $_SESSION['eror'] ?>
      </div> <?php } ?>
      <?php
      if(isset($_SESSION['message'])){ ?>
      <div class="alert alert-success" role="alert">
        <?php echo $_SESSION['message'] ?>
      </div> <?php } ?>
		</form>
	</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
<script src="https://localhost/astra2/js/bootstrap.js"></script>
</body>
</html>
