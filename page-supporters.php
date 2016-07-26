<?php


$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$context['broken_content'] = explode("<!--more-->", $post->content);

$context['funderImages'] = [ ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/salesforce-foundation.png' ,
                              'jobDescription'=>'Our partnership with Salesforce centres around their pioneering 1:1:1 model,
                               we will be using their software to manage communications with global Dojos, scaling CoderDojo through engaging their volunteers,
                               and using the grant to develop greater resources for the community.',
                              'id'=>'1','linkedin'=>'https://www.linkedin.com/company/salesforce',
                              'twitter'=>'https://twitter.com/salesforce'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/o-sullivan-foundation.jpg' ,
                                     'jobDescription'=>'Setup and run by Sean O’Sullivan, we have worked closely with the O’Sullivan Foundation since he joined the Foundation as a founding donor.
                                     The O’Sullivan Foundation makes a multi annual commitment to the Foundation to enable our work.
                                     Sean O’Sullivan is also an active board member and director of the CoderDojo Foundation.',
                                     'id'=>'2', 'linkedin'=>'https://www.linkedin.com/in/sean-o-sullivan-15388a','twitter'=>'https://twitter.com/sean_sosv'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/microsoft.png',
                                     'jobDescription'=>'We are working with Microsoft to support and scale CoderDojo across Europe. In 2016 Microsoft gave additional suppport to scale CoderDojo in 10 specific countries in Central and Eastern Europe.',
                                     'id'=>'3', 'linkedin'=>'https://www.linkedin.com/company/microsoft','twitter'=>'https://twitter.com/Microsoft'],

                      ];

$context['partnerImages'] = [ ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/a-l-goodbody.png', 'jobDescription'=>'A&L Goodbody have been providing pro bono legal services to the CoderDojo Foundation since July 2013.',
                               'id'=>'4','linkedin'=>'https://www.linkedin.com/company/a&l-goodbody',
                               'twitter'=>'https://twitter.com/algoodbody'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/dogpatch-labs.png', 'jobDescription'=>'Dogpatch Labs provide us with office and storage space for the CoderDojo Foundation team.',
                                     'id'=>'5','linkedin'=>'https://www.linkedin.com/company/dogpatch-labs',
                                     'twitter'=>'https://twitter.com/dogpatchlabs'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/chq.png', 'jobDescription'=>'CHQ hosts & retains the CoderDojo team in Dogapatch Labs.',
                                     'id'=>'6','linkedin'=>'https://www.linkedin.com/company/the-chq-building',
                                     'twitter'=>'https://twitter.com/chqdublin'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/deloitte.png', 'jobDescription'=>'Deloitte complete the annual audit of CoderDojo Foundation financial accounts pro bono.',
                                     'id'=>'7','linkedin'=>'https://www.linkedin.com/company/deloitte',
                                     'twitter'=>'https://twitter.com/deloitteireland'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/zendesk.png', 'jobDescription'=>'Zendesk donated web-based customer service software to help us communicate with our global community.',
                                     'id'=>'8','linkedin'=>'https://www.linkedin.com/company/zendesk',
                                     'twitter'=>'https://twitter.com/Zendesk'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/logmein.png', 'jobDescription'=>'LogMeIn donated web conferencing licenses to enable the team to communicate with our global community.',
                                     'id'=>'9','linkedin'=>'https://www.linkedin.com/company/logmein',
                                     'twitter'=>'https://twitter.com/logmein'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/amazon-web-services.png', 'jobDescription'=>'Amazon Web Services donated a $5000 worth of credit for hosting services for Zen the Community Platform',
                                     'id'=>'9','linkedin'=>'https://www.linkedin.com/company/amazon-web-services',
                                     'twitter'=>'https://twitter.com/awscloud'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/nearform.png', 'jobDescription'=>'Nearform is a development company who orignally developed Zen the community platform, offered reduced rates on development and support. They also run a Dojo!',
                                     'id'=>'10','linkedin'=>'https://www.linkedin.com/company/nearform',
                                     'twitter'=>'https://twitter.com/nearForm'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/15five.png', 'jobDescription'=>'15Five is providing team engagement software for the CoderDojo Foundation aligning with their core value to ‘Always be Learning and Growing’.',
                                     'id'=>'11','linkedin'=>'https://www.linkedin.com/company/15five',
                                     'twitter'=>'https://twitter.com/15Five'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/new-relic.png', 'jobDescription'=>'Nearform is development company who orignally developed Zen the community platform, offered reduced rates on development and support. They also run a Dojo!',
                                     'id'=>'12','linkedin'=>'https://www.linkedin.com/company/new-relic-inc-/',
                                     'twitter'=>'https://twitter.com/newrelic'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/websummit.png', 'jobDescription'=>'Nearform is development company who orignally developed Zen the community platform, offered reduced rates on development and support. They also run a Dojo!',
                                     'id'=>'13','linkedin'=>'https://www.linkedin.com/company/web-summit',
                                     'twitter'=>'https://twitter.com/WebSummitHQ'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/intercom.png', 'jobDescription'=>'Nearform is development company who orignally developed Zen the community platform, offered reduced rates on development and support. They also run a Dojo!',
                                     'id'=>'14','linkedin'=>'https://www.linkedin.com/company/intercom',
                                     'twitter'=>'https://twitter.com/intercom'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/radix.png', 'jobDescription'=>'Nearform is development company who orignally developed Zen the community platform, offered reduced rates on development and support. They also run a Dojo!',
                                     'id'=>'15','linkedin'=>'https://www.linkedin.com/company/radix',
                                     'twitter'=>'https://twitter.com/radixregistry'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/workshape.png', 'jobDescription'=>'Nearform is development company who orignally developed Zen the community platform, offered reduced rates on development and support. They also run a Dojo!',
                                     'id'=>'16','linkedin'=>'https://twitter.com/workshape_io',
                                     'twitter'=>'https://www.linkedin.com/company/workshape-io']

                            ];

