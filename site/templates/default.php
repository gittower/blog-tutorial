<?php snippet("html-header"); ?>
<?php snippet("navigation"); ?>

    <div class="row-wrapper">
      <div class="outer-container">
        <article id="full-article">
          <div id="main-image">
            <?php if($page->image('teaser.jpg')){
              echo '<img src="'. $page->image('teaser.jpg')->url() .'" />';
            } ?>
          </div>
          <div id="article-content">
            <div class="meta"><?php echo date("M d, Y", $page->date()) ?> by <?php echo $page->author() ?></div>
            <h1><?php echo $page->title() ?></h1>
            <?php echo $page->text()->kirbytext() ?>
          </div>
        </article>
      </div>
    </div>
    
    <div class="row-wrapper">
      <div class="outer-container">
        <section id="author">
          <div class="author-icon"></div>
          <div class="author-content">
            <h5>About Ralph Grando</h5>
            <p>A man of style, Ralph grew his first moustache in the tender age of 12. Over the years, he has become what can safely be called a "connoisseur" of facial hair.</p>
          </div>
        </section>

        <section id="recommended-reading">
          <h5>Recommended Reading</h5>
          <ul>
            <li><a href="#">Trimming &amp; Clipping: The Basic Techniques</a></li>
            <li><a href="#">An Ode to the Moustache</a></li>
            <li><a href="#">The Horseshoe: A Grown Man's Beard</a></li>
            <li><a href="#">All Articles</a></li>
          </ul>
        </section>
      </div>
    </div>

<?php snippet("footer"); ?>
<?php snippet("html-footer"); ?>