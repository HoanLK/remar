<div class="page-header">
	<h3 class="text-uppercase"><?php echo isset($product)?$product->name:null; ?></h3>
</div>
<div class="row">
	<div class="container-fluid ">
		<div class="col-md-8">
			<div class="mag">
                <img data-toggle="magnify" src="<?php echo base_url(); ?><?php echo $product->img_truoc; ?>" alt="" class="img-responsive center-block">
            </div>
            <br>
            <p style="color: red;"><em>(*) Để được tư vấn trực tiếp về sản phẩm. 
            <b>Quý khách</b> vui lòng nhấn <kbd style="background: #EC971F;">Tư vấn - Mua hàng</kbd> và để lại thông tin. Xin cảm ơn!</em></p>

		</div>

		<div class="col-md-4">
			<div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Thông tin chung</h3>
                </div>
                <br>
                <div style="margin-left: 1em;">
                	<div><b>  Giá</b>: <?php echo $product->gia; ?> <b><em>VNĐ</em></b></div> <br>
                	<div><b>Vật liệu: </b> Gỗ xà cừ</div><br>
                	<div><b>Size: </b> D2000 - R16000</div>
                </div>
                <div class="panel-footer">
                	<button type="button" class="btn btn-warning"><b>* Tư vấn - Mua hàng</b></button>
               	</div>
            </div>
		</div>
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading" style="background-color: #808080;">
                <h3 class="panel-title">Thông tin chi tiết</h3>
                <span class="pull-right">
                    <!-- Tabs -->
                    <ul class="nav panel-tabs">
                        <li class="active"><a href="#tab1" data-toggle="tab">Vật liệu</a></li>
                        <li><a href="#tab2" data-toggle="tab">Kích thước</a></li>
                        <li><a href="#tab3" data-toggle="tab">Mô tả</a></li>
                        <li><a href="#tab4" data-toggle="tab">Hướng dẫn</a></li>
                    </ul>
                </span>
            </div>
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="tab1">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At</div>
                    <div class="tab-pane" id="tab2">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</div>
                    <div class="tab-pane" id="tab3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</div>
                    <div class="tab-pane" id="tab4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.

                        Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet,</div>
                </div>
            </div>
        </div>
    </div>
</div>