$context['allianceImages'] = [ ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/ashoka.png', 'jobDescription'=>'Nearform is development company who orignally developed Zen the community platform, offered reduced rates on development and support. They also run a Dojo!',
        'id'=>'9','linkedin'=>'https://www.linkedin.com/company/ashoka',
        'twitter'=>'https://twitter.com/ashokaireland'],

                              ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/appsforgood.png', 'jobDescription'=>'Nearform is development company who orignally developed Zen the community platform, offered reduced rates on development and support. They also run a Dojo!',
                                      'id'=>'9','linkedin'=>'https://www.linkedin.com/company/cdi-apps-for-good',
                                      'twitter'=>'https://twitter.com/AppsforGoodCDI'],

                              ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/code-club.png', 'jobDescription'=>'Nearform is development company who orignally developed Zen the community platform, offered reduced rates on development and support. They also run a Dojo!',
                                      'id'=>'9','linkedin'=>'https://www.linkedin.com/company/code-club',
                                      'twitter'=>'https://twitter.com/CodeClub'],

                              ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/devoxx.png', 'jobDescription'=>'Nearform is development company who orignally developed Zen the community platform, offered reduced rates on development and support. They also run a Dojo!',
                                      'id'=>'9','linkedin'=>'https://www.linkedin.com/company/the-java-community---devoxx',
                                      'twitter'=>'https://twitter.com/devoxx'],

                              ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/freeformers.png', 'jobDescription'=>'Nearform is development company who orignally developed Zen the community platform, offered reduced rates on development and support. They also run a Dojo!',
                                      'id'=>'9','linkedin'=>'https://www.linkedin.com/company/freeformers',
                                      'twitter'=>'https://twitter.com/freeformers_uk'],

                              ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/young-rewired-state.png', 'jobDescription'=>'Nearform is development company who orignally developed Zen the community platform, offered reduced rates on development and support. They also run a Dojo!',
                                      'id'=>'9','linkedin'=>'https://www.linkedin.com/company/nearform',
                                      'twitter'=>'https://twitter.com/youngrewired'],

                              ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/idea.png', 'jobDescription'=>'Nearform is development company who orignally developed Zen the community platform, offered reduced rates on development and support. They also run a Dojo!',
                                      'id'=>'9','linkedin'=>'https://www.linkedin.com/in/thedukeofyork',
                                      'twitter'=>'https://twitter.com/idea_award'],

                              ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/camara.png', 'jobDescription'=>'Nearform is development company who orignally developed Zen the community platform, offered reduced rates on development and support. They also run a Dojo!',
                                      'id'=>'9','linkedin'=>'https://www.linkedin.com/company/camara-education-ltd-?trk=top_nav_home',
                                      'twitter'=>'https://twitter.com/CamaraEducation'],

                              ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/eskills.png', 'jobDescription'=>'Nearform is development company who orignally developed Zen the community platform, offered reduced rates on development and support. They also run a Dojo!',
                                      'id'=>'9','linkedin'=>'https://www.linkedin.com/groups/5078365/profile',
                                      'twitter'=>'https://twitter.com/eskills4jobs'],

                              ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/all-you-need-is-code.png', 'jobDescription'=>'Nearform is development company who orignally developed Zen the community platform, offered reduced rates on development and support. They also run a Dojo!',
                                      'id'=>'9','linkedin'=>'https://www.linkedin.com/company/european-commission?trk=top_nav_home',
                                      'twitter'=>'https://twitter.com/NeedCodeEU'],

                              ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/code-week.png', 'jobDescription'=>'Nearform is development company who orignally developed Zen the community platform, offered reduced rates on development and support. They also run a Dojo!',
                                      'id'=>'9','linkedin'=>'https://www.linkedin.com/company/european-commission?trk=top_nav_home',
                                      'twitter'=>'https://twitter.com/codeweekEU'],

                              ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/code-for-life.png', 'jobDescription'=>'Nearform is development company who orignally developed Zen the community platform, offered reduced rates on development and support. They also run a Dojo!',
                                      'id'=>'9','linkedin'=>'https://twitter.com/codeweekEU',
                                      'twitter'=>'https://twitter.com/codeforlifeuk'],

                              ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/tech-point.png', 'jobDescription'=>'Nearform is development company who orignally developed Zen the community platform, offered reduced rates on development and support. They also run a Dojo!',
                                      'id'=>'9','linkedin'=>'https://www.linkedin.com/company/nearform',
                                      'twitter'=>'https://twitter.com/nearForm'],

                              ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/fogarty.png', 'jobDescription'=>'Nearform is development company who orignally developed Zen the community platform, offered reduced rates on development and support. They also run a Dojo!',
                                      'id'=>'9','linkedin'=>'https://www.linkedin.com/company/nearform',
                                      'twitter'=>'https://twitter.com/nearForm']

                            ];

