<?php


$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$context['broken_content'] = explode("<!--more-->", $post->content);

$context['resourcesImages'] = [   ['src'=>'../wp-content/themes/cd-theme/static/img/resources/scratch.png', 'id'=>'1', 'name'=>'Scratch','link'=>'http://kata.coderdojo.com/wiki/Scratch_Path', 'description'=>'Scratch is a free programming language where you can create your own interactive stories, games, and animations', 'linkText'=>'View All Resources','iconColor'=>'#ffffff', 'backgroundColor'=>'#FAA31A'],
                                  ['src'=>'../wp-content/themes/cd-theme/static/img/resources/html.png', 'id'=>'2', 'name'=>'HTML & CSS','link'=>'http://kata.coderdojo.com/wiki/HTML_Path', 'description'=>'HTML (the Hypertext Markup Language) and CSS (Cascading Style Sheets) are two of the core technologies for building Web pages.', 'linkText'=>'View All Resources','iconColor'=>'#ffffff', 'backgroundColor'=>'#e74c17'],
                                  ['src'=>'../wp-content/themes/cd-theme/static/img/resources/js.png', 'id'=>'3', 'name'=>'JavaScript','link'=>'http://kata.coderdojo.com/wiki/JavaScript_Path', 'description'=>'JavaScript is a full-fledged  programming language that can provide dynamic interactivity on websites.', 'linkText'=>'View All Resources','iconColor'=>'#f8e100', 'backgroundColor'=>'#2e2e2c'],
                                  ['src'=>'../wp-content/themes/cd-theme/static/img/resources/python.png', 'id'=>'4', 'name'=>'Python','link'=>'http://kata.coderdojo.com/wiki/Python_Path', 'description'=>'Python is a widely used high-level programming language used for general-purpose programming', 'linkText'=>'View All Resources','iconColor'=>'#ffffff', 'backgroundColor'=>'#3370a3'],
                                  ['src'=>'../wp-content/themes/cd-theme/static/img/resources/ruby.png', 'id'=>'5', 'name'=>'Ruby','link'=>'http://kata.coderdojo.com/wiki/Ruby_Path', 'description'=>'A dynamic, open source programming language with a focus on simplicity and productivity.', 'linkText'=>'View All Resources','iconColor'=>'#ffffff', 'backgroundColor'=>'#9b0a0e'],
                                  ['src'=>'../wp-content/themes/cd-theme/static/img/resources/php.png', 'id'=>'6', 'name'=>'PHP','link'=>'http://kata.coderdojo.com/wiki/PHP_Path', 'description'=>'PHP is a widely-used open source scripting language that is especially suited for web development.', 'linkText'=>'View All Resources','iconColor'=>'#ffffff', 'backgroundColor'=>'#777ab6'],
                                  ['src'=>'../wp-content/themes/cd-theme/static/img/resources/raspberrypi.png', 'id'=>'7', 'name'=>'Raspberry Pi','link'=>'http://kata.coderdojo.com/wiki/Raspberry_Pi', 'description'=>'The Raspberry Pi is a tiny and affordable computer that you can use to learn programming through fun, practical projects.', 'linkText'=>'View All Resources','iconColor'=>'#ffffff', 'backgroundColor'=>'#b20b3c'],
                                  ['src'=>'../wp-content/themes/cd-theme/static/img/resources/arduino.png', 'id'=>'8', 'name'=>'Arduino','link'=>'http://kata.coderdojo.com/wiki/Arduino', 'description'=>'Arduino is an open-source electronics platform based on easy-to-use hardware and software that is inexpensive', 'linkText'=>'View All Resources','iconColor'=>'#ffffff', 'backgroundColor'=>'#008189'],
                                  ['src'=>'../wp-content/themes/cd-theme/static/img/resources/mobile.png', 'id'=>'9', 'name'=>'Mobile','link'=>'http://kata.coderdojo.com/wiki/App_Inventor', 'description'=>'Mobile is a term used to denote the act or process by which application software is developed for mobile devices.', 'linkText'=>'View All Resources','iconColor'=>'#ffffff', 'backgroundColor'=>'#93c23c']
                      ];

$context['Resources'] = "Resources";

$context['gridtitle'] = "Categories";

Timber::render('page-resources.twig', $context);
