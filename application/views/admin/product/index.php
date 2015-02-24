<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Sản phẩm</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                    <?php echo anchor('admin/product/edit', '<i class="glyphicon glyphicon-plus"></i> Thêm sản phẩm'); ?>
                    <br>
                    <table id="example2" class="table table-hover">
                        <thead>
                            <tr>
                                <th>Tên sản phẩm</th>
                                <th>Loại sản phẩm</th>
                                <th>Giá</th>
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