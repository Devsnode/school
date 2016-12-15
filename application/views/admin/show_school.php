 <?php echo $this->session->flashdata('message');?>
<table class="table table-striped m-0">
    <thead>
        <tr>
            <th>#</th>
            <th>School Name</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>Logo</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($school_details->result() as $value) {
            ?>
            <tr>
                <th scope="row">1</th>
                <td><?php echo $value->school_name; ?></td>
                <td><?php echo $value->address; ?></td>
                <td><?php echo $value->phone; ?></td>
                <td><img src="<?php echo base_url('logo') . '/' . $value->logo; ?>" ></td>
                <td>
                    <a href="<?php echo base_url('admin/update-school-details/'.$value->id);?>">Edit</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
