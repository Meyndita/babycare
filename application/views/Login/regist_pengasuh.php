<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <link href="<?=base_url('assets/img/logo.ico')?>" rel="shortcut icon"/> -->
		
		<!-- <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>"/>
		<link rel="stylesheet" href="<?=base_url('assets/css/font-awesome.min.css')?>"/> -->
		
		<link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>"/>
		<!-- <link rel="stylesheet" type="text/css" href="<?=base_url('assets/babycare/templatelogin/css/main.css')?>"> -->
		<title><?=$title?></title>
<title>Login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/templatelogin2/vendor/bootstrap/css/bootstrap.min.css')?>">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/templatelogin2/fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/templatelogin2/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')?>">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/templatelogin2/vendor/animate/animate.css')?>">
<!--===============================================================================================-->	
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/templatelogin2/vendor/css-hamburgers/hamburgers.min.css')?>">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/templatelogin2/vendor/animsition/css/animsition.min.css')?>">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/templatelogin2/vendor/select2/select2.min.css')?>">
<!--===============================================================================================-->	
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/templatelogin2/vendor/daterangepicker/daterangepicker.css')?>">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/templatelogin2/css/util.css')?>">
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/templatelogin2/css/main.css')?>">
<!--===============================================================================================-->
</head>
	<body>
		<div id="preloder">
			<div class="loader"></div>
		</div>

		<!-- Main section start -->
		<!-- <div class="main-site-warp">
			<div class="site-menu-warp">
				<div class="close-menu">x</div> -->
				<!-- Main menu -->
				<!-- <ul class="site-menu">
					<li><a href="<?=base_url('Welcome')?>">Home</a></li>
					<li><a href="<?=base_url('Welcome/check')?>">Check your Shoes!</a></li>
					<li><a href="<?=base_url('Welcome/about')?>">About</a></li>
					<li><a href="<?=base_url('Login')?>">Login</a></li>
				</ul>
			</div>
			<header class="header-section">
				<div class="nav-switch">
					<i class="fa fa-bars"></i>
				</div>
				<div class="header-social">
					<a href=""><i class="fa fa-pinterest"></i></a>
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
					<a href=""><i class="fa fa-dribbble"></i></a>
					<a href=""><i class="fa fa-behance"></i></a>
				</div>
			</header> -->

<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
				<span class="login100-form-title-1">
					Registrasi
				</span>
			</div>
            <form class="user" method="post" action="<?php echo base_url(); ?>Register/reg_process_pengasuh">

			<div class="login100-form validate-form"> 
					<div class="form-group row">
					<label for="id">Nama Kantor :</label>
					<select class="form-control " name="id">
						<option value="" selected="">-- Pilih --</option>
						<?php foreach ($kantor as $rows) : ?>
						<option value="<?php echo $rows->id; ?>"> <?php echo $rows->nama; ?> </option>
						<?php endforeach; ?>
					</select>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">NIK</span>
						<input type="number" name="nik" class="form-control" id="exampleLastName" placeholder="Masukkan Nomor Induk Kependudukan" minlength="16" maxlength="16" required>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Nama Pengasuh</span>
						<input type="text" name="nama_pengasuh" class="form-control" id="exampleLastName" placeholder="Masukkan Nama Pengasuh" required>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Email</span>
                        <input type="email" class="form-control form-control-user border-left-primary" id="email" name="email" placeholder="Masukkan Email" value="<?= set_value('email')?>" required is_unique>
						<span class="focus-input100"></span>
					</div>

					<div class="row ml-5 mt-2">
						<div class="container-login100-form-btn ml-3">
                        <input type="submit" name="register" value="Register" class="login100-form-btn" />
						</div>
					</div>

				</div>
                </form>

			</div>
		</div>
	</div>
	

<!--===============================================================================================-->
<script src="<?=base_url('assets/templatelogin2/vendor/jquery/jquery-3.2.1.min.js')?>"></script>
<!--===============================================================================================-->
<script src="<?=base_url('assets/templatelogin2/vendor/animsition/js/animsition.min.js')?>"></script>
<!--===============================================================================================-->
<script src="<?=base_url('assets/templatelogin2/vendor/bootstrap/js/popper.js')?>"></script>
<script src="<?=base_url('assets/templatelogin2/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
<!--===============================================================================================-->
<script src="<?=base_url('assets/templatelogin2/vendor/select2/select2.min.js')?>"></script>
<!--===============================================================================================-->
<script src="<?=base_url('assets/templatelogin2/vendor/daterangepicker/moment.min.js')?>"></script>
<script src="<?=base_url('assets/templatelogin2/vendor/daterangepicker/daterangepicker.js')?>"></script>
<!--===============================================================================================-->
<script src="<?=base_url('assets/templatelogin2/vendor/countdowntime/countdowntime.js')?>"></script>
<!--===============================================================================================-->
<script src="<?=base_url('assets/templatelogin2/js/main.js')?>"></script>

<script src="<?=base_url('assets/templatelogin2/js/jquery-3.2.1.min.js')?>"></script>
	<script src="<?=base_url('assets/templatelogin2/js/main.js')?>"></script>
	
</body>
</html>
