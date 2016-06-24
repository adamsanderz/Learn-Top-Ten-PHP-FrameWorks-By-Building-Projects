<?php $this->layout('app:layout'); ?>

<a href="/" class="btn btn-default">Go Back</a>

<h1> <?php echo $weblink->title; ?></h1>

<ul class="list-group" >

<li class="list-group-item"><strong>URL:</strong> <a href=" <?php  echo $weblink->url  ;?>" target="_blank" ><?php  echo $weblink->url  ;?></a> </li>


<li class="list-group-item"><strong>Username:</strong> <?php echo $weblink->username ; ?> </li>

<li class="list-group-item"><strong>Category:</strong> <?php echo $weblink->category ; ?> </li>






</ul>

<div class="well">
<?php echo $weblink->description ; ?>

</div>