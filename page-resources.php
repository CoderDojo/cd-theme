<?php


$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$context['broken_content'] = explode("<!--more-->", $post->content);

$context['grid'] = [ ['src'=>'http://placehold.it/350x150', 'alt'=>'Alt desc',
                      'link'=>'http://coderdojo.org','target'=>'_blank'],
                     ['src'=>'http://placehold.it/350x150', 'alt'=>'Alt desc 2',
                      'link'=>'http://coderdojo.org', 'target'=>'_self'],
                     ['src'=>'http://placehold.it/350x150', 'alt'=>'Alt desc 2',
                      'link'=>'http://coderdojo.org', 'target'=>'_self'],
                     ['src'=>'http://placehold.it/350x150', 'alt'=>'Alt desc 2',
                      'link'=>'http://coderdojo.org', 'target'=>'_self'],
                     ['src'=>'http://placehold.it/350x150', 'alt'=>'Alt desc 2',
                      'link'=>'http://coderdojo.org', 'target'=>'_self'],
                     ['src'=>'http://placehold.it/350x150', 'alt'=>'Alt desc 2',
                      'link'=>'http://coderdojo.org', 'target'=>'_self'],
                     ['src'=>'http://placehold.it/350x150', 'alt'=>'Alt desc 2',
                      'link'=>'http://coderdojo.org', 'target'=>'_self'],
                     ['src'=>'http://placehold.it/350x150', 'alt'=>'Alt desc 2',
                      'link'=>'http://coderdojo.org', 'target'=>'_self'],
                     ['src'=>'http://placehold.it/350x150', 'alt'=>'Alt desc 2',
                      'link'=>'http://coderdojo.org', 'target'=>'_self'],
                     ['src'=>'http://placehold.it/350x150', 'alt'=>'Alt desc 2',
                      'link'=>'http://coderdojo.org', 'target'=>'_self'],
                     ['src'=>'http://placehold.it/350x150', 'alt'=>'Alt desc 2',
                      'link'=>'http://coderdojo.org', 'target'=>'_self'],
                     ['src'=>'http://placehold.it/350x150', 'alt'=>'Alt desc 2',
                      'link'=>'http://coderdojo.org', 'target'=>'_self']
                  ];
$context['gridtitle'] = "Categories";

Timber::render('page-resources.twig', $context);
