<?php print_r($errors); ?>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Sản phẩm</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                    <div class="col-xs-3"><?php echo anchor('admin/product/edit', '<i class="glyphicon glyphicon-plus"></i> Thêm sản phẩm'); ?></div>
                    <form action="" method="post">
                        <div class="col-xs-3">
                            <select class="form-control" name="id_category">
                                <option value="0">--Loại sản phẩm--</option>
                                <?php foreach($categories as $category): ?>
                                <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-xs-1">
                            <input type="submit" name="loc" value="Lọc">
                        </div>
                    </form>
                    <br>
                    <table id="example2" class="table table-hover">
                        <thead>
                            <tr>
                                <th>Tên sản phẩm</th>
                                <th>Loại sản phẩm</th>
                                <th>Giá</th>
                                <th>Kích thước</th>
                                <th>Hình ảnh</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(count($products)): foreach($products as $product): ?>
                                <tr>
                                    <td><?php echo anchor('admin/product/edit/'. $product->id, $product->name); ?></td>
                                    <td><?php $category = $this->category_m->get($product->id_category, true); echo $category?$category->name:null; ?></td>
                                    <td><?php echo $product->gia; ?></td>
                                    <td><?php echo $product->kich_thuoc; ?></td>
                                    <td><img src="<?php echo base_url().$product->img_truoc; ?>" alt="" class="img-responsive" style="width: 8em; height: 5em;"></td>
                                    <td><?php echo btn_edit('admin/product/edit/'. $product->id); ?></td>
                                    <td><?php echo btn_delete('admin/product/delete/'. $product->id); ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="3" >Không có dữ liệu.</td>
                                </tr>

                            <?php endif; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Tên sản phẩm</th>
                                <th>Loại sản phẩm</th>
                                <th>Giá</th>
                                <th>Kích thước</th>
                                <th>Hình ảnh</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                        </tfoot>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
</section><!-- /.content -->