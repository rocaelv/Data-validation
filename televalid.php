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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
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

<div class="container">
  <div class="m-3">

  <div class="row">
  <div class="col">
  <label for="purifikator">Nama Purifikator</label>
  <select class="form-select" aria-label="Default select" id="purifikator">
  <option selected>Nama Purifikator</option>
  <option value="1">Dita</option>
  <option value="2">Afifah</option>
  <option value="3">Yossy</option>
  <option value="4">Nur</option>
</select>
</div>
    
        <div class="col">
            <label for="startDate">Tanggal cetak</label>
            <input id="startDate" class="form-control" type="date" />
            <span id="startDateSelected"></span>
        </div>
        <div class="col">
            <label for="endDate"></label>
            <input id="endDate" class="form-control" type="date" />
            <span id="endDateSelected"></span>
        </div>
        <div class="col">
        <label for="area">Area</label>
        <select class="form-select" aria-label="Default select" id="area">
  <option selected>Nama Area</option>
  <option value="1">Palembang</option>
  <option value="2">Banyuasin</option>
  <option value="3">Lahat</option>
  <option value="4">Lubuk Linggau</option>
  <option value="5">Muara Enim</option>
  <option value="6">Musi Banyuasin</option>
  <option value="7">Musi Rawas</option>
  <option value="8">Ogan Ilir</option>
  <option value="9">Ogan Komering Ilir</option>
  <option value="10">OKU Induk</option>
  <option value="11">OKU Selatan</option>
  <option value="12">OKU Timur</option>
  <option value="13">Pagaralam</option>
  <option value="14">Prabumulih</option>
</select>
</div>
<div class="col">
        <label for="namadealer">Dealer</label>
        <select class="form-select" aria-label="Default select" id="namadealer">
  <option selected>Nama Dealer</option>
  <option value="1">Astra Motor Basuki Rahmat</option>
  <option value="2">Astra Motor Baturaja</option>
  <option value="3">Astra Motor Belitang</option>
  <option value="4">Astra Motor Indralaya</option>
  <option value="5">Astra Motor KM.6</option>
  <option value="6">Astra Motor Lahat</option>
  <option value="7">Astra Motor Muara Enim</option>
  <option value="8">Astra Motor Plaju</option>
  <option value="9">Astra Motor Prabumulih</option>
  <option value="10">Astra Motor Sako</option>
  <option value="11">Astra Motor Simpang Priuk</option>
  <option value="12">Astra Motor Sungai Lilin</option>
  <option value="13">Astra Motor Talang Kelapa</option>
  <option value="14">Astra Motor Tugumulyo</option>
  <option value="15">Astra Motor Veteran</option>
  <option value="16">CV Anugerah Kencana Motor - Babat Toman</option>
  <option value="17">CV Anugerah Kencana Motor - Lubuk Linggau</option>
  <option value="18">CV Anugerah Kencana Motor - Muara Enim</option>
  <option value="19">CV Anugerah Kencana Motor - Palembang</option>
  <option value="20">CV Lestari Motorindo - Belitang</option>
  <option value="21">CV Lestari Motorindo - Muara Enim</option>
  <option value="22">CV Lestari Motorindo - Palembang</option>
  <option value="23">CV Mitra Angkasa Jaya Utama - Palembang</option>
  <option value="24">PT Bintang Mulia Jaya - Lahat</option>
  <option value="25">PT Bintang Mulia Jaya - Palembang</option>
  <option value="26">PT Bintang Mulia Jaya - Sekayu</option>
  <option value="27">PT Daya Anugrah Mandiri - Baturaja</option>
  <option value="28">PT Daya Anugrah Mandiri - Betung</option>
  <option value="29">PT Daya Anugrah Mandiri - Muara Dua</option>
  <option value="30">PT Daya Anugrah Mandiri - Palembang</option>
  <option value="31">PT Daya Anugrah Mandiri - Prabumulih</option>
  <option value="32">PT Dinamik Putra Perkasa - Palembang</option>
  <option value="33">PT Dinamik Putra Perkasa - Sekayu</option>
  <option value="34">PT Gratia Plena Mas Motor - Lahat</option>
  <option value="35">PT Gratia Plena Mas Motor - Muara Enim</option>
  <option value="36">PT Gratia Plena Mas Motor - Palembang</option>
  <option value="37">PT Gratia Plena Mas Motor - Tugumulyo</option>
  <option value="38">PT Mitra Pinasthika Mustika - Prabumulih</option>
  <option value="39">PT Nusantara Surya Sakti  - Martapura</option>
  <option value="40">PT Nusantara Surya Sakti  - Prabumulih</option>
  <option value="41">PT Nusantara Surya Sakti - Pagaralam</option>
  <option value="42">PT Nusantara Surya Sakti - Palembang</option>
  <option value="43">PT Nusantara Surya Sakti - Sekayu</option>
  <option value="44">PT Patria Anugrah Sentosa - Betung</option>
  <option value="45">PT Patria Anugrah Sentosa - Palembang</option>
  <option value="46">PT Sumber Purnama Sakti - Palembang</option>
  <option value="47">PT Sumber Purnama Sakti - Sungai Lilin</option>
  <option value="48">PT Tunas Dwipa Matra - Kayuagung</option>
  <option value="49">PT Tunas Dwipa Matra - Martapura</option>
  <option value="50">PT Tunas Dwipa Matra - Palembang</option>
  <option value="51">PT Tunas Dwipa Matra - Pangkalan Balai</option>
  <option value="52">PT Wahanaartha Ritelindo - Palembang</option>
  <option value="53">Safari Motor - Baturaja</option>
  <option value="54">Utama Motor - Cabang</option>
  <option value="55">Utama Motor - Megang Sakti</option>
  <option value="56">Utama Motor - Pusat</option>

