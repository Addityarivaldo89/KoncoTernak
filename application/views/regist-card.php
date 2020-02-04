<div class="card shadow" style="max-width: 65vw; position: relative; left: 18vw; top: 5vh;">
  <div class="row" >
    <div class="col d-none d-sm-block p-5" >
      <img src="<?php echo base_url('assets/images/head2.jpg') ?>" alt="" style="width: 100%; height: 100%; object-fit: cover; object-position: 50% 50%;">
    </div>
    <div class="col mr-2">
      <div class="card-body">
        <h5 class="card-title text-center font-weight-bolder" style="font-size: 1.6rem">Daftar Sekarang</h5>
        <div class="text-center font-weight-lighter" style="font-size: 0.8rem;">
          Sudah bergabung dengan Konco
          <div class="d-inline" style="font-size: 0.8rem; color: #852121;">
            Ternak
          </div>
          ? <a href="#" class="font-weight-bold text-black-50">Masuk</a>
        </div>
        <hr style="width:95%; background-color:#a1a1a1 !important; height:1px;" />
        <form action="reg.php" method="post">
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
          <button type="submit" class="btn btn-konco mb-2" style="position: relative; left: 5%; width: 95%;">Daftar</button>
          <div class="text-secondary text-center" style="font-size: 0.8rem">
            Dengan mendaftar, saya menyetujui <a href="#" style="color: #000" class="font-weight-bolder">Syarat dan Ketentuan</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
