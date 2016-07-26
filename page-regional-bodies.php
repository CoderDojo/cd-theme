<?php

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$context['broken_content'] = explode("<!--more-->", $post->content);

$context['regionalImages'] = [ ['src'=>'../wp-content/themes/cd-theme/static/img/regional-bodies/coderdojo-wa.png', 'alt'=>'Alt desc',
														 'link'=>'http://coderdojowa.org.au/','target'=>'_blank','name'=>'CoderDojo', 'role'=>'WA'],

														['src'=>'../wp-content/themes/cd-theme/static/img/regional-bodies/coderdojo-indiana.png', 'alt'=>'Alt desc 2',
														 'link'=>'http://www.techpointyouth.org/coderdojo/', 'target'=>'_self','name'=>'CoderDojo', 'role'=>'Indiana'],

													  ['src'=>'../wp-content/themes/cd-theme/static/img/regional-bodies/coderdojo-nl.png', 'alt'=>'Alt desc 2',
														 'link'=>'http://www.coderdojo.nl/', 'target'=>'_self','name'=>'CoderDojo', 'role'=>'Netherlands'],

														['src'=>'../wp-content/themes/cd-theme/static/img/regional-bodies/coderdojo-turkiye.png', 'alt'=>'Alt desc 2',
												     'link'=>'http://coderdojoturkiye.com/', 'target'=>'_self','name'=>'CoderDojo', 'role'=>'Turkiye'],

														['src'=>'../wp-content/themes/cd-theme/static/img/regional-bodies/coderdojo-japan.png', 'alt'=>'Alt desc 2',
												  	 'link'=>'http://www.coderdojo.jp/', 'target'=>'_self','name'=>'CoderDojo','role'=>'Japan'],

														['src'=>'../wp-content/themes/cd-theme/static/img/regional-bodies/coderdojo-committee.png', 'alt'=>'Alt desc 2',
														 'link'=>'cd-wordpress/community-committee/', 'target'=>'_self','name'=>'CoderDojo','role'=>'Community Commmittee']
													];
Timber::render('page-regional-bodies.twig', $context);
