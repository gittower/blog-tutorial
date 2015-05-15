<div class="row-wrapper">
  <div class="outer-container">
    <header>
      <div id="logo">
        <img src="<?php echo url('assets/images/logo.svg'); ?>" />
      </div>
      <nav>
        <a href="<?php echo url('home'); ?>">Home</a>
      	<?php foreach($pages->visible() as $mainpage): ?>
      	  <a href="<?php echo $mainpage->url(); ?>">
            <?php echo $mainpage->title(); ?>
      	  </a>
      	<?php endforeach; ?>
      </nav>
    </header>
  </div>
</div>
  