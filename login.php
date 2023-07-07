<?php include 'functions.php';
 header("Refresh:30; url=login.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Halaman Login</title>

  <link rel="stylesheet" href="login.css">
</head>

<body>

<div class="container">
<center>
    <div class="card">
  <div class="row">
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

      <select class="form-select" name="" id="">
        <option selected>Level</option>
        <option value="1">ADM</option>
        <option value="2">TLV</option>
        <option value="3">HC3</option>
        <option value="4">DLR</option>
      </select>
      <br>
      
      <br>
      <a class="btn btn-primary" href="reset_pass.php" role="button">Lupa Password</a>
        
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
