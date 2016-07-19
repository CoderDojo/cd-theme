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

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/intercom.png'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/radix.png'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/workshape.png'],

                            ];

$context['allianceImages'] = [ ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/ashoka.png'],

                              ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/appsforgood.png'],

                              ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/code-club.png'],

                              ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/devoxx.png'],

                              ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/freeformers.png'],

                              ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/young-rewired-state.png'],

                              ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/idea.png'],

                              ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/camara.png'],

                              ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/eskills.png'],

                              ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/all-you-need-is-code.png'],

                              ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/code-week.png'],

                              ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/code-for-life.png'],

                              ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/tech-point.png'],

                              ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/fogarty.png']

                            ];

$context['supporterImages'] = [ ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/all-can-code.png'],

                                ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/auto-desk.png'],

                                ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/digi-web.png'],

                                ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/code-anywhere.png'],

                                ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/light-bot.png'],

                                ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/raspberry-pi.png'],

                                ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/trinket.png']

                            ];


$context['gridtitle'] = "Categories";
$context['Funders'] = "Meet Our Funders";
$context['Partners'] = "Meet Our Partners";
$context['Alliance'] = "Meet Our Alliance Partners";
$context['Supporters'] = "Meet Our Supporters";


Timber::render('page-supporters.twig', $context);
