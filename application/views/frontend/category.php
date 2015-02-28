<div class="page-header">
	<h3 class="text-uppercase"><?php echo isset($category)?$category->name:null; ?></h3>
</div>
<div class="row">
	<div class="container-fluid ">
		<?php if(isset($products) && count($products)):  foreach($products as $product): ?>
			<div class="col-xs-12 col-sm-4 col-md-4 text-center">
				<a href="<?php echo base_url(); ?><?php echo 'page/product/'.$product->id; ?>" title=""><img src="<?php echo base_url(); ?><?php echo $product->img_truoc; ?>" class="img-responsive center-block" alt="Responsive image" style="width: 15em; height: 12em;"></a>
				<br>
				<p class="text-capitalize"><a href="<?php echo base_url(); ?><?php echo 'page/product/'.$product->id; ?>" title=""><?php echo $product->name; ?></a></p>
				<p><b>300.000 VNĐ</b></p>
				<p><a href="<?php echo base_url(); ?><?php echo 'page/product/'.$product->id; ?>" class="btn btn-warning">Chi tiết  <span class="glyphicon glyphicon-play-circle"></span></a></p>
				<br>
				<br>
			</div>
		<?php endforeach; ?>
		<?php else: ?>
			<h4><em>Xin lỗi! Chưa có sản phẩm cho mục này.</em></h4>
		<?php endif; ?>
	</div>
</div>