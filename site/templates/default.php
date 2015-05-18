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
            <?php snippet('author-bio', array('name' => $page->author()))?>
          </div>
        </section>
        <section id="recommended-reading">
          <h5>Recommended Reading</h5>
          <ul>
            <?php
            $recommendedArticles = $page->recommendedreading()->yaml();
            foreach($recommendedArticles as $recommendedArticle): 
              $recommendedArticlePage = $pages->find($recommendedArticle);
            ?>
              <li><a href="<?php echo $recommendedArticlePage->url() ?>"><?php echo $recommendedArticlePage->title() ?></a></li>
            <?php endforeach; ?>
          </ul>
        </section>
      </div>
    </div>

<?php snippet("footer"); ?>
<?php snippet("html-footer"); ?>