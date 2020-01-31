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