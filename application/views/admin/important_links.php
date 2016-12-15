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
                        <form action="<?php echo base_url('admin/important-links-action'); ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Website Title</label>
                                <input type="hidden" name="id" value="<?php // echo $notice->id; ?>">
                                <input type="text" placeholder="Website Title Title" name="website_title" value="<?php // echo $notice->notice_title;    ?>" class="form-control">
                                <div class="error"><?php echo form_error('notice_title');    ?></div>
                            </div>
                            <div class="form-group">
                                <label>Website Links</label>
                                <input type="text" placeholder="Website Links Here" name="website_links" value="<?php // echo $notice->notice_details;    ?>" class="form-control">                                
                                <div class="error"><?php echo form_error('notice_details');    ?></div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div> <!-- end row -->
        </div>
    </div>
    <!-- end row -->
</div>