</select>
</div>
<div class="col-sm-3">
<a role="button" class="btn btn-success" href="report_call.php">Report hasil call</a>
<a role="button" class="btn btn-success" href="report_valid.php">Report hasil validasi</a>
            <a role="button" href="upload.php" class="btn btn-danger">Upload data baru</a>
    </div>
    </div>
<br>

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
          <th>Status Call</th>
          <th>Keterangan</th>
          <th class="table-primary">Action</th>
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
          <td>Belum Call</td>
          <td>-</td>
          <td>
            <a role="button" class="btn btn-success" href="call_verif.php">Detail</a>
            <button type="button" class="btn btn-danger">Delete</button>
          </td>
        </tr>
        <tr>
          <td>BB4 /009856/W</td>
          <td>JBK119PK911065</td>
          <td>01042023</td>
          <td>31032023</td>
          <td>DEKA KURNIAWAN</td>
          <td>DUSUN 3 RT 002 RW 003</td>
          <td>SUNGAI LILIN</td>
          <td>Bersedia Validasi</td>          
          <td>-</td>
          <td>
            <a role="button" class="btn btn-success" href="call_verif.php">Detail</a>
            <button type="button" class="btn btn-danger">Delete</button>
          </td>
        </tr>
        <tr>
          <td>BB4 /013787/W</td>
          <td>JBK117PK913722</td>
          <td>01042023</td>
          <td>31032023</td>
          <td>NYIMAS RODIAH</td>
          <td>JL TAQWA MATA MERAH PERUM GRAHA FORTUNA BLOK C NO 16 RT 025 RW 007</td>
          <td>KALIDONI</td>
          <td>Telepon Dimatikan</td>          
          <td>Recall 0</td>
          <td>
            <a role="button" class="btn btn-success" href="call_verif.php">Detail</a>
            <button type="button" class="btn btn-danger">Delete</button>
          </td>
        </tr>
        <tr>
          <td>BB4 /028746/W</td>
          <td>JBK111PK921914</td>
          <td>01042023</td>
          <td>31032023</td>
          <td>ENI DARYANTI</td>
          <td>DUSUN I  RT 005 RW 000</td>
          <td>KEDATON PENINJAUAN RAYA</td>
          <td>Mailbox</td>          
          <td>Recall 0</td>
          <td>
            <a role="button" class="btn btn-success" href="call_verif.php">Detail</a>
            <input type="reset" class="btn btn-danger">Delete</input>
          </td>
        </tr>
      </tbody>

    </table>
  </div>



</div>
<script src="https://localhost/astra2/stopwatch.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
<script src="https://localhost/astra2/js/bootstrap.js"></script>




</body>
</html>