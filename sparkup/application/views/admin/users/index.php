<div class="row">
    <div class="col-md-12">
        <?php
            if($this->session->flashdata('success')):
                echo '<p class="alert alert-success">'.$this->session->flashdata('success').'</p>';
            endif;
            if($this->session->flashdata('error')):
                echo '<p class="alert alert-dange">'.$this->session->flashdata('error').'</p>';
            endif;
        ?>
    </div>
</div>
<h2 class="page-header">Users</h2>
<?php if($users): ?>
<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Registered</th>
        <th></th>
    </tr>
    <?php foreach($users as $user):
        $date = strtotime($user->create_date);
        $formatted_date = date('F j, Y, g:i a', $date);
        ?>
        <tr>
            <th><?php echo $user->id; ?></th>
            <th><?php echo $user->first_name.' '.$user->last_name; ?></th>
            <th><?php echo $user->username; ?></th>
            <th><?php echo $user->email ?></th>
            <th><?php echo $formatted_date; ?></th>
            <th><?php echo anchor('admin/users/edit/'.$user->id.'', 'Edit', 'class="btn btn-default"'); ?>
                <?php echo anchor('admin/users/delete/'.$user->id.'', 'Delete', 'class="btn btn-danger"'); ?>
            </th>
        </tr>
    <?php endforeach; ?>
</table>
<?php else: ?>
    <p>No Users</p>
    <?php endif; ?>
