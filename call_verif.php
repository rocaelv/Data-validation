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

<div class="container">
  <div class="row">
    <div class="col">
      <label for="startDate">Tanggal cetak</label>
      <input id="startDate" class="form-control" type="date" />
      <span id="startDateSelected"></span>
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
    <div class="col">
      <label for="tipemtr">Tipe Motor</label>
      <select class="form-select" aria-label="Default select" id="tipemtr">
        <option selected>Tipe Motor</option>
        <option value="1">ABS. REVO AT</option>
        <option value="2">ADV 150 ABS</option>
        <option value="3">ADV 150 CBS</option>
        <option value="4">ALL NEW CB 150 R STREETFIRE</option>
        <option value="5">ALL NEW CBR 150 R</option>
        <option value="6">ALL NEW CBR 150R</option>
        <option value="7">ALL NEW SCOOPY ESP</option>
        <option value="8">ALL NEW VARIO TECHNO 125 CBS</option>
        <option value="9">ALL NEW VARIO TECHNO 125 CBS ISS</option>
        <option value="10">BEAT</option>
        <option value="11">BEAT CBS FI MMC</option>
        <option value="12">BEAT CW FI MMC</option>
        <option value="13">BEAT POP CBS ESP</option>
        <option value="14">BEAT POP CBS ISS ESP</option>
        <option value="15">BEAT POP CW ESP</option>
        <option value="16">BEAT SPOKE FI</option>
        <option value="17">BEAT SPORTY CBS ESP</option> 
        <option value="18">BEAT SPORTY CBS ISS ESP</option>
        <option value="19">BEAT SPORTY CW ESP</option>
        <option value="20">BEAT STREET</option>
        <option value="21">BLADE </option>
        <option value="22">BLADE R 125 FI</option>
        <option value="23">BLADE S</option>
        <option value="24">BLADE S FI</option>
        <option value="25">CB 150 VERZA CW</option>
        <option value="26">CB 150R STREET FIRE</option>
        <option value="27">CB150R FIRE</option>
        <option value="28">CB150R STREET FIRE</option>
        <option value="29">CBR 150 RACING</option>
        <option value="30">CBR 150R ABS</option>
        <option value="31">CBR 250 RR</option>
        <option value="32">CBR 250 RR ABS</option>
        <option value="33">CBR 250R STD</option>
        <option value="34">CBR150R</option>
        <option value="35">CRF 150 L</option>
        <option value="36">CRF 250</option>
        <option value="37">CS 1</option>
        <option value="38">FORZA</option>
        <option value="39">GENIO CBS</option>
        <option value="40">GENIO CBS ISS</option>
        <option value="41">MEGAPRO CW FI</option>
        <option value="42">NEW BEAT CBS </option>
        <option value="43">NEW BEAT CBS FI</option>
        <option value="44">NEW BEAT CBS ISS</option>
        <option value="45">NEW BEAT CW</option>
        <option value="46">NEW BEAT CW FI</option>
        <option value="47">NEW BEAT SPOKE FI</option>
        <option value="48">NEW BLADE 125</option>
        <option value="49">NEW BLADE STD</option>
        <option value="50">NEW CB 150R SPECIAL EDITION</option>
        <option value="51">NEW MEGAPRO CW</option>
        <option value="52">NEW MEGAPRO STD</option>
        <option value="53">NEW PCX 150</option>
        <option value="54">NEW REVO CW</option>
        <option value="55">NEW REVO SPOKE</option>
        <option value="56">NEW SCOOPY FI CLASSIC</option>
        <option value="57">NEW SCOOPY FI STYLISH</option>
        <option value="58">NEW SONIC 150 R</option>
        <option value="59">NEW SUPRA GTR 150</option>
        <option value="60">NEW SUPRA X 125 FI CW</option>
        <option value="61">NEW SUPRA X 125 FI SPOKE</option>
        <option value="62">NEW VARIO 110 CBS ESP ISS</option>
        <option value="63">NEW VARIO 125 CBS ISS</option>
        <option value="64">NEW VARIO 150</option>
        <option value="65">NEW VARIO 150 - EXCLUSIVE</option>
        <option value="66">NEW VARIO CBS PGM FI</option>
        <option value="67">NEW VARIO FI</option>
        <option value="68">NEW VARIO TECHNO PGM FI</option>
        <option value="69">NEW VARIO TEHNO 125 CBS</option>
        <option value="70">P C X 150</option>
        <option value="71">PCX</option>
        <option value="72">PCX 150 ABS</option>
        <option value="73">PCX 150 CBS</option>
        <option value="74">PCX HYBRID</option>
        <option value="75">REVO CW</option>
        <option value="76">REVO CW FI</option>
        <option value="77">REVO FIT</option>
        <option value="78">REVO FIT FI</option>
        <option value="79">REVO SP</option>
        <option value="80">REVO SPOKE FI</option>
        <option value="81">SCOOPY</option>
        <option value="82">SPACY</option>
        <option value="83">SPACY INJECTION</option>
        <option value="84">SUPER CUB</option>
        <option value="85">SUPRA 150 GTR</option>
        <option value="86">SUPRA X 125 CW</option>
        <option value="87">SUPRA X 125 FI CW</option>
        <option value="88">SUPRA X 125 PGM-FI</option>
        <option value="89">SUPRA X 125 STD</option>
        <option value="90">SUPRA X HELM IN INJECTION</option>
        <option value="91">TIGER</option>
        <option value="92">TIGER SINGLE HL</option>
        <option value="93">VARIO 110 CBS ESP</option>
        <option value="94">VARIO 125 CBS IDLING STOP</option>
        <option value="95">VARIO CW</option>
        <option value="96">VARIO TECHNO</option>
        <option value="97">VARIO TECHNO 125 CBS</option>
        <option value="98">VARIO TECHNO 125 CBS ISS</option>
        <option value="99">VERZA 150 CAST WHEEL</option>
        <option value="100">VERZA 150 SPOKE WHEEL</option>
        <option value="101">BEAT CBS Sporty</option>
        <option value="102">BEAT STREET CBS</option>
        <option value="103">BEAT CBS ISS Sporty</option>
        <option value="104">SH 150</option>
        <option value="105">CBR 250R</option>
        <option value="106">NEW SCOOPY</option>
        <option value="107">CBR 250R</option>
        <option value="108">SUPRA X 125</option>
        <option value="109">BEAT ESP</option>
        <option value="110">BEAT STREET</option>
        <option value="112">BEAT ESP</option>
        <option value="113">VARIO 125</option>
        <option value="114">GENIO</option>
        <option value="115">CB150 VERZA</option>
        <option value="116">CRF150L</option>
        <option value="117">NEW PCX 150 CBS</option>
        <option value="118">REVO</option>
        <option value="119">SCOOPY</option>
        <option value="120">SONIC</option>
        <option value="121">CB150 VERZA</option>
        <option value="122">CBR150R STD</option>
        <option value="123">CB150R STREETFIRE</option>
        <option value="124">NEW PCX 150</option>
        <option value="125">VARIO 150</option>
        <option value="126">ADV150</option>
        <option value="127">CBR 250R</option>
        <option value="128">SUPRA X 125</option>
        <option value="129">BEAT POP CBS ISS ESP</option>
        <option value="130">SUPRA SERIES</option>
        <option value="131">CB150R</option>
        <option value="132">CB150R STREETFIRE</option>
        <option value="133">ADV150</option>
        <option value="134">CBR 250RR</option>
        <option value="135">BEAT POP CBS ESP</option>
        <option value="136">SUPRA GTR150</option>
        <option value="137">BEAT POP CW ESP</option>
        <option value="138">PCX HYBRID</option>
        <option value="139">CBR 150R</option>
        <option value="140">CBR 150R ABS</option>
        <option value="141">BEAT SPORTY CBS</option>
        <option value="142">BEAT STREET</option>
        <option value="143">BEAT SPORTY CBS ISS</option>
        <option value="144">MEGA PRO</option>
        <option value="145">VERZA 150 R</option>
        <option value="146">SH 150</option>
        <option value="147">CRF 250</option>
        <option value="148">BLADE R</option>
        <option value="149">VERZA 150 S</option>
        <option value="150">CB150R</option>
        <option value="151">REVO</option>
        <option value="152">CBR 250R</option>
        <option value="153">SUPER CUB</option>
        <option value="154">NEW SCOOPY</option>
        <option value="155">FORZA</option>
        <option value="156">SUPRA X 125</option>
        <option value="157">BEAT ESP</option>
        <option value="158">BEAT STREET</option>
        <option value="159">BEAT ESP</option>
        <option value="160">VARIO 125</option>
        <option value="161">GENIO</option>
        <option value="162">CB150 VERZA</option>
        <option value="163">CRF150L</option>
        <option value="164">NEW PCX 150 CBS</option>
        <option value="165">CB150 VERZA</option>
        <option value="166">CB150R STREETFIRE</option>
        <option value="167">SUPRA SERIES</option>
        <option value="168">BEAT POP CBS ESP</option>
        <option value="169">BEAT SPORTY CBS</option>
        <option value="170">BEAT STREET</option>
        <option value="171">BEAT SPORTY CBS ISS</option>
        <option value="172">MEGA PRO</option>
        <option value="173">VERZA 150 R</option>
        <option value="174">SH 150</option>
        <option value="175">CRF 250</option>
        <option value="176">BLADE R</option>
        <option value="177">VERZA 150 S</option>
        <option value="178">CB150R  </option>
        <option value="179">REVO</option>
        <option value="180">CBR 250R</option>
        <option value="181">SUPER CUB</option>
        <option value="182">NEW SCOOPY</option>
        <option value="183">Honda FORZA 250</option>
        <option value="184">All New PCX 160</option>
        <option value="185">All New CBR 150</option>
        <option value="186">CB 150 R Streetfire</option>
        <option value="187">CBR 150 ABS</option>
        <option value="188">Vario 160 CBS</option>
        <option value="189">Vario 160 ABS</option>
        <option value="190">CB150 X STD</option>
        <option value="191">CRF 250 Rally</option>
        <option value="192">All New PCX 160 e:HEV</option>
        <option value="193">GENIO CBS</option>
        <option value="194">GENIO CBS ISS</option>
        <option value="195">ADV 160 CBS</option>
        <option value="196">ADV 160 ABS</option>
        <option value="197">Monkey (125)</option>
        <option value="198">Monkey</option>     
    </div>
  </div>


</div>
<script src="https://localhost/astra2/stopwatch.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
<script src="https://localhost/astra2/js/bootstrap.js"></script>




</body>
</html>
