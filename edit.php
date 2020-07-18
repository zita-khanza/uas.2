<?php
include "koneksi.php";



if(!isset($_GET['id'])){
header('location:tampildata.php');


}
$id = $_GET['id'];

$sql= "SELECT * FROM daftarbantuan WHERE id=$id";
$query = mysqli_query($db,$sql);
$tampil = mysqli_fetch_assoc($query);
if(mysqli_num_rows($query) < 1){
    die("tidak ditemukan");
}

?>



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Bantuan Covid</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="assets/css/scrolling-nav.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Bantuan Covid-19</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#data">Input Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="logout.php?status=keluar">Keluar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="bg-danger text-white">
    <div class="container text-center">
      <h1>Bantuan Covid-19</h1>
      <p class="lead">Memberikan Bantuan kepada masyarakat yang terkena dampak covid-19</p>
    </div>
  </header>

  <section id="data">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Tambahkan Data terima Bantuan dibawah ini</h2>
         <form action="" method="post">
             <label>Jenis Alokasi</label>
             <select class="form-control" name="alokasi">
        <option>Pilih Alokasi</option>
        <?php
             $sql=" SELECT * FROM  alokasi";
          

            $hasil=mysqli_query($db,$sql);
            $no=0;
            while ($data = mysqli_fetch_array($hasil)) {
          
                $ket="";
                if (isset($_GET['alokasi'])) {
                    $resto= trim($_GET['alokasi']);
    
                    if ($resto==$data['nama_alokasi'])
                    {
                        $ket="selected";
                    }
                }
                ?>

          ?>
            
            <option <?php echo $ket; ?> value="<?php echo $data['nama_alokasi'];?>"><?php echo $data['nama_alokasi'];?></option>
            <?php
	}
  ?>
             </select>
             <br>
             <br>

             <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Jumlah Dana</label>
                                    <p>Rp.</p><input class="form-control" name="jumlah" type="text"  required="required" data-validation-required-message="Masukan Email Anda." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br>
                            <br>
                            
          

                                             
             <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Nama Lengkap</label>
                                    <input class="form-control" name="nama" type="text"  required="required" data-validation-required-message="Masukan Email Anda." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                                             
             <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>No Hp</label>
                                    <input class="form-control" name="nohp" type="text"  required="required" data-validation-required-message="Masukan Email Anda." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                                             
             <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Email</label>
                                    <input class="form-control" name="email" type="email"  required="required" data-validation-required-message="Masukan Email Anda." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                            <br />
             
             <div class="form-group">
                 <input type="submit" class="btn btn-primary btn-xl" value="SIMPAN"  name="simpan"></div>



         </form>
         <?php 
         
        
         
         
         ?>
        </div>
      </div>
    </div>
  </section>

  

  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Deskripsi</h2>
          <p class="lead"></p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Bantuan Covid-19 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="assets/js/scrolling-nav.js"></script>

</body>

</html>
