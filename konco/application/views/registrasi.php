<!doctype html>
<html lang="en">
  <head>
    <!-- Charset untuk scale ukuran relatif halaman sesuai device -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>KoncoTernak</title>
    
    <!-- Script marquee judul halaman, jika browser support js -->
    <SCRIPT LANGUAGE="JavaScript">
    var scrl = "KoncoTernak | Solusi Peternak Indonesia | ";
    function scrlsts() {
      scrl = scrl.substring(1, scrl.length) + scrl.substring(0, 1);
      document.title = scrl;
      setTimeout("scrlsts()", 300);
    }
    </script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <link href="<?php echo base_url('assets/res/css/bootstrap.min.css') ?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/res/js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/res/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/res/js/jarallax.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/res/js/popper.min.js') ?>"></script>
    
    <style>
      .tinggi50 {
        height: 50vw;
      }

      .carousel-caption {
        width:100%;
        height:100%;
        left:0 !important;
      }

      .hrt { 
            position: relative; 
            top: 20px; 
            border: none; 
            height: 3px; 
            background: black; 
            margin-bottom: 50px; 
      } 
        
      .dropdown-toggle::after {
        content: none;
      }
      
      .carousel-item > img {
        width: 100%;
        height: 75vh;
        object-fit: cover;
      }
      
 
    </style>
  </head>

  <!-- onLoad, fungsi js untuk eksekusi fungsi yang dibuat sebelumnya saat page dimuat-->
  <body onLoad="scrlsts()" style="background-color: #e9e9e9">
    
    <!-- Parent navbar dan propertinya -->
    <nav class="navbar fixed-top navbar-expand-md bg-konco shadow-sm py-0">
      <div class="container-fluid">

        <!-- Link menuju homepage berupa icon/logo/gambar -->
        <a href="/konco/" class="navbar-brand d-none d-sm-block w-50">
            <img src="<?php echo base_url('assets/images/Logo.png') ?>" height="40" alt="CoolBrand">
        </a>

        <!-- navbar item untuk dropdown menu -->
        <div class="nav navbar-nav dropdown" id="navbarTogglerDemo2">

            <!-- [TEMP] <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Messages</a> -->
            <!-- Dropdown menu berupa button -->
            <a href="#" class="btn bg-konco nav-link dropdown-toggle py-0" data-toggle="dropdown" type="button">
              <img src="<?php echo base_url('assets/images/dropdown.png') ?>" width="24">
                <div style="color: black; font-size: 0.6rem;">Menu</div>
              </a>
              <!-- Bagian item dari dropdown menu, bisa link individual atau list. -->
              <div class="dropdown-menu dropdown-menu-center">
                <a href="#" class="dropdown-item text-center">ARTIKEL</a>
                <a href="#" class="dropdown-item text-center">JUAL-BELI</a>
              </div>
        </div>
   
      
        <!-- navbar item untuk Form query search dan submit button -->
        <div class="collapse navbar-collapse" style="margin-left: 25%;" id="navbarCollapse">
            <form class="form-inline">
              <!-- Form -->
              <div class="input-group">                    
                  <input type="text" class="form-control" placeholder="Search">
                  <div class="input-group-append">
                      <a href="#" type="button" class="btn btn-secondary"><img src="<?php echo base_url('assets/images/find.png') ?>" height="20"><i class="fa fa-search"></i></a>
                  </div>
              </div>
          </form>

          <!-- Button submit -->
          <div class="navbar-nav">
              <a href="/konco/registrasi" class="btn btn-outline-dark mx-2">Daftar</a>
              <a href="#" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" type="button">Masuk</a>
              <ul class="dropdown-menu dropdown-menu-right mt-0">
                       <li class="px-3 py-2">
                           <form class="form" role="form">
                                <div class="form-group">
                                    <input id="emailInput" placeholder="Email" class="form-control form-control-sm" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <input id="passwordInput" placeholder="Password" class="form-control form-control-sm" type="password" required="">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-konco btn-block">Masuk</button>
                                </div>
                                <div class="form-group text-center">
                                    <small><a href="#" data-toggle="modal" data-target="#modalPassword">Lupa password?</a></small>
                                </div>
                            </form>
                        </li>
                    </ul>
          </div>
    </div>
  </div>
    </nav>
  <!--      LETAKKAN KONTEN DISINI        -->
          <div class="row mt-5 pt-4" style="height: 90vh; width: 101vw; background-color: #e9e9e9">
            <div class="col-5" style="background-color: #e9e9e9;">
              <div class="card shadow" style="width: 25rem; position: absolute; top: 8%; right: 15%;">
                <div class="card-body">
                  <h5 class="card-title text-center font-weight-bolder" style="font-size: 1.6rem">Daftar Sekarang</h5>
                  <div class="text-center font-weight-lighter" style="font-size: 0.8rem;">
                    Sudah bergabung dengan Konco
                    <div class="d-inline" style="font-size: 0.8rem; color: #852121;">
                      Ternak
                  </div>
                    ? <a href="#" class="font-weight-bold text-black-50">Masuk</a>
                </div>
                  <hr style="width:95%; background-color:#a1a1a1 !important; height:1px;"/>
                  <div class="ml-3">
                    <div class="font-weight-lighter mb-1" style="font-size: 0.8rem">
                      Nama Asli
                    </div>
                    <div class="form-group mb-2">
                        <input style="height: 2.5rem" id="inputnama" placeholder="Nama Asli" class="form-control form-control-sm" type="text" required="true">
                    </div>
                    <div class="font-weight-lighter mb-1" style="font-size: 0.8rem">
                      Email 
                    </div>
                    <div class="form-group">
                      <input style="height: 2.5rem" id="inputemail" placeholder="Email" class="form-control form-control-sm" type="text" required="true">
                    </div>
                    <div class="font-weight-lighter mb-1" style="font-size: 0.8rem">
                      Kata Sandi 
                    </div>
                    <div class="form-group">
                      <input style="height: 2.5rem" id="inputpassword" placeholder="Kata Sandi" class="form-control form-control-sm" type="password" required="true">
                    </div>
                    <div class="font-weight-lighter mb-1" style="font-size: 0.8rem">
                      Konfirmasi Kata Sandi 
                    </div>
                    <div class="form-group">
                      <input style="height: 2.5rem" id="inputpassword" placeholder="Ketik Ulang Kata Sandi" class="form-control form-control-sm" type="password" required="true">
                    </div>
                  </div>
                  <a href="#" type="submit" class="btn btn-konco mb-2" style="position: relative; left: 5%; width: 21rem">Daftar</a>
                  <div class="text-secondary text-center" style="font-size: 0.8rem">
                    Dengan mendaftar, saya menyetujui <a href="#" style="color: #000" class="font-weight-bolder">Syarat dan Ketentuan</a> 
                  </div>
                </div>
              </div>
            </div>
            <div class="col" style="background-color: #e9e9e9;">
              <img class="img-fluid d-block" style="width: 50%; position: relative; top: 20%; left: 15%;" src="<?php echo base_url('assets/images/market-pic.png') ?>" alt="placeholder aja">
              <div class="text-center" style="position: relative; top: 25%; left: -10%">
                Memudahkan transaksi peternak-peternak Indonesia!
              </div>
              <div class='text-right' style="position: relative; top: 40%; font-size: 0.9rem; background-color: #e9e9e9;">
                &copy; 2020, Koncoternak.id <div class="d-inline text-secondary"> | </div>
                <a href="#" class="font-weight-bolder">Bantuan</a>
              </div>
            </div>
          </div>
        </div> 



  </body>
</html>