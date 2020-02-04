<!doctype html>
<html lang="en">
  <head>
    <title>KoncoTernak</title>
    <?php $this->load->view("_parts/head.php") ?>
  </head>

  <!-- onLoad, fungsi js untuk eksekusi fungsi yang dibuat sebelumnya saat page dimuat-->
  <body onLoad="scrlsts()">

  <?php $this->load->view("_parts/navbar.php") ?>

  <!--      LETAKKAN KONTEN DISINI        -->
  <div class="container-fluid mt-5 px-0">
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
  </div>
  </body>
</html>