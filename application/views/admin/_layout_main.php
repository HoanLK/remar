<!DOCTYPE html>
<html>
    
    <!-- Head -->
    <?php $this->load->view('component/head'); ?>
    <!-- End Head -->

    <body class="skin-blue">
        <!-- Header -->
        <?php $this->load->view('admin/layout/header'); ?>
        <!-- End Header -->

        <!-- Main -->
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Sidebar -->
            <?php $this->load->view('admin/layout/sidebar'); ?>
            <!-- End Sidebar -->

            <!-- Right side column -->
            <aside class="right-side">
                <section class="content">
                    <?php $this->load->view($subview); ?>
                </section><!-- /.content -->
                
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- End Main -->


        <!-- Script -->
        <?php $this->load->view('component/script'); ?>
        <!-- End Script -->

    </body>
</html>
