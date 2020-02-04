<!doctype html>
<html lang="en">
  <head>
    <title>KoncoTernak</title>
    <?php $this->load->view("_parts/head.php") ?>
  </head>

  <!-- onLoad, fungsi js untuk eksekusi fungsi yang dibuat sebelumnya saat page dimuat-->
  <body onLoad="scrlsts()">

  <?php $this->load->view("_parts/navbar.php") ?>
<div class="container-fluid pt-3" >
    <div class="row" style="height:100vh;">
        <div class="col bg-dark d-inline position-fixed" id="sticky-sidebar" style="height:100vh; width:20%; ">
          <<img class="img-fluid" src="<?php echo base_url('assets/images/head1.jpg') ?>" alt="">
        </div>
        <div class="col" id="main" style="height: 250%; padding-left: 20%;">
            <h1>Main Area</h1>
            ...
        </div>
    </div>
</div>

  
  </body>
</html>