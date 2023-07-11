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
    <title>Televalidasi</title>
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

<div class="row g-3">
  <div class="col-auto">
    <div class="mb-3">
      <label for="uploaddata" class="form-label">Upload Template Data CDB</label>
      <input type="file" class="form-control" id="uploaddata" multiple>
      <br>
      <button type="reset" class="btn btn-danger">Reset</button>
    <button type="button" class="btn btn-success">Simpan</button>
    </div>
  </div>
  <div class="col-auto mt-5">
      <button type="button" class="btn btn-primary">Preview</button>
      <button type="button" class="btn btn-primary">Download Contoh Template</button>
    </div>
</div>

<table class="table table-striped table-hover">
      <thead class="table-danger">
        <tr>
          <th>No. Faktur</th>  
          <th>No. Rangka</th>
          <th>Tgl Cetak</th>
          <th>Tgl Mohon</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Kec.</th>
          <th>Agama</th>
          <th>Hobi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>BB4 /008518/W</td>
          <td>JBK11XPK910068</td>
          <td>01042023</td>
          <td>31032023</td>
          <td>NURLELA</td>
          <td>PANGAKALAN BAYAT RT 003 RW 006</td>
          <td>BAYUNG LENCIR</td>
          <td>Islam</td>
          <td>-</td>
        </tr>
        <tr>
          <td>BB4 /009856/W</td>
          <td>JBK119PK911065</td>
          <td>01042023</td>
          <td>31032023</td>
          <td>DEKA KURNIAWAN</td>
          <td>DUSUN 3 RT 002 RW 003</td>
          <td>SUNGAI LILIN</td>
          <td>Islam</td>          
          <td>-</td>
        </tr>
        <tr>
          <td>BB4 /013787/W</td>
          <td>JBK117PK913722</td>
          <td>01042023</td>
          <td>31032023</td>
          <td>NYIMAS RODIAH</td>
          <td>JL TAQWA MATA MERAH PERUM GRAHA FORTUNA BLOK C NO 16 RT 025 RW 007</td>
          <td>KALIDONI</td>
          <td>Islam</td>          
          <td>Recall 0</td>
        </tr>
        <tr>
          <td>BB4 /028746/W</td>
          <td>JBK111PK921914</td>
          <td>01042023</td>
          <td>31032023</td>
          <td>ENI DARYANTI</td>
          <td>DUSUN I  RT 005 RW 000</td>
          <td>KEDATON PENINJAUAN RAYA</td>
          <td>Islam</td>          
          <td>Recall 0</td>
        </tr>
      </tbody>

    </table>
</div>
<script src="https://localhost/astra2/stopwatch.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
<script src="https://localhost/astra2/js/bootstrap.js"></script>




</body>
</html>
