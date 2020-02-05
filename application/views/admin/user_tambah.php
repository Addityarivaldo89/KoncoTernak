<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body id="page-top">

<?php $this->load->view("admin/_partials/navbar.php") ?>

<div id="wrapper">

	<?php $this->load->view("admin/_partials/sidebar.php") ?>

	<div id="content-wrapper">

		<div class="container-fluid">

        <!-- 
        karena ini halaman overview (home), kita matikan partial breadcrumb.
        Jika anda ingin mengampilkan breadcrumb di halaman overview,
        silahkan hilangkan komentar (//) di tag PHP di bawah.
		-->
		<?php $this->load->view("admin/_partials/breadcrumb.php") ?>
		

		</div>
        <!-- /.container-fluid -->
        <form action="<?php echo base_url(). 'admin/tambah_aksi'; ?>" method="post">
        <div class="ml-3">
            <div class="font-weight-lighter mb-1" style="font-size: 0.8rem">
                Nama
            </div>
            <div class="form-group mb-2">
                <input style="height: 2.5rem" name="nama" placeholder="Masukkan Nama" class="form-control form-control-sm" type="text" required="true">
            </div>
            <div class="font-weight-lighter mb-1" style="font-size: 0.8rem">
                Username
            </div>
            <div class="form-group mb-2">
                <input style="height: 2.5rem" name="username" placeholder="Masukkan Username" class="form-control form-control-sm" type="text" required="true">
            </div>
            <div class="font-weight-lighter mb-1" style="font-size: 0.8rem">
                Email 
            </div>
            <div class="form-group">
                <input style="height: 2.5rem" name="email" placeholder="Masukkan Email" class="form-control form-control-sm" type="email" required="true">
            </div>
            <div class="font-weight-lighter mb-1" style="font-size: 0.8rem">
                Kata Sandi 
            </div>
            <div class="form-group">
                <input style="height: 2.5rem" name="password" placeholder="Masukkan Kata Sandi" class="form-control form-control-sm" type="password" required="true">
            </div>
        </div>
            <button type="submit" value="Simpan" class="btn btn-konco btn-sm" style="position: relative; left: 5%; width: 21rem">Tambah</button>
        </form>

		<!-- Sticky Footer -->
		<?php $this->load->view("admin/_partials/footer.php") ?>

	</div>
	<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->


<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
    

<script type="text/javascript" src="assets/res/DataTables/datatables.min.js"></script>
</body>
</html>
