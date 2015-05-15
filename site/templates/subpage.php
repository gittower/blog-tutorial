<?php snippet("html-header"); ?>
<?php snippet("navigation"); ?>

<div class="row-wrapper">
  <div class="outer-container">
	<div class="subpage-content">
	  <h1><?php echo $page->title(); ?></h1>
	  <?php echo $page->text()->kirbytext(); ?>
	</div>
  </div>
</div>

<?php snippet("footer"); ?>
<?php snippet("html-footer"); ?>