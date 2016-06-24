<h1 class="page-header">Edit Album</h1>
<?php echo Form::open('/albums/edit/<?php $album->id; ?>');?>

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
<?php echo Form::select('genre' , $album->genre , array(
  '0' => 'Select',
  'Rock' => 'Rock',
  'Pop' => 'Pop',
  'Rap' => 'Rap'
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
<input type="hidden" name="album_id" value="<?php
echo $album->id; ?> "> 

<div class="actions">
	<?php echo Form::submit('send');?>

</div>


<?php echo Form::close();?>