<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Halaman Login</title>

  <link rel="stylesheet" href="chigiri/login.css">
</head>

<body>

<div class="container">
<center>
    <div class="card">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <div class="card border-0 shadow rounded-3 my-5">
        <div class="card-body p-4 p-sm-5">
<br>
		<h1 class="card-title text-center mb-5 fw-light fs-5">Login</h1>
    <form action="proses_login.php" method="POST" enctype="multipart/form-data">
      <div class="form-floating mb-3">
          <input type="text" name='username' class="form-control" id="floatingInput" placeholder="Username">
          <label for="floatingInput"></label>
      </div>
      <br>
      <div class="form-floating mb-3">
          <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword"></label>
        </div>
        
        <p class="link"  style="color:white;"><a href="reset_pass.php" style="color:white;"> Lupa kata sandi?</a></p>
        
		  <button class="btn btn-primary" type="submit">Masuk</button>
      <br>
      <br>
      	<!-- Menampung jika ada pesan -->
	<?php if(isset($_GET['pesan'])) {  ?>
   <button class="btn btn-secondary" type="button"  ><?php echo $_GET['pesan']; ?> </button> 
    <?php } ?>	
	  </form>
  </div>
  </div>
  </div>
  </div>
  </div> 
  </div>
  </div>
	</center>
          </div> 


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>