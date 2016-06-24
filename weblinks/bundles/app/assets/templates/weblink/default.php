<?php $this->layout('app:layout'); ?>


<table class="table table-striped"> 
 
 <tr>
 	
 	<th>Title</th>
     <th>URL</th>
     <th></th>

 </tr>

 <?php foreach ($weblinks as  $weblink) : ?>

 <tr>
 	
 	<td><?php echo $weblink->title; ?> </td>
     <td><?php echo $weblink->url; ?> </td>
     <td><a class="btn btn-success" href="/weblink/view/<?php echo $weblink->id; ?>">View</a> <a class="btn btn-default" href="/weblink/edit/<?php echo $weblink->id; ?>">Edit</a>
     <a class="btn btn-danger" href="/weblink/delete/<?php echo $weblink->id; ?>">Delete</a></td>
     <td> </td>

 </tr>
 
  <?php endforeach; ?>
</table>