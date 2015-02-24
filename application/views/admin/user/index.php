<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Users</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                    <?php echo anchor('admin/user/edit', '<i class="glyphicon glyphicon-plus"></i> Thêm một người dùng'); ?>
                    <br>
                    <table id="example2" class="table table-hover">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(count($users)): foreach($users as $user): ?>
                                <tr>
                                    <td><?php echo anchor('admin/user/edit/'. $user->id, $user->username); ?></td>
                                    <td><?php echo btn_edit('admin/user/edit/'. $user->id); ?></td>
                                    <td><?php echo btn_delete('admin/user/delete/'. $user->id); ?></td>
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
                                <th>Username</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </tfoot>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
</section><!-- /.content -->