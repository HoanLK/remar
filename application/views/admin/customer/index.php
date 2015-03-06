<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Thông tin khách hàng</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="example2" class="table table-hover">
                        <thead>
                            <tr>
                                <th>Tên khách hàng</th>
                                <th>SĐT</th>
                                <th>Sản phẩm</th>
                                <th>Thời gian</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(count($customers)): foreach($customers as $customer): ?>
                                <tr>
                                    <td><?php echo $customer->name; ?></td>
                                    <td><?php echo $customer->phone; ?></td>
                                    <td><?php $product = $this->product_m->get($customer->id_product, true); echo $product?$product->name:null; ?></td>
                                    <td><?php echo $customer->time; ?></td>
                                    <td><a href="<?php echo base_url().'admin/customer/read/'.$customer->id; ?>" class="<?php echo (!$customer->read)?'btn btn-primary': 'btn btn-default'; ?>"><?php echo (!$customer->read)?'Chưa đọc': 'Đã đọc'; ?></a></td>
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
                                <th>Tên khách hàng</th>
                                <th>SĐT</th>
                                <th>Sản phẩm</th>
                                <th>Thời gian</th>
                            </tr>
                        </tfoot>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
</section><!-- /.content -->