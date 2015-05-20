<article class="teaser--top">
  <div class="meta"><?php echo date("M d, Y", $newestPost->date()) ?> by <?php echo $newestPost->author() ?></div>
  <h1><?php echo $newestPost->title() ?></h1>
  <div class="teaser-image"><img src="<?php echo $newestPost->image('teaser.jpg')->url() ?>" /></div>
  <p class="teaser-content"><?php echo $newestPost->text()->kirbytext()->excerpt(c::get('teaser.newest')) ?></p>
  <p class="continue-reading"><a href="<?php echo $newestPost->url() ?>">Continue Reading</a></p>
</article>
