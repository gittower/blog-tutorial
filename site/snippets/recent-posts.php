<?php

// Get all child pages in the "posts" page
$allPosts = $pages->get('posts')->children()->visible();

// we want all but the latest item
$recentPosts = $allPosts->flip()->slice(1);

// cycle through all recent posts
foreach($recentPosts as $recentPost): ?>

<article class="teaser--recent">
  <div class="meta"><?php echo date("M d, Y", $recentPost->date()) ?> by <?php echo $recentPost->author() ?></div>
  <h2><?php echo $recentPost->title() ?></h2>
  <p class="teaser-content"><?php echo $recentPost->text()->kirbytext()->excerpt(150) ?></p>
  <p class="continue-reading"><a href="<?php echo $recentPost->url() ?>">Continue Reading</a></p>
</article>

<?php endforeach; ?>
