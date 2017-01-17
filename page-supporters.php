<?php


$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$context['broken_content'] = explode("<!--more-->", $post->content);

$context['funderImages'] = [ ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/salesforce-foundation.png', 'name'=>'Salesforce Foundation',
                              'jobDescription'=>'Our partnership with Salesforce centres around their pioneering 1:1:1 model,
                               we will be using their software to manage communications with global Dojos, scaling CoderDojo through engaging their volunteers,
                               and using the grant to develop greater resources for the community.',
                              'id'=>'1','linkedin'=>'https://www.linkedin.com/company/salesforce',
                              'twitter'=>'https://twitter.com/salesforce'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/o-sullivan-foundation.jpg' , 'name'=>'O’Sullivan Foundation',
                                     'jobDescription'=>'Setup and run by Sean O’Sullivan, we have worked closely with the O’Sullivan Foundation since he joined the Foundation as a founding donor.
                                     The O’Sullivan Foundation makes a multi annual commitment to the Foundation to enable our work.
                                     Sean O’Sullivan is also an active board member and director of the CoderDojo Foundation.',
                                     'id'=>'2', 'linkedin'=>'https://www.linkedin.com/in/sean-o-sullivan-15388a','twitter'=>'https://twitter.com/sean_sosv'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/microsoft.png', 'name'=>'Microsoft',
                                     'jobDescription'=>'We are working with Microsoft to support and scale CoderDojo across Europe. In 2016 Microsoft gave additional suppport to scale CoderDojo in 10 specific countries in Central and Eastern Europe.',
                                     'id'=>'3', 'linkedin'=>'https://www.linkedin.com/company/microsoft','twitter'=>'https://twitter.com/Microsoft'],

                      ];

$context['partnerImages'] = [ ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/a-l-goodbody.png', 'name'=>'A&L Goodbody', 'jobDescription'=>'A&L Goodbody have been providing pro bono legal services to the CoderDojo Foundation since July 2013.',
                               'id'=>'4','linkedin'=>'https://www.linkedin.com/company/a&l-goodbody',
                               'twitter'=>'https://twitter.com/algoodbody'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/dogpatch-labs.png', 'name'=>'Dogpatch Labs', 'jobDescription'=>'Dogpatch Labs provide us with office and storage space for the CoderDojo Foundation team.',
                                     'id'=>'5','linkedin'=>'https://www.linkedin.com/company/dogpatch-labs',
                                     'twitter'=>'https://twitter.com/dogpatchlabs'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/chq.png', 'name'=>'CHQ Building', 'jobDescription'=>'CHQ hosts & retains the CoderDojo team in Dogapatch Labs.',
                                     'id'=>'6','linkedin'=>'https://www.linkedin.com/company/the-chq-building',
                                     'twitter'=>'https://twitter.com/chqdublin'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/deloitte.png', 'name'=>'Deloitte', 'jobDescription'=>'Deloitte complete the annual audit of CoderDojo Foundation financial accounts pro bono.',
                                     'id'=>'7','linkedin'=>'https://www.linkedin.com/company/deloitte',
                                     'twitter'=>'https://twitter.com/deloitteireland'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/bank-of-ireland.png', 'name'=>'Bank of Ireland', 'jobDescription'=>'Bank of Ireland are growth partners across the island of Ireland, they are committed to supporting and starting Dojos around the country through their branch network',
                                     'id'=>'8','linkedin'=>'https://www.linkedin.com/company/bank-of-ireland',
                                     'twitter'=>'https://twitter.com/bankofireland'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/zendesk.png', 'name'=>'Zendesk', 'jobDescription'=>'Zendesk donated web-based customer service software to help us communicate with our global community.',
                                     'id'=>'9','linkedin'=>'https://www.linkedin.com/company/zendesk',
                                     'twitter'=>'https://twitter.com/Zendesk'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/logmein.png', 'name'=>'LogMeIn', 'jobDescription'=>'LogMeIn donated web conferencing licenses to enable the team to communicate with our global community.',
                                     'id'=>'10','linkedin'=>'https://www.linkedin.com/company/logmein',
                                     'twitter'=>'https://twitter.com/logmein'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/15five.png', 'name'=>'15five', 'jobDescription'=>'15Five is providing team engagement software for the CoderDojo Foundation aligning with their core value to ‘Always be Learning and Growing’.',
                                     'id'=>'11','linkedin'=>'https://www.linkedin.com/company/15five',
                                     'twitter'=>'https://twitter.com/15Five'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/new-relic.png', 'name'=>'New Relic', 'jobDescription'=>'Provided services for monitoring website application performance',
                                     'id'=>'12','linkedin'=>'https://www.linkedin.com/company/new-relic-inc-/',
                                     'twitter'=>'https://twitter.com/newrelic'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/intercom.png', 'name'=>'Intercom', 'jobDescription'=>'Intercom has fundamentally changed how we interact with the community as it allows us to provide real time support to parents, mentors and Champions who are signed into Zen.',
                                     'id'=>'13','linkedin'=>'https://www.linkedin.com/company/intercom',
                                     'twitter'=>'https://twitter.com/intercom'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/edgescan.png', 'name'=>'EdgeScan', 'jobDescription'=>'EdgeScan have provided a security audit for the community platforms technical infrastructure.',
                                     'id'=>'14','linkedin'=>'https://www.linkedin.com/company/edgescan-com',
                                     'twitter'=>'https://twitter.com/edgescan'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/bullet.png', 'name'=>'Bullet', 'jobDescription'=>'Bullet provide payroll software to ensure this accounting for salaries and employee tax is managed in an accurate and efficient manner.',
                                     'id'=>'15','linkedin'=>'https://www.linkedin.com/company/bullet-hq',
                                     'twitter'=>'https://twitter.com/bullethq'],

                             ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/learnupon.png', 'name'=>'Learnupon', 'jobDescription'=>'LearnUpon provide a free  Learning Management system to CoderDojo to make it easy for our users to take and complete our E-Learning training.',
                                     'id'=>'16','linkedin'=>'https://www.linkedin.com/company/learnupon',
                                             'twitter'=>'https://twitter.com/learnupon'],

                            ];

