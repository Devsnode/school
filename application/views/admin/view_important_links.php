<?php echo $this->session->flashdata('message'); ?>
<!-- Important Links Start-->
<div class="col-sm-12">
    <div class="page-title-box">

        <h4 class="page-title">Important Links</h4><br><hr>
        <div class="clearfix">
            <table class="table table-striped m-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Website Title</th>
                        <th>Website Links</th>
                        <th>Update</th>
                        <th>Delete</th>
                        <!--<th>Hidden</th>-->
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($important_links->result() as $value) {
                        ?>
                        <tr>
                <form action="<?php echo base_url('admin/update-important-links-action'); ?>" method="post" class="form-group">
                        <input type="hidden" name="id" value="<?php echo $value->id; ?>">
                        <th scope="row"><?php echo $value->id; ?></th>
                        <td><input type="text" name="website_title" class="form-control" value="<?php echo $value->website_title; ?>"></td>
                        <td><input type="text" name="website_links" class="form-control" value="<?php echo $value->website_links; ?>"></td>
                        <td><button type="submit" name="submit" class="btn btn-success">Update</button></td>
                        <td><a href="<?php echo base_url('admin/delete-important-links/' . $value->id); ?>">Delete</a></td>
                        <!--<td><input type="checkbox" name="add_to_breaking_news" value="1"></td>-->
                    </form>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="row m-t-50">
    <div class="col-sm-12 col-xs-12">
        <h4 class="page-title">Add New Links</h4><br><hr>
        <?php echo $this->session->flashdata('message'); ?>
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <div class="demo-box">
                    <form action="<?php echo base_url('admin/important-links-action'); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Website Title</label>
                            <input type="hidden" name="id" value="<?php // echo $notice->id;         ?>">
                            <input type="text" placeholder="Website Title Title" name="website_title" value="<?php // echo $notice->notice_title;            ?>" class="form-control">
                            <div class="error"><?php echo form_error('notice_title'); ?></div>
                        </div>
                        <div class="form-group">
                            <label>Website Links</label>
                            <input type="text" placeholder="Website Links Here" name="website_links" value="<?php // echo $notice->notice_details;            ?>" class="form-control">                                
                            <div class="error"><?php echo form_error('notice_details'); ?></div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div> <!-- end row -->
    </div>
</div>
<!-- Important Links End-->


<div class="col-md-6">
    <div class="page-title-box">

        <h4 class="page-title">Contacts</h4><br><hr>
        <div class="clearfix">
            <table class="table  m-0">
                <thead>
                <th>Contact Info</th>
                <th>Input Fields</th> 
                </thead>
                <tbody>
                    <?php foreach ($contacts->result() as $value) { ?>
                <form action="<?php echo base_url('admin/update-contacts-action'); ?>" method="post" class="form-group">
                        <input type="hidden" name="id" value="<?php echo $value->id; ?>">
                        <tr>
                            <th>Head Master Phone no.</th>
                            <td><input type="text" name="phone_no" class="form-control" value="<?php echo $value->phone_no; ?>"></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><input type="email" name="email" class="form-control" value="<?php echo $value->email; ?>"></td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td><textarea name="address" class="form-control"><?php echo $value->address; ?></textarea></td>
                        </tr>
                        <tr>
                            <th>Update</th>
                            <td><button type="submit" name="submit" class="btn btn-success">Update</button></td>
                        </tr>
                    </form>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

