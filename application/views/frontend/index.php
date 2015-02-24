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
			<?php $this->load->view('frontend/layout/slideshow'); ?>
			<!-- / SlideShow -->
			<!-- Content -->
			<div class="container-fluid">
				<div class="row">
					<div class="page-header">
						<h4>SẢN PHẨM TIÊU BIỂU</h4>
					</div>

					<div class="container-fluid ">
						<?php for($i=1; $i<=8; $i++): ?>
							<div class="col-xs-12 col-sm-4 col-md-3 text-center">
								<img src="<?php echo base_url(); ?>public/images/product/ghe.jpeg" class="img-responsive center-block" alt="Responsive image">
								<p class="text-capitalize"><a href="#" title="">Ghế</a></p>
								<p><b>300.000 VNĐ</b></p>
								<p><button type="button" class="btn btn-warning">Chi tiết  <span class="glyphicon glyphicon-play-circle"></span></button></p>
							</div>
						<?php endfor; ?>
					</div>

				</div>
			</div>

			<!-- End Content -->


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