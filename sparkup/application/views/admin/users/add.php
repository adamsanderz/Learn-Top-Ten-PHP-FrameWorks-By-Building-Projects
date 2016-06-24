<h2 class="page-header">Add User</h2>


<?php
echo validation_errors('<p class="alert alert-dismissable alert-danger">');
echo form_open('admin/users/add'); ?>

    <!-- First Name -->
    <div class="form-group">
    <?php
        echo form_label('First Name', 'first_name');

        $data = array(
            'name'      => 'first_name',
            'id'        => 'first_name',
            'maxlength' => '50',
            'class'     => 'form-control',
            'value'     => set_value('first_name')
        );

        echo form_input($data);
    ?>
    </div>

    <!-- Last Name -->
    <div class="form-group">
    <?php
        echo form_label('Last Name', 'last_name');

        $data = array(
            'name'      => 'last_name',
            'id'        => 'last_name',
            'maxlength' => '50',
            'class'     => 'form-control',
            'value'     => set_value('last_name')
        );

        echo form_input($data);
    ?>
    </div>

    <!-- Username -->
    <div class="form-group">
    <?php
        echo form_label('Username', 'username');

        $data = array(
            'name'      => 'username',
            'id'        => 'username',
            'maxlength' => '20',
            'class'     => 'form-control',
            'value'     => set_value('username')
        );

        echo form_input($data);
    ?>
    </div>

    <!-- Email -->
    <div class="form-group">
    <?php
        echo form_label('Email', 'email');

        $data = array(
            'name'      => 'email',
            'id'        => 'email',
            'maxlength' => '150',
            'class'     => 'form-control',
            'value'     => set_value('email')
        );

        echo form_input($data);
    ?>
    </div>

    <!-- Password -->
    <div class="form-group">
    <?php
        echo form_label('Password', 'password');

        $data = array(
            'name'      => 'password',
            'id'        => 'password',
            'maxlength' => '30',
            'class'     => 'form-control',
            'value'     => set_value('password')
        );

        echo form_password($data);
    ?>
    </div>


    <!-- Confirm Password -->
    <div class="form-group">
    <?php
        echo form_label('Confirm Password', 'password2');

        $data = array(
            'name'      => 'password2',
            'id'        => 'password2',
            'maxlength' => '30',
            'class'     => 'form-control',
            'value'     => set_value('password2')
        );

        echo form_password($data);
    ?>
    </div>


<?php
    echo form_submit('mysubmit', 'Add User', array('class' => 'btn btn-primary'));

echo form_close(); ?>
