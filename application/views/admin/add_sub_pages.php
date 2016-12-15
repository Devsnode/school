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
                        <form action="<?php echo base_url('admin/add-sub-page-action'); ?>" method="post">
                            <div class="form-group">
                                <label>Create Sub Page Under</label>
                                <select class="form-control" name="main_page">
                                    <option value="">Select Page</option>
                                    <?php foreach ($pages as $value) { ?>
                                        <option value="<?php echo $value->id?>"><?php echo $value->page_name?></option>
                                    <?php } ?>
                                </select>
                                <div class="error"><?php echo form_error('main_page'); ?></div>
                            </div>
                            <div class="form-group">
                                <label>Sub Page Name</label>
                                <input type="text" placeholder="Sub Page Name Here" name="sub_page_name" value="<?php echo set_value('sub_page_name'); ?>" class="form-control">
                                <div class="error"><?php echo form_error('sub_page_name'); ?></div>
                            </div>

                            <button type="submit" name="submit" class="btn btn-success">Add Sub Page</button>
                        </form>

                    </div>
                </div>


            </div> <!-- end row -->

        </div>
    </div>
    <!-- end row -->

</div>