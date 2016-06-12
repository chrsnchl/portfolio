<?php foreach($blog_posts as $post):?>
    <div class="post">
    <h2><?php echo $post['title']; ?></h2>
    <div class="copy">
         <?php echo $post['post']; ?>
    </div>
    </div>
<?php endforeach; ?>
