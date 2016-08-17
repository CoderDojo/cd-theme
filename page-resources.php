<?php


$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$context['broken_content'] = explode("<!--more-->", $post->content);

$context['resourcesImages'] = [   ['src'=>'../wp-content/themes/cd-theme/static/img/resources/scratch.png', 'id'=>'1', 'name'=>'Scratch','link'=>'http://kata.coderdojo.com/wiki/Scratch_Path'],

                        [ 'src'=>'../wp-content/themes/cd-theme/static/img/resources/html.png', 'id'=>'2', 'name'=>'HTML & CSS' ,'link'=>'http://kata.coderdojo.com/wiki/HTML_Path'],

                        ['src'=>'../wp-content/themes/cd-theme/static/img/resources/js.png','id'=>'3','name'=>'JavaScript', 'link'=>'http://kata.coderdojo.com/wiki/JavaScript_Path'],

                        ['src'=>'../wp-content/themes/cd-theme/static/img/resources/python.png', 'id'=>'4', 'name'=>'Python' , 'link'=>'http://kata.coderdojo.com/wiki/Python_Path'],

                        [ 'src'=>'../wp-content/themes/cd-theme/static/img/resources/ruby.png', 'id'=>'5', 'name'=>'Ruby', 'link'=>'http://kata.coderdojo.com/wiki/Ruby_Path'],

                        ['src'=>'../wp-content/themes/cd-theme/static/img/resources/php.png','id'=>'6','name'=>'PHP', 'link'=>'http://kata.coderdojo.com/wiki/PHP_Path'],

                        ['src'=>'../wp-content/themes/cd-theme/static/img/resources/raspberrypi.png', 'id'=>'7', 'name'=>'Raspberry Pi', 'link'=>'http://kata.coderdojo.com/wiki/Raspberry_Pi'],

                        [ 'src'=>'../wp-content/themes/cd-theme/static/img/resources/arduino.png', 'id'=>'8','name'=>'Arduino', 'link'=>'http://kata.coderdojo.com/wiki/Arduino'],

                        ['src'=>'../wp-content/themes/cd-theme/static/img/resources/mobile.png','id'=>'9','name'=>'Mobile', 'link'=>'http://kata.coderdojo.com/wiki/Mobile_Apps_Path'],

                        ['src'=>'../wp-content/themes/cd-theme/static/img/resources/champion.png', 'id'=>'10', 'name'=>'Resources For Champions', 'link'=>'http://kata.coderdojo.com/wiki/Organising_a_Dojo'],

                        [ 'src'=>'../wp-content/themes/cd-theme/static/img/resources/mentors.png', 'id'=>'11','name'=>'Resources For Mentors', 'link'=>'http://kata.coderdojo.com/wiki/Mentors_and_Volunteers'],

                        ['src'=>'../wp-content/themes/cd-theme/static/img/resources/parent.png','id'=>'12','name'=>'Resources For Parents', 'link'=>'http://kata.coderdojo.com/wiki/Ninja_Zone'],
                      ];

$context['Resources'] = "Resources";

$context['gridtitle'] = "Categories";

Timber::render('page-resources.twig', $context);
