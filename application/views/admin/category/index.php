<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Loại sản phẩm</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                    <?php echo anchor('admin/category/edit', '<i class="glyphicon glyphicon-plus"></i> Thêm loại sản phẩm'); ?>
                    <br>
                    <table id="example2" class="table table-hover">
                        <thead>
                            <tr>
                                <th>Tên loại sản phẩm</th>
                                <th>Loại sản phẩm chứa</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(count($categories)): foreach($categories as $category): ?>
                                <tr>
                                    <td><?php echo anchor('admin/category/edit/'. $category->id, $category->name); ?></td>
                                    <td><?php $parent = $this->category_m->get($category->id_parent, true); echo $parent?$parent->name:null; ?></td>
                                    <td><?php echo btn_edit('admin/category/edit/'. $category->id); ?></td>
                                    <td><?php echo btn_delete('admin/category/delete/'. $category->id); ?></td>
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
                                <th>Tên loại sản phẩm</th>
                                <th>Loại sản phẩm chứa</th>
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