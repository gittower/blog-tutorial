<?php

kirbytext::$tags['button'] = array(
  'attr' => array(
    'link', 'class'
  ),
  'html' => function($tag) {
    // get attribute values
    $class = $tag->attr('class', 'button');
  	$link = $tag->attr('link', false);
	
  	// generate html output
  	$html  = '<a href="'. url($link) .'" class="'. $class .'">';
    $html .= $tag->attr('button');
    $html .= '</a>';
    
    return $html;
  }
);
