RIOT SUPPORTS CODERDOJO
=======================

Required plugins
----------------

* pods
* timber
* simple-facebook-open-graph-tags

Configure pods
--------------

Pods has to be configured to extend Post / Page with certain custom fields that
are used by the Company Header and People twig templates.

For company header:

* Company Name (company_name, text)
* Company Logo (company_logo, image)
* Company Bio (company_bio, WYSISYG)
* Company URL (company_url, URL)

For people:

* Person Name (people_name, text)
* Person Avatar (people_image, image)
* Person Title (people_tag, text)
* Person Bio (people_bio, WYSISYG)

Configure Facebook OG
---------------------

* https://www.dropbox.com/s/0glsw61bvmf5qqx/Screenshot%202016-05-26%2021.59.41.png?dl=0
* https://www.dropbox.com/s/qdg6embf3hqu60h/Screenshot%202016-05-26%2022.00.29.png?dl=0
* https://www.dropbox.com/s/tv1vp46m148ipgr/Screenshot%202016-05-26%2022.00.49.png?dl=0
* https://www.dropbox.com/s/y4wu1fx3v25s3x1/Screenshot%202016-05-26%2022.01.05.png?dl=0
* https://www.dropbox.com/s/t4l2ettjm3fs0ff/Screenshot%202016-05-26%2022.01.22.png?dl=0

Using the CTA twig template
---------------------------

```
{% include 'cta.twig' with {'buttontext': 'Call to Action', 'target': 'http://www.google.com', 'class': 'foo' } %}
```

Using the Company Header twig template
--------------------------------------

Create a post and fill in the Company related custom fields created in pods.

Using the People twig template
------------------------------

Create a post and fill in the People related custom fields created in pods.
