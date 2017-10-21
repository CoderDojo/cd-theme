# CD-theme

See [docs/riot.md](/docs/riot.md) for specific instructions around
customisations in this Theme

## Installing the Theme

1. Download the zip for this theme (or clone it) and move it to `wp-content/themes`
  in your WordPress installation.
1. Run `composer install` to set up the theme and plugins
1. Activate the theme in Appearance >  Themes.
1. Activate all the plugins
1. Do your thing! And read [the docs](https://github.com/jarednova/timber/wiki).

## What's here

`static/` is where you can keep your static front-end scripts, styles, or images.
In other words, your Sass files, JS files, fonts, and SVGs would live here.

`templates/` contains all of your Twig templates. These pretty much correspond 1
to 1 with the PHP files that respond to the WordPress template hierarchy. At the
end of each PHP template, you'll notice a `Timber::render()` function whose first
parameter is the Twig file where that data (or `$context`) will be used.
Just an FYI.

`bin/` and `tests/` ... basically don't worry about (or remove) these unless you
know what they are and want to.

## Development

Development is done with docker. To start the wordpress run
`docker-compose up -d` and open `localhost:8008`

## Other Resources

The [main Timber Wiki](https://github.com/jarednova/timber/wiki) is super great,
so reference those often. Also, check out these articles and projects for more info:

* [This branch](https://github.com/laras126/timber-starter-theme/tree/tackle-box)
  of the starter theme has some more example code with ACF and a slightly
  different set up.
* [Twig for Timber Cheatsheet](http://notlaura.com/the-twig-for-timber-cheatsheet/)
* [Timber and Twig Reignited My Love for WordPress](https://css-tricks.com/timber-and-twig-reignited-my-love-for-wordpress/)
  on CSS-Tricks
* [A real live Timber theme](https://github.com/laras126/yuling-theme).
* [Timber Video Tutorials](https://github.com/jarednova/timber/wiki/Video-Tutorials)
  and [an incomplete set of screencasts](https://www.youtube.com/playlist?list=PLuIlodXmVQ6pkqWyR6mtQ5gQZ6BrnuFx-)
  for building a Timber theme from scratch.
