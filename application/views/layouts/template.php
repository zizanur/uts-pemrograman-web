<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="<?= base_url('assets/favicon.png')?>">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="<?= base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="<?= base_url('assets/css/tiny-slider.css')?>" rel="stylesheet">
		<link href="<?= base_url('assets/css/style.css')?>" rel="stylesheet">
		<title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
	</head>

	<body>

	
		<!-- Start Header/Navigation -->

			<?php $this->load->view('layouts/navbar'); ?>
		
		<!-- End Header/Navigation -->

			<?= isset($content) ? $content : '' ?>

		<!-- Start Footer Section -->
		
			<?php $this->load->view('layouts/footer'); ?>
		
		<!-- End Footer Section -->	


		<script src="<?= base_url('assets/js/bootstrap.bundle.min.js')?>"></script>
		<script src="<?= base_url('assets/js/tiny-slider.js')?>"></script>
		<script src="<?= base_url('assets/js/custom.js')?>"></script>
	</body>

</html>
