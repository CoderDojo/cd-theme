<?php


$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$context['broken_content'] = explode("<!--more-->", $post->content);

$context['funderImages'] = [ ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/o-sullivan-foundation.jpg'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/salesforce-foundation.png'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/microsoft.png'],

                      ];

$context['partnerImages'] = [ ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/a-l-goodbody.png'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/dogpatch-labs.png'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/chq.png'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/deloitte.png'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/zendesk.png'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/logmein.png'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/amazon-web-services.png'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/nearform.png'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/15five.png'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/new-relic.png'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/websummit.png'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/nearform.png'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/15five.png'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/new-relic.png'],

                            ];

$context['gridtitle'] = "Categories";
$context['Funders'] = "Funders";
$context['Partners'] = "Partners";

Timber::render('page-supporters.twig', $context);
