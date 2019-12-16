<h2><?= $post['title']; ?></h2>

<small class="post-date">Posted On: <?= $post['created_at']; ?> in </small> <br>
<img class="view-post" src="<?= site_url();?>assets/images/posts/<?=$post['post_image']; ?>">
<div class="post-body">
    <?= $post['body']; ?>
</div>
<hr>

<a class = "btn btn-default pull-left" href="<?= base_url(); ?>posts/edit/<?= $post['slug'] ?>">Edit</a>
<?= form_open('posts/delete/'.$post['id']); ?>
    <input type="submit" value="Delete" class="btn btn-danger">
</form>
<hr>
<h3>Comments</h3>
<?php if($comments) : ?>
    <?php foreach($comments as $comment) : ?>
        <div class="well">
        <p><?= $comment['body']; ?> [by <strong><?= $comment['name'];?></strong>]</p>
        </div>
    <?php endforeach; ?>
    
<?php else : ?>
        <p> No comments! </p>
<?php endif; ?>

<hr>
<h3>Add Comment</h3>
<?= validation_errors(); ?>
<?= form_open('comments/create/'.$post['id']); ?>
<div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control">
    <label>Email</label>
    <input type="text" name="email" class="form-control">
    <label>Body</label>
    <textarea type="text" name="body" class="form-control"></textarea>
    <!-- passing slug -->
    <input type="hidden" name="slug" value="<?= $post['slug']; ?>">

    <button class="btn btn-primary" type="submit">Submit</button>
</div>

</form>