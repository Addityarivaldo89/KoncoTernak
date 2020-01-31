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