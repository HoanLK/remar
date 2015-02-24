<!DOCTYPE html>
<html>
    
    <!-- Head -->
    <?php $this->load->view('component/head'); ?>
    <!-- End Head -->

    <body>

        <div class="modal show" id="modal-id">
            <div class="modal-dialog">
                <div class="modal-content">
                    
                    <?php $this->load->view($subview);  ?>

                    <div class="modal-footer">
                        &copy; <?php echo date('Y'); ?> <?php echo $meta_title; ?>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        
        <!-- Script -->
        <?php $this->load->view('component/script'); ?>
        <!-- End Script -->
    </body>
</html>