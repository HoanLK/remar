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
						<?php foreach($sptbs as $sptb): ?>
							<?php foreach($sptb as $product): ?>
								<div class="col-xs-12 col-sm-3 col-md-3 text-center">
									<a href="<?php echo base_url(); ?><?php echo 'page/product/'.$product->id; ?>" title=""><img src="<?php echo base_url(); ?><?php echo $product->img_truoc; ?>" class="img-responsive center-block" alt="Responsive image" style="width: 15em; height: 12em;"></a>
									<br>
									<p class="text-capitalize"><a href="<?php echo base_url(); ?><?php echo 'page/product/'.$product->id; ?>" title=""><?php echo $product->name; ?></a></p>
									<p><b>300.000 VNĐ</b></p>
									<p><a href="<?php echo base_url(); ?><?php echo 'page/product/'.$product->id; ?>" class="btn btn-warning">Chi tiết  <span class="glyphicon glyphicon-play-circle"></span></a></p>
									<br>
									<br>
								</div>
							<?php endforeach; ?>
						<?php endforeach; ?>
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