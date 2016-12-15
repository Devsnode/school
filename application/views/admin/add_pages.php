<div class="card-box">

    <div class="row">
        <div class="col-sm-12 col-xs-12">




        </div>
    </div>
    <!-- end row -->

    <div class="row m-t-50">
        <div class="col-sm-12 col-xs-12">

            <?php echo $this->session->flashdata('message'); ?>

            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <div class="demo-box">
                        <form action="<?php echo base_url('admin/add-page-action'); ?>" method="post">
                            <div class="form-group">
                                <label>Page Name</label>
                                <input type="text" placeholder="Page Name Here" name="page_name" value="<?php echo set_value('page_name'); ?>" class="form-control">
                                <div class="error"><?php echo form_error('page_name'); ?></div>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="has_sub_page" value="1" class="checkbox-inline"> Has Sub Pages 
                            </div>
                            <button type="submit" name="submit" class="btn btn-success">Add Page</button>
                        </form>

                    </div>
                </div>


            </div> <!-- end row -->

        </div>
    </div>
    <!-- end row -->

</div>