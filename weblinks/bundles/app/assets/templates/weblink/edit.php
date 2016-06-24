<?php $this->layout('app:layout');?>

<h1>Edit Weblink</h1>

<form method="POST" action="/weblink/edit/<?php echo $weblink->id; ?>">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="<?php echo $weblink->title;?>">
  </div>
 <div class="form-group">
    <label for="url">URL</label>
    <input type="text" class="form-control" name="url" id="url" placeholder="Url" value="<?php echo $weblink->url;?>">
  </div>

  <div class="form-group">
    <label for="category">Category</label>
    <input type="text" class="form-control" name="category" id="category" placeholder="Category" value="<?php echo $weblink->category;?>">
  </div>

  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" name="username"id="username" placeholder="username" value="<?php echo $weblink->username;?>">
  </div>

  <div class="form-group">
    <label for="description">Description</label>
    <textarea type="text" class="form-control" name="description" id="description" placeholder="description" ">
    <?php echo $weblink->description; ?></textarea>
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>