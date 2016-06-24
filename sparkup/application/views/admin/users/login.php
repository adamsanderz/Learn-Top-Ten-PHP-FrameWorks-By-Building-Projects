<?php
    $atts = array (
        'id'    => 'login_form',
        'class' => 'form-signin',
        'role'  => 'form'
    );
    echo form_open('admin/users/login', $atts);
?>
    <h2 class="form-signin-heading">Sparkup Admin Login</h2>
    <?php
        echo validation_errors('<p class="alert alert-dismissable alert-danger">');

        if($this->session->flashdata('success')):
            echo '<div class="alert alert-success">'.$this->session->flashdata('success').'</div>';
        endif;
        
        if($this->session->flashdata('error')):
            echo '<div class="alert alert-danger">'.$this->session->flashdata('error').'</div>';
        endif;
    ?>
    <label for="username" class="sr-only">Username</label>
    <input type="text" name="username" id="username" class="form-control" placeholder="John " required autofocus>
    <br/>
    <label for="password" class="sr-only">Password</label>
    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

<?php echo form_close(); ?>
