<?php

echo page('posts')->children()->visible()->flip()->limit(10)->feed(array(
  'title'       => 'Latest articles',
  'description' => 'Read the latest news about our company'
));
