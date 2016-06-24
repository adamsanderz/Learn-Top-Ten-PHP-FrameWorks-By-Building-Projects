<h2 class="page-header">Subjects</h2>
<?php
if($this->session->flashdata('success')):

    echo '<div class="alert alert-success">'.$this->session->flashdata('success').'</div>';

endif;
if($this->session->flashdata('error')):

    echo '<div class="alert alert-danger">'.$this->session->flashdata('error').'</div>';

endif;

if($subjects):
?>
<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Date Created</th>
        <th></th>
    </tr>
    <?php foreach($subjects as $subject):
        $date = strtotime($subject->create_date);
        $formatted_date = date('F j, Y, g:i a', $date);
        ?>
        <tr>
            <th><?php echo $subject->id; ?></th>
            <th><?php echo $subject->name; ?></th>
            <th><?php echo $formatted_date; ?></th>
            <th><?php echo anchor('admin/subjects/edit/'.$subject->id.'', 'Edit', 'class="btn btn-default"'); ?>
                <?php echo anchor('admin/subjects/delete/'.$subject->id.'', 'Delete', 'class="btn btn-danger"'); ?>
            </th>
        </tr>
    <?php endforeach; ?>
</table>
<?php else: ?>
    <p>No Subjects</p>
    <?php endif; ?>
