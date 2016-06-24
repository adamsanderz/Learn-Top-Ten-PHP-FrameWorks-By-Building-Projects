<h2 class="page-header">Add Subject</h2>

<?php
echo validation_errors('<p class="alert alert-dismissable alert-danger">');
echo form_open('admin/subjects/add'); ?>
    <div class="form-group">
        <?php
        echo form_label('Subject Name', 'name');

        $data = array(
            'name'      => 'name',
            'id'        => 'id',
            'maxlength' => '100',
            'class'     => 'form-control',
            'value'     => set_value('name')
        );

        echo form_input($data);

        ?>
    </div>
<?php
    echo form_submit('mysubmit', 'Add Subject', array('class' => 'btn btn-primary'));

echo form_close(); ?>
