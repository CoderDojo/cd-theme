<?php

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$context['broken_content'] = explode("<!--more-->", $post->content);

$context['futuremakersImages'] = [ ['src'=>'../wp-content/themes/cd-theme/static/img/languages/Flag_of_Czech_Republic.png', 'alt'=>'Alt desc 2',
 																'link'=>'http://www.coderdojo.com', 'target'=>'_blank','name'=>'', 'role'=>'Czech'],

															 ['src'=>'../wp-content/themes/cd-theme/static/img/languages/Flag_of_Belgium.png', 'alt'=>'Alt desc 2',
														  	 'link'=>'http://www.coderdojo.com', 'target'=>'_blank','name'=>'','role'=>'Dutch'],

															 ['src'=>'../wp-content/themes/cd-theme/static/img/languages/Flag_of_United_Kingdom.png', 'alt'=>'Alt desc 2',
																 'link'=>'http://www.coderdojo.com', 'target'=>'_blank','name'=>'', 'role'=>'English'],

															 ['src'=>'../wp-content/themes/cd-theme/static/img/languages/Flag_of_France.png', 'alt'=>'Alt desc',
														 	 	'link'=>'http://coderdojo.com','target'=>'_blank','name'=>'', 'role'=>'French'],

															 ['src'=>'../wp-content/themes/cd-theme/static/img/languages/Flag_of_Germany.png', 'alt'=>'Alt desc 2',
												        'link'=>'http://coderdojo.com', 'target'=>'_blank','name'=>'', 'role'=>'German'],

															['src'=>'../wp-content/themes/cd-theme/static/img/languages/Flag_of_Hungary.png', 'alt'=>'Alt desc 2',
														    'link'=>'http://coderdojo.com', 'target'=>'_blank','name'=>'','role'=>'Hungarian'],

                              ['src'=>'../wp-content/themes/cd-theme/static/img/languages/Flag_of_Italy.png', 'alt'=>'Alt desc 2',
                                 'link'=>'http://coderdojo.com', 'target'=>'_blank','name'=>'','role'=>'Italian'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/languages/Flag_of_Poland.png', 'alt'=>'Alt desc 2',
                                  'link'=>'http://coderdojo.com', 'target'=>'_blank','name'=>'','role'=>'Polish'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/languages/Flag_of_Romania.png', 'alt'=>'Alt desc 2',
                                   'link'=>'http://coderdojo.com', 'target'=>'_blank','name'=>'','role'=>'Romania'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/languages/Flag_of_Spain.png', 'alt'=>'Alt desc 2',
                                    'link'=>'http://coderdojo.com', 'target'=>'_blank','name'=>'','role'=>'Spanish']
													];

Timber::render('page-futuremakers.twig', $context);
