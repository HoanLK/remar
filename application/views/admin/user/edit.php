
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?php echo empty($user->id)? 'Thêm User' : 'Sửa thông tin user ' . $user->name; ?></h3>
                </div><!-- /.box-header -->
                <div class="box-body ">
                    <?php echo validation_errors(); ?>
                    <form  action="" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input class="form-control" id="username" placeholder="Username" type="text" name="username" value="<?php echo $user->username; ?>">
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input class="form-control" id="name" placeholder="Name" type="text" name="name" value="<?php echo $user->name; ?>">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control" id="password" placeholder="Password" type="password" name="password" >
                            </div>
                            <div class="form-group">
                                <label for="password_confirm">Confirm Password</label>
                                <input class="form-control" id="password_confirm" placeholder="Password confirm" type="password" name="password_confirm">
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Lưu</button>
                        </div>
                    </form>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
