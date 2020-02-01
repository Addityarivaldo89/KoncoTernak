<!-- Parent navbar dan propertinya -->
<nav class="navbar fixed-top navbar-expand-md bg-konco shadow-sm py-0 px-0">
      <div class="container-fluid">

        <!-- navbar item untuk dropdown menu -->
        <div class="nav navbar-nav dropdown" id="navbarTogglerDemo2">

            <!-- [TEMP] <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Messages</a> -->
            <!-- Dropdown menu berupa button -->
            <a href="#" class="btn bg-konco nav-link dropdown-toggle py-0" data-toggle="dropdown" type="button">
              <img src="<?php echo base_url('assets/images/dropdown.png') ?>" width="24">
                <div style="color: black; font-size: 0.6rem;">Menu</div>
              </a>
              <!-- Bagian item dari dropdown menu, bisa link individual atau list. -->
              <div class="dropdown-menu dropdown-menu-left">
                <a href="#" class="dropdown-item text-center">ARTIKEL</a>
                <a href="#" class="dropdown-item text-center">JUAL-BELI</a>
              </div>
        </div>

                <!-- Link menuju homepage berupa icon/logo/gambar -->
                <a href="/konco/" class="navbar-brand d-none d-sm-block">
            <img src="<?php echo base_url('assets/images/Logo.png') ?>" height="40" alt="KoncoTernak">
        </a>
   
      
        <!-- navbar item untuk Form query search dan submit button -->
        <div class="collapse navbar-collapse"  id="navbarCollapse">
            <form class="form-inline">
              <!-- Form -->
              <div class="input-group">                    
                  <input type="text" class="form-control content" name="cari" placeholder="cari" style="width: 43rem; margin-left: 13rem">
                  <div class="input-group-append">
                      <a href="#" type="button" class="btn btn-secondary"><img src="<?php echo base_url('assets/images/find.png') ?>" height="20"></a>
                  </div>
              </div>
          </form>

          <!-- Button submit -->
          <div class="navbar-nav ml-2">
                <a href="#" class="btn btn-secondary" data-toggle="dropdown" type="button">Profil <img src="<?php echo base_url('assets/images/profile/userdummy/profile.jpg') ?>" style="border-radius: 50%; width: 1.5rem ; height: 1.5rem;"></a>
                <ul class="dropdown-menu dropdown-menu-right mt-0">
                        <li class="px-3 py-2">
                            <div class=" text-left">
                        </li>
                </ul>
          </div>
    </div>
  </div>
    </nav>