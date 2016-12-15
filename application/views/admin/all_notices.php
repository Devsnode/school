 <?php // echo $this->session->flashdata('message');?>
<table class="table table-striped m-0">
    <thead>
        <tr>
            <th>#</th>
            <th>Notice Title</th>
            <th>Date</th>
            <!--<th>Notice Details</th>-->
            <!--<th>Image</th>-->
            <th>Edit</th>
            <th>Delete</th>
            <th>Hidden</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($notice->result() as $value) {
            ?>
            <tr>
                <th scope="row">1</th>
                <td><?php echo $value->notice_title; ?></td>
                <td><?php echo $value->date; ?></td>
                <!--<td><?php // echo $value->notice_details; ?></td>-->
                <!--<td><img src="<?php // echo base_url('logo') . '/' . $value->image; ?>" ></td>-->
                <td><a href="<?php echo base_url('admin/update-notice/'.$value->id);?>">Edit</a></td>
                <td><a href="<?php echo base_url('admin/delete-notice/'.$value->id);?>">Delete</a></td>
                <td><input type="checkbox" name="add_to_breaking_news" value="1"></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
