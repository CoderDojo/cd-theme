<?php


$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$context['broken_content'] = explode("<!--more-->", $post->content);

$context['resourcesImages'] = [   ['src'=>'../wp-content/themes/cd-theme/static/img/resources/scratch.png', 'id'=>'1', 'name'=>'Scratch'],

                        [ 'src'=>'../wp-content/themes/cd-theme/static/img/resources/html.png', 'id'=>'2', 'name'=>'HTML & CSS'],

                        ['src'=>'../wp-content/themes/cd-theme/static/img/resources/js.png','id'=>'3','name'=>'JavaScript'],

                        ['src'=>'../wp-content/themes/cd-theme/static/img/resources/python.png', 'id'=>'4', 'name'=>'Python'],

                        [ 'src'=>'../wp-content/themes/cd-theme/static/img/resources/ruby.png', 'id'=>'5', 'name'=>'Ruby'],

                        ['src'=>'../wp-content/themes/cd-theme/static/img/resources/php.png','id'=>'6','name'=>'PHP'],

                        ['src'=>'../wp-content/themes/cd-theme/static/img/resources/raspberrypi.png', 'id'=>'7', 'name'=>'Raspberry Pi'],

                        [ 'src'=>'../wp-content/themes/cd-theme/static/img/resources/arduino.png', 'id'=>'8','name'=>'Arduino'],

                        ['src'=>'../wp-content/themes/cd-theme/static/img/resources/mobile.png','id'=>'9','name'=>'Mobile'],

                        ['src'=>'../wp-content/themes/cd-theme/static/img/resources/champion.png', 'id'=>'10', 'name'=>'Resources For Champions'],

                        [ 'src'=>'../wp-content/themes/cd-theme/static/img/resources/mentors.png', 'id'=>'11','name'=>'Resources For Mentors'],

                        ['src'=>'../wp-content/themes/cd-theme/static/img/resources/parent.png','id'=>'12','name'=>'Resources For Parents'],
                      ];

$context['Resources'] = "Resources";

$context['gridtitle'] = "Categories";

Timber::render('page-resources.twig', $context);
