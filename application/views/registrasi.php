<!doctype html>
<html lang="en">

<head>
  <title>KoncoTernak</title>
  <?php $this->load->view("_parts/head.php") ?>
</head>

<!-- onLoad, fungsi js untuk eksekusi fungsi yang dibuat sebelumnya saat page dimuat-->

<body onLoad="scrlsts()">


  <?php $this->load->view("_parts/navbar.php"); ?>


  <!--      LETAKKAN KONTEN DISINI        -->
  <div class="container-fluid bg-konco" style="height: 100vh; width: 100vw;">
    <div style="position: relative; top: 10vh;">
      <?php $this->load->view("regist-card.php"); ?>
    </div>
  </div>



</body>

</html>