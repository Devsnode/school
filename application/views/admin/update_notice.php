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
                        <form action="<?php echo base_url('admin/update-notice-action'); ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Notice Title</label>
                                <input type="hidden" name="id" value="<?php echo $notice->id;?>">
                                <input type="text" placeholder="Add Notice Title" name="notice_title" value="<?php echo $notice->notice_title;   ?>" class="form-control">
                                <div class="error"><?php echo form_error('notice_title');   ?></div>
                            </div>
                            <div class="form-group">
                                <label>Notice Details</label>
                                <textarea placeholder="Notice Details Here" name="notice_details" value="" class="form-control"><?php echo $notice->notice_details;?></textarea>                                
                                <div class="error"><?php echo form_error('notice_details');   ?></div>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file"  name="userfile" value="<?php ?>" class="">
                                <div class="error"><?php // echo form_error('userfile'); ?></div>
                            </div>
                            <div class="form-group">
                                <label>Add to Breaking News</label>
                                <input type="checkbox" name="add_to_breaking_news" value="1" <?php echo $notice->add_to_breaking_news==1?'checked':'';?>>
                            </div>
                            <button type="submit" name="submit" class="btn btn-success">Send Notice</button>
                        </form>
                    </div>
                </div>
            </div> <!-- end row -->
        </div>
    </div>
    <!-- end row -->
</div>
