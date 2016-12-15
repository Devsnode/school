<div class="card-box">

    <div class="row">
        <div class="col-sm-12 col-xs-12">
            

       

        </div>
    </div>
    <!-- end row -->

    <div class="row m-t-50">
        <div class="col-sm-12 col-xs-12">

             <?php echo $this->session->flashdata('message');?>

            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <div class="demo-box">
                        <form action="<?php echo base_url('admin/add-school-action');?>" method="post">
                            <div class="form-group">
                                <label>School Name</label>
                                <input type="text" placeholder="School Name Here" name="school_name" value="<?php echo set_value('school_name');?>" class="form-control">
                                <div class="error"><?php echo form_error('school_name'); ?></div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-success">Add School Name</button>
                        </form>

                    </div>
                </div>

                
            </div> <!-- end row -->

        </div>
    </div>
    <!-- end row -->

</div>