<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="box box-primary col-md-12">
            <div class="box-header">
                <h3 class="box-title"><?php echo empty($product->id)? 'Thêm  sản phẩm' : 'Sửa thông tin sản phẩm ' . $product->name; ?></h3>
            </div><!-- /.box-header -->
            <div class="box-body ">
                <?php echo validation_errors(); ?>
                <form role="form" action="" method="post">
                    <div class="col-md-6 ">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="name">Tên sản phẩm</label>
                                    <input class="form-control" id="name" placeholder="Tên sản phẩm" type="text" value="<?php echo $product->name; ?>" name="name">
                                </div>
                                <div class="form-group">
                                    <label>Loại sản phẩm</label>
                                    <select class="form-control" name="id_category">
                                        <?php foreach($categories as $category): ?>
                                        <option value="<?php echo $category->id; ?>" <?php echo ($product->id_category == $category->id)?"selected":null ?>><?php echo $category->name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="gia">Giá</label>
                                    <input class="form-control" id="gia" placeholder="Giá" type="text" value="<?php echo $product->gia; ?>" name="gia">
                                </div>
                                <div class="form-group">
                                    <label for="giakm">Giá khuyến mãi</label>
                                    <input class="form-control" id="giakm" placeholder="Giá khuyến mãi" type="text" value="<?php echo $product->giakm; ?>" name="giakm">
                                </div>
                                <div class="form-group">
                                    <label>Mô tả sản phẩm</label>
                                    <textarea class="form-control" rows="3" placeholder="Mô tả ..." name="description"><?php echo $product->description; ?></textarea>
                                </div>
                            </div><!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Lưu</button>
                            </div>
                    </div><!-- /.box -->

                    <div class="col-md-6 ">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="img_truoc">Hình ảnh trước</label>
                                    <input id="img_truoc" type="file">
                                </div>
                                <div class="form-group">
                                    <label for="img_sau">Hình ảnh sau</label>
                                    <input id="img_sau" type="file">
                                </div>
                                <div class="form-group">
                                    <label for="img_trai">Hình ảnh trái</label>
                                    <input id="img_trai" type="file">
                                </div>
                                <div class="form-group">
                                    <label for="img_phai">Hình ảnh phải</label>
                                    <input id="img_phai" type="file">
                                </div>
                            </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </form>
            </div>
        </div><!-- /.box -->
    </div>
</section>
