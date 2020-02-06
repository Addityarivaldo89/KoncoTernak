<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">  
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
        
        <a class="nav-link" href="<?php echo site_url('admin/tambah') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Tambah User</span></a>
        
		<table class="display" id="tabeluser">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Email</th>
            <th>Hak Akses</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $no=1;
        foreach ($user as $u) {
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u->nama ?></td>
            <td><?php echo $u->username ?></td>
            <td><?php echo $u->email ?></td>
            <td><?php if ($u->id_level == 1) {
                echo "User"; 
            }else{ 
                echo "Programmer";
                } ?>
            </td>
            <td>
                <?php echo anchor('admin/edit/'.$u->id_user,'Edit'); ?>
                <?php echo anchor('admin/hapus/'.$u->id_user,'Hapus'); ?>
            </td>
        <?php } ?>
        </tr>
        </tbody>
      </table>
		

		</div>
		<!-- /.container-fluid -->

		<!-- Sticky Footer -->
		<?php $this->load->view("admin/_partials/footer.php") ?>

	</div>
	<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->


<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
    

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#tabeluser').DataTable();
});
</script>
</body>
</html>
