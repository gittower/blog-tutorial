<?php snippet("html-header") ?>

  <?php snippet("navigation") ?>
  
    <div class="row-wrapper">
      <div class="outer-container">
        <?php snippet("newest-post") ?>
      </div>
    </div>
    
    <div class="row-wrapper">
      <div class="outer-container">
        <section id="recent-posts">
          <?php snippet("recent-posts") ?>
        </section>

        <section id="subscribe">
          <div class="note">
            <h3>Don't miss the next moustache!</h3>
            <p>Follow us on <a href="http://www.twitter.com/gittower">Twitter</a> or subscribe via <a href="#">RSS</a>.</p>
          </div>
          <div class="follow">
            <a href="#" class="button button--twitter"></a>
            <a href="#" class="button button--rss">Subscribe</a>
          </div>
        </section>
      </div>
    </div>
    
    <?php snippet("about-us"); ?>
    <?php snippet("footer"); ?>

<?php snippet("html-footer") ?>