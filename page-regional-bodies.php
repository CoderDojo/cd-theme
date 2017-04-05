<?php

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$context['broken_content'] = explode("<!--more-->", $post->content);

$context['regionalImages'] = [ ['src'=>'../wp-content/themes/cd-theme/static/img/regional-bodies/coderdojo-indiana.png', 'alt'=>'Alt desc 2',
 																'link'=>'http://www.techpointyouth.org/coderdojo/', 'target'=>'_blank','name'=>'CoderDojo', 'role'=>'Indiana'],

															 ['src'=>'../wp-content/themes/cd-theme/static/img/regional-bodies/coderdojo-japan.png', 'alt'=>'Alt desc 2',
														  	 'link'=>'http://www.coderdojo.jp/', 'target'=>'_blank','name'=>'CoderDojo','role'=>'Japan'],

															 ['src'=>'../wp-content/themes/cd-theme/static/img/regional-bodies/coderdojo-nl.png', 'alt'=>'Alt desc 2',
																 'link'=>'http://www.coderdojo.nl/', 'target'=>'_blank','name'=>'CoderDojo', 'role'=>'Netherlands'],

															 ['src'=>'../wp-content/themes/cd-theme/static/img/regional-bodies/coderdojo-wa.png', 'alt'=>'Alt desc',
														 	 	'link'=>'http://coderdojowa.org.au/','target'=>'_blank','name'=>'CoderDojo', 'role'=>'WA'],

															 ['src'=>'../wp-content/themes/cd-theme/static/img/regional-bodies/coderdojo-turkiye.png', 'alt'=>'Alt desc 2',
												        'link'=>'http://coderdojoturkiye.com/', 'target'=>'_blank','name'=>'CoderDojo', 'role'=>'Turkiye'],

                                ['src'=>'../wp-content/themes/cd-theme/static/img/regional-bodies/nsw.png', 'alt'=>'Alt desc 2',
                                  'link'=>'http://coderdojonsw.org.au/foundation/', 'target'=>'_blank','name'=>'CoderDojo','role'=>'New South Wales'],


                               ['src'=>'../wp-content/themes/cd-theme/static/img/regional-bodies/coderdojo.png', 'alt'=>'Alt desc 2',
 														    'link'=>'https://www.coderdojobelgium.be/', 'target'=>'_blank','name'=>'CoderDojo','role'=>'Belgium'],

                                ['src'=>'../wp-content/themes/cd-theme/static/img/regional-bodies/bulgaria.png', 'alt'=>'Alt desc 2',
                                 'link'=>'https://www.coderdojobulgaria.com/', 'target'=>'_blank','name'=>'CoderDojo','role'=>'Bulgaria'],

                                ['src'=>'../wp-content/themes/cd-theme/static/img/regional-bodies/coderdojo.png', 'alt'=>'Alt desc 2',
  														    'link'=>'https://twitter.com/coderdojocolomb', 'target'=>'_blank','name'=>'CoderDojo','role'=>'Colombia']
													];

Timber::render('page-regional-bodies.twig', $context);
