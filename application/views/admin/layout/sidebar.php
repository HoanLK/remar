<aside class="left-side sidebar-offcanvas">
    <section class="sidebar">
        <!-- Search -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Tìm kiếm..."/>
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- End Search -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="">
                <a href="<?php echo base_url(); ?>admin/customer">
                    <i class="fa fa-users"></i> <span>Khách hàng</span>
                </a>
            </li>
            <li class="">
                <a href="<?php echo base_url(); ?>admin/user">
                    <i class="fa fa-users"></i> <span>Người dùng</span>
                </a>
            </li>
            <li class="">
                <a href="<?php echo base_url(); ?>admin/category">
                    <i class="fa fa-cubes"></i> <span>Loại sản phẩm</span>
                </a>
            </li>
            <li class="">
                <a href="<?php echo base_url(); ?>admin/product">
                    <i class="fa fa-cube"></i> <span>Sản phẩm</span>
                </a>
            </li>

        </ul>
        <!-- End Sidebar Menu -->
    </section>
</aside>