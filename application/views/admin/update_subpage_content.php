
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({selector: 'textarea'});</script>
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
                    <a class="btn" href="javascript:;" onclick="tinymce.execCommand('mceToggleEditor', false, 'content');"><span>Toggle TinyMCE</span></a>
                    <div class="demo-box">
                        <form action="<?php echo base_url('admin/add-subpage-content-action'); ?>" method="post">
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $id ?>" >
                                <textarea class="form-control" name="content"></textarea>
                                <div class="error"><?php echo form_error('page_name'); ?></div>
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

