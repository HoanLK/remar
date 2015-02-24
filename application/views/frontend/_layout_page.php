<!DOCTYPE html>
<html>
<?php $this->load->view('component_page/head'); ?>

<body class="lk-page-body">
	<div class="container col-md-8 col-md-offset-2 lk-sm-body">
		
		<!-- Header -->
		<?php $this->load->view('frontend/layout/header'); ?>
		<!-- /Header -->


		<!-- Main -->
		<div class="row">
			<!-- SlideShow -->
			<?php //$this->load->view('frontend/layout/slideshow'); ?>
			<!-- / SlideShow -->
			
			<!-- Sidebar -->
			<div class="col-md-3 hidden-xs hidden-sm" >
				<?php $this->load->view('frontend/layout/sidebar'); ?>
			</div>
			<!-- / Sidebar -->

			<!-- Content -->
			<div class="col-md-9" style="top: -2em">
				<?php $this->load->view($subview); ?>
			</div>

			<!-- / Content -->


		</div>
		<!-- End Main -->


		<!-- Footer -->
		<hr>

	    <footer>
	    <?php $this->load->view('frontend/layout/footer'); ?>
	    </footer>
		<!-- End Footer -->
		
		<?php $this->load->view('component_page/script'); ?>
	</div>
</body>
</html>