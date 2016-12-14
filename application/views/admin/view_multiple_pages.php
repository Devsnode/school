<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>SubPage Name</th>
                <th>Update Page Contents</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subpages as $value) { ?>
                <tr>
                    <td><?php echo $value->sub_page_name ?></td>
                    <td><?php echo '<a href="' . base_url('admin/update-subpage-content/' . $value->id) . '" class="view-subpages">Update Sub Pages</a>'; ?></td>
                    <td><?php echo '<a href="' . base_url('admin/delete-subpage-content/' . $value->id) . '" class="view-subpages">Delete</a>';?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>