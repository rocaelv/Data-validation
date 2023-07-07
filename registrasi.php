<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman Registrasi</title>

    <link rel="stylesheet" href="chigiri/registrasi.css">
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
                            <h1 class="card-title text-center mb-5 fw-light fs-5">Registrasi</h1>
                            <form action="proses_register.php" method="post">

                                <div class="form-floating mb-3">
                                    <input type="text" name="nama" class="form-control" id="floatingInput" value="<?php echo @$_SESSION['nama']?>" placeholder="Nama Lengkap" autocomplete="off">
                                    <label for="floatingInput"></label>
                                </div>
                                <br>
                                <div class="form-floating mb-3">
                                    <input type="text" name="username" class="form-control" id="floatingInput" value="<?php echo @$_SESSION['username']?>" placeholder="Username" autocomplete="off">
                                    <label for="floatingInput"></label>
                                </div>
                                <br>
                                <div class="form-floating mb-3">
                                    <input type="password" name="password" class="form-control" id="floatingPassword" value="<?php echo @$_SESSION['password']?>" placeholder="Password" autocomplete="off">
                                    <label for="floatingPassword"></label>
                                </div>
                                <br>
                                <div class="form-floating mb-3">
                                    <input type="password" name="password2" class="form-control" id="floatingPassword2" value="<?php echo @$_SESSION['password2']?>" placeholder="Konfirmasi Password" autocomplete="off">
                                </div>
                                <br>
                                <button class="btn btn-primary" name="register" type="submit">Registrasi</button>
                                <br>
                                <?php 
                                if( isset($_SESSION['eror'])){
                                ?>
                                <div class="alert alert-warning" role='alert'>
                                    <?php echo $_SESSION['error'] ?>
                                </div>
                                <?php } ?>
                                <?php
                                if(isset($_SESSION['message'])){
                                    ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo $_SESSION['message'] ?>
                                    </div>
                                    <?php } ?>
                            </form>
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
<?php
session_destroy();
?>

</html>
