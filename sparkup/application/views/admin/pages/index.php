<h2 class="page-header">Pages</h2>
<?php
if($this->session->flashdata('success')):

    echo '<div class="alert alert-success">'.$this->session->flashdata('success').'</div>';

endif;

if($this->session->flashdata('error')):

    echo '<div class="alert alert-danger">'.$this->session->flashdata('error').'</div>';

endif;

if($pages):
?>
<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Published</th>
        <th>Title</th>
        <th>Author</th>
        <th>Date Created</th>
        <th></th>
    </tr>
    <?php foreach($pages as $page):
        if($page->is_published):
            $publish_icon = 'glyphicon glyphicon-ok';
        else:
            $publish_icon = 'glyphicon glyphicon-remove';
        endif;
        $date = strtotime($page->create_date);
        $formatted_date = date('F j, Y, g:i a', $date);
        ?>
        <tr>
            <th><?php echo $page->id; ?></th>
            <th><span class="<?php echo $publish_icon ?>"></span></th>
            <th><?php echo $page->title; ?></th>
            <th><?php echo get_user_full_name($page->user_id); ?></th>
            <th><?php echo $formatted_date; ?></th>
            <th><?php echo anchor('admin/pages/edit/'.$page->id.'', 'Edit', 'class="btn btn-default"'); ?>
                <?php echo anchor('admin/pages/delete/'.$page->id.'', 'Delete', 'class="btn btn-danger"'); ?>
            </th>
        </tr>
    <?php endforeach; ?>
</table>
<?php else: ?>
    <p>No Pages</p>
    <?php endif; ?>
