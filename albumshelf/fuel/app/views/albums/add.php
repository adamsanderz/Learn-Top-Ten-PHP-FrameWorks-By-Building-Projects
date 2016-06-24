<h1 class="page-header">Add Album</h1>
<?php echo Form::open('/albums/add');?>

<p>
	
 <?php echo Form::label('Title' , 'title');?>
<?php echo  Form::input('title' , Input::post('title' , isset($album) ? $album->title: '') , array('class' => 'form-control')); ?>
</p>


<p>
	
 <?php echo Form::label('Artist' , 'artist');?>
<?php echo  Form::input('artist' , Input::post('artist' , isset($album) ? $album->artist: '') , array('class' => 'form-control')); ?>
</p>


<p>
	
 <?php echo Form::label('Genre' , 'genre');?>
<?php echo Form::select('genre' , '0' , array(
  '0' => 'Select',
  'Rock' => 'Rock',
  'Pop' => 'Pop',
  'HipHop' => 'HipHop'
 	),array('class' => 'form-control')); ?>
</p>

<p>
	
 <?php echo Form::label('Year Released' , 'year_released');?>
<?php echo  Form::input('year_released' , Input::post('year_released' , isset($album) ? $album->year_released: '') , array('class' => 'form-control')); ?>
</p>

<p>
	
 <?php echo Form::label('Label' , 'label');?>
<?php echo  Form::input('label' , Input::post('label' , isset($album) ? $album->label: '') , array('class' => 'form-control')); ?>
</p>

<p>
	
 <?php echo Form::label('Cover Url' , 'cover_url');?>
<?php echo  Form::input('cover_url' , Input::post('cover_url' , isset($album) ? $album->cover_url: '') , array('class' => 'form-control')); ?>
</p>

 <?php echo Form::label('Details' , 'details');?>
<?php echo  Form::Textarea('details' , Input::post('details' , isset($album) ? $album->details: '') , array('cols' =>60 , 'rows'=>8 ,  'class' => 'form-control')); ?>
</p>


<div class="actions">
	<?php echo Form::submit('send');?>

</div>


<?php echo Form::close();?>