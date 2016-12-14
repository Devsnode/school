
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: "textarea",
        toolbar: "mybutton",
        height: 200,
        width: 500,
        theme: 'modern',
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools codesample'
        ],
        setup: function (editor) {
            editor.addButton('mybutton', {
                text: "IMAGE",
                icon: false,
                onclick: function (e) {
                    console.log($(e.target));
                    if ($(e.target).prop("tagName") == 'BUTTON') {
                        console.log($(e.target).parent().parent().find('input').attr('id'));
                        if ($(e.target).parent().parent().find('input').attr('id') != 'tinymce-uploader') {
                            $(e.target).parent().parent().append('<input id="tinymce-uploader" type="file" name="pic" accept="image/*" style="display:none">');
                        }
                        $('#tinymce-uploader').trigger('click');
                        $('#tinymce-uploader').change(function () {
                            var input, file, fr, img;

                            if (typeof window.FileReader !== 'function') {
                                write("The file API isn't supported on this browser yet.");
                                return;
                            }

                            input = document.getElementById('tinymce-uploader');
                            if (!input) {
                                write("Um, couldn't find the imgfile element.");
                            } else if (!input.files) {
                                write("This browser doesn't seem to support the `files` property of file inputs.");
                            } else if (!input.files[0]) {
                                write("Please select a file before clicking 'Load'");
                            } else {
                                file = input.files[0];
                                fr = new FileReader();
                                fr.onload = createImage;
                                fr.readAsDataURL(file);
                            }

                            function createImage() {
                                img = new Image();
                                img.src = fr.result;
                                editor.insertContent('<img src="' + img.src + '"/>');

                            }

                        });

                    }
                    if ($(e.target).prop("tagName") == 'DIV') {
                        if ($(e.target).parent().find('input').attr('id') != 'tinymce-uploader') {
                            console.log($(e.target).parent().find('input').attr('id'));
                            $(e.target).parent().append('<input id="tinymce-uploader" type="file" name="pic" accept="image/*" style="display:none">');
                        }
                        $('#tinymce-uploader').trigger('click');
                        $('#tinymce-uploader').change(function () {
                            var input, file, fr, img;

                            if (typeof window.FileReader !== 'function') {
                                write("The file API isn't supported on this browser yet.");
                                return;
                            }

                            input = document.getElementById('tinymce-uploader');
                            if (!input) {
                                write("Um, couldn't find the imgfile element.");
                            } else if (!input.files) {
                                write("This browser doesn't seem to support the `files` property of file inputs.");
                            } else if (!input.files[0]) {
                                write("Please select a file before clicking 'Load'");
                            } else {
                                file = input.files[0];
                                fr = new FileReader();
                                fr.onload = createImage;
                                fr.readAsDataURL(file);
                            }

                            function createImage() {
                                img = new Image();
                                img.src = fr.result;
                                editor.insertContent('<img src="' + img.src + '"/>');

                            }

                        });

                    }
                    if ($(e.target).prop("tagName") == 'I') {
                        console.log($(e.target).parent().parent().parent().find('input').attr('id'));
                        if ($(e.target).parent().parent().parent().find('input').attr('id') != 'tinymce-uploader') {
                            $(e.target).parent().parent().parent().append('<input id="tinymce-uploader" type="file" name="pic" accept="image/*" style="display:none">');
                        }
                        $('#tinymce-uploader').trigger('click');
                        $('#tinymce-uploader').change(function () {
                            var input, file, fr, img;

                            if (typeof window.FileReader !== 'function') {
                                write("The file API isn't supported on this browser yet.");
                                return;
                            }

                            input = document.getElementById('tinymce-uploader');
                            if (!input) {
                                write("Um, couldn't find the imgfile element.");
                            } else if (!input.files) {
                                write("This browser doesn't seem to support the `files` property of file inputs.");
                            } else if (!input.files[0]) {
                                write("Please select a file before clicking 'Load'");
                            } else {
                                file = input.files[0];
                                fr = new FileReader();
                                fr.onload = createImage;
                                fr.readAsDataURL(file);
                            }

                            function createImage() {
                                img = new Image();
                                img.src = fr.result;
                                editor.insertContent('<img src="' + img.src + '"/>');

                            }

                        });

                    }

                }
            });
        }});




</script>
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
                    <div class="demo-box">
                        <form action="<?php echo base_url('admin/add-page-content-action'); ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Head Sir Photo</label>
                                <input type="file" name="userfile" class="form-control" >
                                <div class="error"><?php echo form_error('page_name'); ?></div>
                            </div>
                            <div class="form-group">
                                <label>Head Sir Message</label>
                                <br>
                                <input type="hidden" name="id" value="<?php echo $id ?>" >
                                <a class="btn" href="javascript:;" onclick="tinymce.execCommand('mceToggleEditor', false, 'content');"><span>Toggle TinyMCE</span></a>
                                <textarea class="form-control" name="content"></textarea>
                                <div class="error"><?php echo form_error('page_name'); ?></div>
                            </div>
                            
                            <button type="submit" name="submit" class="btn btn-success">Add Information</button>
                        </form>

                    </div>
                </div>


            </div> <!-- end row -->

        </div>
    </div>
    <!-- end row -->

</div>

