<?php

return function($site, $pages, $page) {

  // get all child pages in the "posts" page
  $allPosts = $pages->get('posts')->children()->visible();
  // newest post for the top of the list
  $newestPost = $allPosts->last();
  // recent posts
  $recentPosts = $allPosts->flip()->slice(1);
  
  // pass variables to the template
  return compact('newestPost', 'recentPosts');
};
