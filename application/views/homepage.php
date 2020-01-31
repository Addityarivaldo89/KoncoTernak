<!doctype html>
<html lang="en">
  <head>
    <!-- Charset untuk scale ukuran relatif halaman sesuai device -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
  <body onLoad="scrlsts()">
    
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
    <div id="carousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox" >
        <div class="carousel-item active">
            <img class="d-block img-fluid" src="<?php echo base_url('assets/images/head1.jpg') ?>" alt="First slide">
              <div class="carousel-caption">
                <h5>First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
              </div>
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="<?php echo base_url('assets/images/head2.jpg') ?>" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="<?php echo base_url('assets/images/head1.jpg') ?>" alt="Third slide">
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid mt-4 d-block w-100">
      <hr class="hrt" width="95%" >
      
      <script> 
        $(document).ready(function() { 
            $("button").click(function() { 
                $(document).scrollTop($(document).height()); 
            }); 
        }); 
      </script> 
      
      <p class="text-center text-secondary" style="font-size: 1.5rem">INFO LEBIH LANJUT<br> 
        
      <a href="#scroll-target"><button type="button" class="btn" style="background-color: #FFFFFF;"><img src="<?php echo base_url('assets/images/chevron.png') ?>" width="25%"></p>
      </button></a>
  </div>
  
  <div id="scroll-target"></div>
  <div class=" bg-konco mt-5">
      <div class="p-3 px-5">
       <img class="img-fluid d-block mx-auto my-4" style="width: 35%;" src="<?php echo base_url('assets/images/koncoapa.png') ?>" alt="Apa itu koncoternak">
       
       <p class="text-center mx-auto px-5 w-75" style="font-size: 1.2rem;"> <b>KoncoTernak</b> ( <i>Jawa, Sahabat-Ternak</i> ), adalah sebuah layanan untuk menghubungkan pemasok daging
       dengan para calon pembeli. Dengan KoncoTernak, pengguna baik pembeli maupun penjual
       dapat memberikan serta mendapatkan informasi seputar peternakan.</p>
      </div>
      <hr style="width:95%; background-color:#a1a1a1 !important; height:2px;"/>
      <p class=" text-center font-weight-bolder" style="color: #343434 !important; font-size: 3rem;">Layanan Kami</p>
      <div class="container-fluid mx-auto bg-konco">
          <div class="row">
            <div class="col ">
              <img style="width: 10rem;" class="img-fluid d-block m-auto" src="<?php echo base_url('assets/images/card1.png') ?>" alt="layanan 1">
              <hr style="width:75%; background-color:#a1a1a1 !important; height:1px;"/>
              <P class="text-center mt-3" style="font-size: 1.1rem;">Transaksi dapat dilakukan pada website dengan jaminan keamanan.</P>
            </div>
            <div class="col">
              <img style="width: 10rem;" class="img-fluid d-block m-auto" src="<?php echo base_url('assets/images/card2.png') ?>" alt="layanan 2"> 
              <hr style="width:75%; background-color:#a1a1a1 !important; height:1px;"/>
              <P class="text-center mt-3" style="font-size: 1.1rem;">Memberikan berita peternakan terkini serta tips dan trik dalam mengembangkan usaha anda.</P>
            </div>
            <div class="col">
              <img style="width: 10rem;" class="img-fluid d-block m-auto" src="<?php echo base_url('assets/images/card3.png') ?>" alt="layanan 3"> 
              <hr style="width:75%; background-color:#a1a1a1 !important; height:1px;"/>
              <P class="text-center mt-3" style="font-size: 1.1rem;">Memastikan anda mendapatkan harga terbaik sehingga kedua pihak terpuaskan.</P>
            </div>
          </div>
        </div> 
      </div>

  <div class="container-fluid pt-2 pb-0">
    <div class="row">
      <div class="col">
        <p class="text-left font-weight-light" style="font-size: 1rem;">
          KONCOTERNAK &copy; 2020
        </p>
      </div>
      <div class="col">
        <p class="text-right font-weight-light" style="font-size: 1rem;">
          Contact Us @ <a href="www.twitter.com">Twitter</a> | <a href="www.facebook.com">Facebook</a> | <a href="www.instagram.com">Instagram</a>
        </p>
      </div>
    </div>
  </div>

  </body>
</html>