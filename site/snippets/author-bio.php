<?php
$authors = array(
  array('name' => 'Ralph Grando', 'bio' => 'A man of style, Ralph grew his first moustache in the tender age of 12. Over the years, he has become what can safely be called a "connoisseur" of facial hair.'),
  array('name' => 'John Doe', 'bio' => 'Another author.'),
);

foreach($authors as $author){
  if($author['name'] == $name){
    echo '<h5>About '. $author['name'] .'</h5>';
    echo '<p>'. $author['bio'] .'</p>';
    break;
  }
}
