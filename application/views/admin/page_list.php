<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Page Name</th>
                <th>Has Sub Pages</th>
                <th>Make Multi Pages</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pages as $value) { ?>
                <tr>
                    <td><?php echo $value->page_name ?></td>
                    <td><?php echo $value->has_sub_page ? 'Multiple Pages' : 'Single Page' ?></td>
                    <td><input type="checkbox" class="make_multiple_page" value="1" attr="<?php echo $value->id ?>" <?php echo $value->has_sub_page ? 'checked' : '' ?> ></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>