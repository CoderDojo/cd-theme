<?php


$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$context['broken_content'] = explode("<!--more-->", $post->content);

$context['Resources'] = "Resources";

$context['gridtitle'] = "Categories";

Timber::render('page-resources.twig', $context);
