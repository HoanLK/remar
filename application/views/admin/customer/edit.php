<section class="content">
    <div class="row">

        <!-- left column -->
        <div class="box box-primary col-md-12">
            <div class="box-header">
                <h3 class="box-title"><?php echo empty($product->id)? 'Thêm  sản phẩm' : 'Sửa thông tin sản phẩm ' . $product->name; ?></h3>
            </div><!-- /.box-header -->
            <?php echo form_open_multipart(); ?>
            <div class="box-body ">
                <?php echo validation_errors(); ?>
                
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
                            
                    </div><!-- /.box -->

                    <div class="col-md-6 ">
                            <div class="box-body">
                                
                                <div class="form-group">
                                    <label for="img_truoc">Hình ảnh</label>
                                    <input id="img_truoc" name="userfile" type="file">
                                    <br>
                                    <img src="<?php echo (isset($product->img_truoc))? base_url().$product->img_truoc: ''; ?>" alt="" class="img-responsive">
                                    <?php echo (!isset($product->img_truoc))?'<i>Chưa có hình ảnh</i>': ''; ?>
                                </div>
                                
                            </div><!-- /.box-body -->
                    </div><!-- /.box -->
            </div>
            

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Lưu</button> &nbsp;
                <?php echo anchor('admin/product', 'Quay lại' ,'class="btn btn-primary"'); ?>
            </div>
            </form> <!-- /form -->
        </div><!-- /.box -->
    </div>
</section>
