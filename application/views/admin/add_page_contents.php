<div class="table-responsive">
    <?php echo $this->session->flashdata('message'); ?>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Page Name</th>
                <th>Has Sub Pages</th>
                <th>Update Page Contents</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pages as $value) { ?>
                <tr>
                    <td><?php echo $value->page_name ?></td>
                    <td><?php echo $value->has_sub_page ? '<span class="mul_pages">Multiple Pages</span>' : '<span class="single_page">Single Page</span>' ?></td>
                    <td><?php echo!$value->has_sub_page ? '<a href="' . base_url('admin/update-single-page-content/' . base64_encode($value->id) . '/' . $value->uri_segment) . '" class="update-content">Update Content</a>' : '<a href="' . base_url('admin/view-multiple-pages/' . $value->id) . '" class="view-subpages">View Sub Pages</a>' ?></td>
                    <td>Action</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>