$context['supporterImages'] = [ ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/all-can-code.png', 'jobDescription'=>'Nearform is development company who orignally developed Zen the community platform, offered reduced rates on development and support. They also run a Dojo!',
                                        'id'=>'9','linkedin'=>'https://www.linkedin.com/company/nearform',
                                        'twitter'=>'https://twitter.com/nearForm'],

                                ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/auto-desk.png', 'jobDescription'=>'Nearform is development company who orignally developed Zen the community platform, offered reduced rates on development and support. They also run a Dojo!',
                                        'id'=>'9','linkedin'=>'https://www.linkedin.com/company/nearform',
                                        'twitter'=>'https://twitter.com/nearForm'],

                                ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/digi-web.png', 'jobDescription'=>'Nearform is development company who orignally developed Zen the community platform, offered reduced rates on development and support. They also run a Dojo!',
                                        'id'=>'9','linkedin'=>'https://www.linkedin.com/company/nearform',
                                        'twitter'=>'https://twitter.com/nearForm'],

                                ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/code-anywhere.png', 'jobDescription'=>'Nearform is development company who orignally developed Zen the community platform, offered reduced rates on development and support. They also run a Dojo!',
                                        'id'=>'9','linkedin'=>'https://www.linkedin.com/company/nearform',
                                        'twitter'=>'https://twitter.com/nearForm'],

                                ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/light-bot.png', 'jobDescription'=>'Nearform is development company who orignally developed Zen the community platform, offered reduced rates on development and support. They also run a Dojo!',
                                        'id'=>'9','linkedin'=>'https://www.linkedin.com/company/nearform',
                                        'twitter'=>'https://twitter.com/nearForm'],

                                ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/raspberry-pi.png', 'jobDescription'=>'Nearform is development company who orignally developed Zen the community platform, offered reduced rates on development and support. They also run a Dojo!',
                                        'id'=>'9','linkedin'=>'https://www.linkedin.com/company/nearform',
                                        'twitter'=>'https://twitter.com/nearForm'],

                                ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/trinket.png', 'jobDescription'=>'Nearform is development company who orignally developed Zen the community platform, offered reduced rates on development and support. They also run a Dojo!',
                                        'id'=>'9','linkedin'=>'https://www.linkedin.com/company/nearform',
                                        'twitter'=>'https://twitter.com/nearForm']

                            ];

$context['Funders'] = "Meet Our Funders";
$context['Partners'] = "Meet Our Partners";
$context['Alliance'] = "Meet Our Alliance Partners";
$context['Supporters'] = "Meet Our Supporters";


Timber::render('page-supporters.twig', $context);
