<?php

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$context['broken_content'] = explode("<!--more-->", $post->content);

$context['community'] = [
  [
    'name'=>'Michael Madden',
    'dojo'=>'Galway and Athenry',
    'region'=>'Ireland','joined'=>'27/02/14'
  ], [
    'name'=>'Francis Reed',
    'dojo'=>'Dun Laoighre',
    'region'=>'Ireland',
    'joined'=>'27/02/14'
  ], [
    'name'=>'Shara Karasic',
    'dojo'=>'LA',
    'region'=>'USA West Coast',
    'joined'=>'27/02/14'
  ], [
    'name'=>'Greg Bulmash',
    'dojo'=>'Seattle',
    'region'=>'USA Pacific Northwest',
    'joined'=>'27/02/14'
  ], [
    'name'=>'David Welch',
    'dojo'=>'Iowa City',
    'region'=>'USA Central',
    'joined'=>'27/02/14'
  ], [
    'name'=>'Craig Steele',
    'dojo'=>'Glasgow',
    'region'=>'Scotland',
    'joined'=>'27/02/14'
  ], [
    'name'=>'Rob curran',
    'dojo'=>'Wilmslow',
    'region'=>'UK',
    'joined'=>'27/02/14'
  ], [
    'name'=>'Paul Browne',
    'dojo'=>'Leiden',
    'region'=>'The Netherlands',
    'joined'=>'27/02/14'
  ], [
    'name'=>'Patrick Bosteels',
    'dojo'=>'Istanbul',
    'region'=>'Turkey',
    'joined'=>'27/02/14'
  ], [
    'name'=>'Radu Ticio',
    'dojo'=>'Timisoara',
    'region'=>'Romania',
    'joined'=>'27/02/14'
  ], [
    'name'=>'Carmelo Presicce',
    'dojo'=>'Bologna',
    'region'=>'Italy',
    'joined'=>'27/02/14'
  ], [
    'name'=>'John Harrington',
    'dojo'=>'CMX',
    'region'=>'Ireland',
    'joined'=>'29/04/14'
  ], [
    'name'=>'Yohei Yasukawa',
    'dojo'=>'Tokyo',
    'region'=>'Japan',
    'joined'=>'22/09/14'
  ], [
    'name'=>'David Campy',
    'dojo'=>'South Africa',
    'region'=>'South Africa',
    'joined'=>'22/09/15'
  ], [
    'name'=>'Frank and Joe Westgard',
    'dojo'=>'Washington DC',
    'region'=>'USA',
    'joined'=>'22/09/14'
  ], [
    'name'=>'Martine Temples and/or Bettina Stylerts',
    'dojo'=>'CoderDojo Belgium',
    'region'=>'Belgium',
    'joined'=>'22/09/14'
  ]
];

Timber::render('page-community-committee.twig', $context);
