<?php $this->layout('app:layout');?>

<h1>Add Weblink</h1>

<form method="POST" action="/weblink/add">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" id="title" placeholder="Title">
  </div>
 <div class="form-group">
    <label for="url">URL</label>
    <input type="text" class="form-control" name="url" id="url" placeholder="Url">
  </div>

  <div class="form-group">
    <label for="category">Category</label>
    <input type="text" class="form-control" name="category" id="category" placeholder="Category">
  </div>

  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" name="username"id="username" placeholder="username">
  </div>

  <div class="form-group">
    <label for="description">Description</label>
    <textarea type="text" class="form-control" name="description" id="description" placeholder="description"> </textarea>
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>