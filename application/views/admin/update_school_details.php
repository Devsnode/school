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
                        <form action="<?php echo base_url('admin/update-school-action');?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>School Name</label>
                                <input type="hidden" name="id" value="<?php echo $school_details->id; ?>">
                                <input type="text" placeholder="School Name Here" name="school_name" value="<?php echo $school_details->school_name; ?>" class="form-control">
                                <div class="error"><?php echo form_error('school_name'); ?></div>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" placeholder="Address" name="address" value="<?php echo $school_details->address; ?>" class="form-control">
                                <div class="error"><?php echo form_error('address'); ?></div>
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" placeholder="Phone Number" name="phone" value="<?php echo $school_details->phone; ?>" class="form-control">
                                <div class="error"><?php echo form_error('phone'); ?></div>
                            </div>
                            <div class="form-group">
                                <label>Logo</label>
                                <input type="file"  name="userfile" value="<?php ?>" class="">
                                <div class="error"><?php echo form_error('logo'); ?></div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-success">Update School Details</button>
                        </form>

                    </div>
                </div>

                
            </div> <!-- end row -->

        </div>
    </div>
    <!-- end row -->

</div>
