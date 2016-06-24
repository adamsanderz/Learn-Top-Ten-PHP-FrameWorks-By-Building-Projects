<a href="/" class="btn btn-default">Go back</a>
<div class="pull-right">
<a href="/albums/edit/<?php echo $album->id;?>" class="btn btn-success">Edit</a>

<a href="/albums/delete/<?php echo $album->id;?>" class="btn btn-danger">Delete</a>
</div>

<hr>

<div class="row album">
<div class="col-md-5">
	<img src="<?php echo $album->cover_url;?>">
</div>
	<div class="col-md-7">
    <h3><?php echo $album->title;?></h3>		
  
  <ul class="list-group">
  	
  	<li class="list-group-item"><strong>Artist: <?php echo $album->artist;?></strong></li>

<li class="list-group-item"><strong>Release Date: <?php echo $album->year_released;?></strong></li>

<li class="list-group-item"><strong>Label: <?php echo $album->label;?></strong></li>

<li class="list-group-item"><strong>Genre: <?php echo $album->genre;?></strong></li>


  </ul>

  <div class="well">
  	
  <h3>Other Details</h3>

<?php echo $album->details;?>

  </div>

	</div>


</div>