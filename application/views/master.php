<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/index/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/index/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/index/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/index/css/jquery.datetimepicker.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/index/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/index/css/global.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/index/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/index/DataTables/media/css/jquery.dataTables.css">

    <script src="<?php echo base_url() ?>asset/index/js/jquery-2.1.4.js"></script>
    <script src="<?php echo base_url() ?>asset/index/js/jquery-ui.js"></script>
    <script src="<?php echo base_url() ?>asset/index/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>asset/index/js/jquery.datetimepicker.full.min.js"></script>
    <script src="<?php echo base_url() ?>asset/index/js/function.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/index/DataTables/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/index/DataTables/media/js/jquery.dataTables.min.js"></script>
    <link rel="icon" href="<?=base_url()?>asset/images/favicon_2.ico" type="image/x-icon">
	<meta charset="UTF-8">
	<title><?php echo $title ?> | GYM</title>
</head>
<body>
	<?php if ($title == 'Login Admin'): ?>
	<?php else: ?>
	<header class="full">
		<div class="container">
			<div class="logo left">
				<a href="<?php echo base_url() ?>">
					<div class="img">
						<img src="<?php echo base_url() ?>assets/img/logo.png" alt="">
					</div>
				</a>
			</div>

			<div class="nav right">
				<ul>
					<?php if ($this->session->userdata('status') == 1): ?>

					<?php else: ?>
					<li><a href="<?php echo base_url() ?>" <?php if ($title == 'HOME') :?> class="active" <?php endif ?>>HOME</a></li>
					<li><a href="<?php echo base_url() ?>about" <?php if ($title == 'About') :?> class="active" <?php endif ?>>ABOUT US</a></li>
					<li><a href="<?php echo base_url() ?>contact" <?php if ($title == 'Contact') :?> class="active" <?php endif ?>>CONTACT US</a></li>
					<!--<li><a href="<?php //echo base_url() ?>carabooking" <?php //if ($title == 'Cara-Booking') :?> class="active" <?php //endif ?>>Cara Booking</a></li>-->
					<?php endif ?>

					<?php if ($this->session->userdata('id_login') == TRUE): ?>
						<?php if ($this->session->userdata('status') == 0): ?>
						<li><a href="<?php echo base_url() ?>booking" <?php if ($title == 'Booking') :?> class="active" <?php endif ?>>Booking</a></li>
						<li><a href="<?php echo base_url() ?>profileband" <?php if ($title == 'Profile') :?> class="active" <?php endif ?>>Profile Band</a></li>
						<li><a href="<?php echo base_url() ?>logout">Logout</a></li>

						<?php endif ?>
					<?php else: ?>

					<li><a href="<?php echo base_url() ?>login"  <?php if ($title == 'Login') :?> class="active" <?php endif ?>>LOGIN</a></li>
					<!--<li><a href="<?php echo base_url() ?>daftar"  <?php //if ($title == 'Daftar') :?> class="active" <?php// endif ?>>Daftar</a></li> -->
					<?php endif ?>

				</ul>
			</div>
		</div>
	</header>

	<?php endif ?>



	<?php echo $contents ?>

	<?php if ($title == 'Login Admin'): ?>
	<?php else: ?>

	<footer class="full">
			<div class="footer-nav full rel">
				<div class="centered">
					<b>CLOUD BASED SMART GYM MANAGEMENT SYSTEM</b>
				</div>

				<div class="back-to-top abs">
					<a href="javascript:;" class="back-top">Back to Top &uarr;</a>
				</div>
			</div>

			<div class="footer-link full">
				<div class="container">
					<div class="f-nav left">
						<ul class="left">
							<li><a href="<?php echo base_url() ?>" <?php if ($title == 'beranda') :?> class="active" <?php endif ?>>HOME</a></li>
							<li><a href="<?php echo base_url() ?>tentang" <?php if ($title == 'Tentang') :?> class="active" <?php endif ?>>ABOUT US</a></li>
							<li><a href="<?php echo base_url() ?>kontak" <?php if ($title == 'Kontak') :?> class="active" <?php endif ?>>CONTACT US</a></li>
							<!--<li><a href="<?php echo base_url() ?>carabooking" <?php if ($title == 'Cara-Booking') :?> class="active" <?php endif ?>>Cara Booking</a></li>-->
							<?php if ($this->session->userdata('id_login') == TRUE): ?>
								<?php if ($this->session->userdata('status') == 1): ?>
									<li><a href="<?php echo base_url() ?>booking" <?php if ($title == 'Booking') :?> class="active" <?php endif ?>>Booking</a></li>
									<li><a href="<?php echo base_url() ?>databooking"  <?php if ($title == 'Data Booking') :?> class="active" <?php endif ?>>Data Booking</a></li>
									<li><a href="<?php echo base_url() ?>databand"  <?php if ($title == 'Data Band') :?> class="active" <?php endif ?>>Data Band</a></li>
									<li><a href="<?php echo base_url() ?>laporan" <?php if ($title == 'Laporan') :?> class="active" <?php endif ?>>Laporan</a></li>
									<li><a href="<?php echo base_url() ?>logout">logout</a></li>
								<?php else: ?>
									<li><a href="<?php echo base_url() ?>booking" <?php if ($title == 'Booking') :?> class="active" <?php endif ?>>Booking</a></li>
									<li><a href="<?php echo base_url() ?>profileband"  <?php if ($title == 'Profile Band') :?> class="active" <?php endif ?>>Profile Band</a></li>
									<li><a href="<?php echo base_url() ?>logout">logout</a></li>
								<?php endif ?>
							<?php else: ?>

							<li><a href="<?php echo base_url() ?>login"  <?php if ($title == 'Login') :?> class="active" <?php endif ?>>LOGIN</a></li>
							<!--<li><a href="<?php echo base_url() ?>daftar"  <?php if ($title == 'Daftar') :?> class="active" <?php endif ?>>Daftar</a></li>-->
							<?php endif ?>
						</ul>
					</div>

					<div class="right-foot right">
						<div class="title-footer">
							<span>GYM MANAGEMENT SYSTEM</span>
						</div>

						<div class="footer-desc">
							<span>For more inquiry, find us or contact us SECRETRAINER</span>
						</div>



						<div class="phone-numb">
							<span>017-2401418</span>
						</div>



						<div class="copyright">
							© SECRETRAINER/HAZIQ 2017
						</div>

						<div class="footer-ico right">
							<div class="left">
								<li>
									<a href="#"><img src="<?php echo base_url() ?>asset/index/img/ic-fb.png" alt=""></a>
								</li>

								<li>
									<a href="#"><img src="<?php echo base_url() ?>asset/index/img/ic-twitter.png" alt=""></a>
								</li>

								<li>
									<a href="#"><img src="<?php echo base_url() ?>asset/index/img/ic-pinterest.png" alt=""></a>
								</li>

								<li>
									<a href="#"><img src="<?php echo base_url() ?>asset/index/img/ic-instagram.png" alt=""></a>
								</li>
							</div>
						</div>


					</div>

				</div>
			</div>
		</footer>
		<?php endif ?>




</body>
</html>
