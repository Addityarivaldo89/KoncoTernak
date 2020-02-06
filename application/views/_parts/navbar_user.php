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
				<a href="/konco/artikel" class="dropdown-item text-center">ARTIKEL</a>
				<a href="/konco/market" class="dropdown-item text-center">JUAL-BELI</a>
			</div>
		</div>

		<!-- Link menuju homepage berupa icon/logo/gambar -->
		<a href="/konco/" class="navbar-brand d-none d-sm-block">
			<img src="<?php echo base_url('assets/images/Logo.png') ?>" height="40" alt="KoncoTernak">
		</a>

		<!-- navbar item untuk Form query search dan submit button -->
		<div class="collapse navbar-collapse" id="navbarCollapse" style="position: relative; right: 0px; width: 100%;">
			<form class="form-inline" style="width:100%">
				<!-- Form -->
				<div class="input-group" style="width: 100%;">
					<input type="text" class="form-control content" name="cari" placeholder="cari" style="width: 25%;">
					<div class="input-group-append">
						<a href="#" type="button" class="btn btn-secondary"><img src="<?php echo base_url('assets/images/find.png') ?>" height="20"><i class="fa fa-search"></i></a>
					</div>
				</div>
			</form>

			<!-- Button submit -->
			<div class="navbar-nav ml-2">
				<a href="#" class="btn btn-secondary" data-toggle="dropdown" type="button">Profil <img src="<?php echo base_url('assets/images/profile/userdummy/profile.jpg') ?>" style="border-radius: 50%; width: 1.5rem ; height: 1.5rem;"></a>
				<ul class="dropdown-menu dropdown-menu-right mt-0 shadow-sm" style="border-radius: 0px 0px 5px 5px; background-color: #e9e9e9; width: 14rem">
					<li class="px-3 py-2 border-bottom">
						<div class=" text-center" style="margin-left: auto; margin-right: auto;">
							<a href="#" data-toggle="dropdown" type="button">
								<img class=" my-0" src="<?php echo base_url('assets/images/profile/userdummy/profile.jpg') ?>" style="border-radius: 50%; width: 5rem ; height: 5rem; box-shadow: 0px 0px 5px 2px #aaaaaa"></a>
							<br />
							<?php $user = "Dummy Sutikna";
							echo $user;
							?>
							<br />
							<a href="#">Edit Profil</a>
						</div>
					</li>
					<li>
						<div class="w-100" style="border-bottom: 2px solid #aaa;">

						</div>
					</li>
					<a type="button" href="#" class="dropdown btn btn-outline-konco w-100 text-left" data-toggle="dropdown">Transaksi</a>
					<ul class="dropdown-menu multi-level w-100" style="background-color: #e9e9e9; border-radius: 0px 0px 5px 5px">
						<li><a type="button" href="#" class="btn btn-outline-konco w-100 text-left" data-toggle="dropdown">Histori</a></li>

						<li><a type="button" href="#" class="btn btn-outline-konco w-100 text-left" data-toggle="dropdown">Menunggu Pembayaran</a></li>
						<li class="divider"></li>
					</ul>
					<li>
						<div class="btn-group">
							<a type="button" href="#" class="btn btn-outline-konco w-100 text-left d-inline" data-toggle="dropdown">Daftar Produk</a>
							<a class="btn btn-secondary" style="color: #e9e9e9; border-radius: 0px; width: 6.2rem;">+ Produk</a>
						</div>
					</li>
					<li>
						<a href="_parts/navbar.php?session=<?php echo 0 ?>" class="text-center btn btn-outline-konco w-100">Keluar<img src="<?php echo base_url('assets/images/exit.png') ?>" style="margin-left: 0.5vw; width: 1vw; height: 1vw;"></a>
					</li>
			</div>
		</div>
	</div>
</nav>
