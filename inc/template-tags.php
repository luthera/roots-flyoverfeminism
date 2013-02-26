<?php

// Return post entry meta information
function roots_entry_meta() {
  echo '<p>'. sprintf(__('by %s', 'roots'), get_post_meta(get_the_ID(), 'ff_author', true)) .'</p>';
  echo '<time class="updated" datetime="'. get_the_time('c') .'" pubdate>'. sprintf(__('%s', 'roots'), get_the_date()) .'</time>';
  //echo '<p class="byline author vcard">'. __('Written by', 'roots') .' <a href="'. get_author_posts_url(get_the_author_meta('ID')) .'" rel="author" class="fn">'. get_the_author() .'</a></p>';
}
