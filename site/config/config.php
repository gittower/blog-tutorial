<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'put your license key here');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/



/*
---------------------------------------
Debug Mode
---------------------------------------
*/
c::set('debug', true);


/*
---------------------------------------
Caching
---------------------------------------
*/
c::set('cache', false);
c::set('cache.ignore', array('search', 'newsletter'));  /* example values */


/*
---------------------------------------
Miscellaneous
---------------------------------------
*/
// character length of teaser texts
c::set('teaser.newest', 200);
c::set('teaser.recent', 150);
