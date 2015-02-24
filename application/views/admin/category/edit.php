
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?php echo empty($categories->id)? 'Thêm loại sản phẩm' : 'Sửa thông tin loại sản phẩm ' . $categories->name; ?></h3>
                </div><!-- /.box-header -->
                <div class="box-body ">
                    <?php echo validation_errors(); ?>
                    <form  action="" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="categoryname">Tên loại sản phẩm</label>
                                <input class="form-control" id="categoryname" placeholder="Tên loại sản phẩm" type="text" name="name" value="<?php echo $categories->name; ?>">
                            </div>
                            <div class="form-group">
                                <label>Loại sản phẩm chứa</label>
                                <select class="form-control" name="id_parent">
                                    <option></option>
                                    <?php foreach($categories_parent as $category_parent): ?>
                                    <option value="<?php echo $category_parent->id; ?>" <?php echo ($categories->id_parent == $category_parent->id)?"selected":null ?>><?php echo $category_parent->name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Mô tả Loại sản phẩm</label>
                                <textarea class="form-control" rows="3" placeholder="Mô tả ..." name="description"><?php echo $categories->description; ?></textarea>
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
