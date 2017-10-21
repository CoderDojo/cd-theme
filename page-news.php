<?php

global $paged;
if (!isset($paged) || !$paged){
  $paged = 1;
}
$context = Timber::get_context();
$args = array(
  'posts_per_page' => 10,
  'paged' => $paged
);

query_posts($args);
$context['posts'] = Timber::get_posts();
$context['pagination'] = Timber::get_pagination();
Timber::render('page-news.twig', $context);