$context['allianceImages'] = [

                              ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/ashoka.png', 'name'=>'Ashoka', 'jobDescription'=>'Global network of social entrepreneurs.',
                                      'id'=>'14','linkedin'=>'https://www.linkedin.com/company/ashoka',
                                      'twitter'=>'https://twitter.com/ashokaireland'],

                              ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/appsforgood.png', 'name'=>'Apps For Good', 'jobDescription'=>'An open-source technology education movement working with schools.',
                                      'id'=>'15','linkedin'=>'https://www.linkedin.com/company/cdi-apps-for-good',
                                      'twitter'=>'https://twitter.com/AppsforGoodCDI'],

                              ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/code-club.png', 'name'=>'Code Club', 'jobDescription'=>'Coding clubs for youth aged between 9 and 11.',
                                      'id'=>'16','linkedin'=>'https://www.linkedin.com/company/code-club',
                                      'twitter'=>'https://twitter.com/CodeClub'],

                              ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/devoxx.png', 'name'=>'Devoxx', 'jobDescription'=>'Organise events to expose young people to technology.',
                                      'id'=>'17','linkedin'=>'https://www.linkedin.com/company/the-java-community---devoxx',
                                      'twitter'=>'https://twitter.com/devoxx'],

                              ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/all-you-need-is-code.png', 'name'=>'All You Need Is Code', 'jobDescription'=>'The European Coding Initiative promotes coding and computer science across Europe, both within schools and beyond.',
                                      'id'=>'18','linkedin'=>'https://www.linkedin.com/company/european-commission?trk=top_nav_home',
                                      'twitter'=>'https://twitter.com/NeedCodeEU'],

                              ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/code-week.png', 'name'=>'Code Week', 'jobDescription'=>'Europe Code Week is a grass-root movement run by volunteers who promote coding in their countries as Code Week Ambassadors.',
                                      'id'=>'19','linkedin'=>'https://www.linkedin.com/company/european-commission?trk=top_nav_home',
                                      'twitter'=>'https://twitter.com/codeweekEU'],

                              ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/tech-point.png', 'name'=>'Tech Point Foundation', 'jobDescription'=>'TPF4Y are evangelising CoderDojo through their US2020 program with the intention of encouraging and supporting the growth of more Dojos within the State of Indiana.',
                                      'id'=>'20','linkedin'=>'https://twitter.com/techpointyouth',
                                      'twitter'=>'https://www.linkedin.com/company/techpoint-foundation'],

                              ['src'=>'../wp-content/themes/cd-theme/static/img/supporters/fogarty.png', 'name'=>'Fogarty Foundation', 'jobDescription'=>'As part of there intiatives the act as the regional body CoderDojo WA based in Western Australian where a network of community coding clubs (Dojos) build digital literacy skills amongst young people aged 7-17',
                                      'id'=>'21','linkedin'=>'https://www.linkedin.com/company/fogarty-foundation',
                                      'twitter'=>'https://twitter.com/anniefogartyff'],
                            ];

$context['Funders'] = "Meet Our Funders";
$context['Partners'] = "Meet Our Partners";
$context['Alliance'] = "Meet Our Alliance Partners";

Timber::render('page-supporters.twig', $context);
