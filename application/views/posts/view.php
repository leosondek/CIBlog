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