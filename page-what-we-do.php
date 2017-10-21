<?php

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$context['broken_content'] = explode("<!--more-->", $post->content);

$context['howtoImages'] = [
  [
    'src'=>'../wp-content/themes/cd-theme/static/img/users/ninja.jpg',
    'alt'=>'Alt desc 2',
    'name'=>'How Do I Attend?',
    'link'=>'http://www.coderdojo.com/attend-a-dojo/'
  ], [
    'src'=>'../wp-content/themes/cd-theme/static/img/users/volunteer.jpg',
    'alt'=>'Alt desc 2',
    'link'=>'http://www.coderdojo.com/volunteer',
    'name'=>'How Do I Volunteer?'
  ], [
    'src'=>'../wp-content/themes/cd-theme/static/img/users/champion.jpg',
    'alt'=>'Alt desc 2',
    'link'=>'http://www.coderdojo.com/start-a-dojo/',
    'name'=>'How Do I Start A Dojo?'
  ]
];

Timber::render('page-what-we-do.twig', $context);
