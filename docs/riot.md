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


Managing the menus
------------------

The main navigation menu is completely handled via the wordpress menu system.
Just create a menu called `main` and start adding links.


Getting specific pages
----------------------

There are specific pages that need to be added (in wordpress) that have their own twig view (/views), these (can) include other twig files.

To be able to see these pages, create the following pages within the Wordpress Admin:

```
Page                  slug name
----                  ---------
About                 about
Attend a Dojo         attend-a-dojo
Badges                badges
Start a Dojo          start-a-dojo
Volunteer             volunteer
What we do            what-we-do
Donate                donate
User Details          user-details
Register              register
Resources             resources
Foundation            foundation
Supporters            supporters
Community Committee   community-committee
Movement              movement
News                  news
```

> The menu does not support more than 7 pages.


Adding media within articles
------------------------

Using POD Admin you need to extend posts and add two new fields, with the following labels and filetypes:
* video (File / video / image)
* video-poster (File / video / image)
* article_desc (Text)

*Video* should accept video file types and be used to host the video directly.
 > Upload both an mp4, and a ogg file.

With the *Video-poster* item you should accept images and this will host the Video's poster (image shown before the video plays).

If neither of this fields are field in a horizontal rule is shown instead to show.

*article_desc* should be a required field and set to maximum thirty characters. It is used on the news page alongside the thumbnail of articles.
