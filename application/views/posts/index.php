<h2><?= $title ?></h2>
<?php foreach($posts as $post) : ?>
    <h3><?= $post['title']; ?></h3>
    <small class="post-date">Posted On: <?= $post['created_at']; ?> </small> <br>

//word_limiter -> helper(text)
    <?= word_limiter ($post['body'], 150); ?>
    <br>
    <br>
    <p> <a class= "btn btn-default" href="<?= site_url('/posts/'.$post['slug']); ?>">Read More</a> </p>
    
<?php endforeach; ?>