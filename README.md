281Production
=============

The weblog of 281Production.com

Before its tag 1.0, all the code is backward-commited due to no GIT was in use during development. After tag 1.0, or say 2013-09-07, the code is version controlled normally (aka git is available).

setup
=====
change 'wp-config.php' for your host, db, etc.

"/sql script/" contains some sql script for setup db. Script must be imported because it contains plugin generated data, which cannot be set during WordPress setup process.

sql scripts begin with 'weblog' are originally used on 218production.com that this project is located "/weblog/" and db name 'weblog'.

I made some change after that. sql scripts begin with 'wordpress_281production' are which I edit the 'weblog' scripts to make, in order to setup the system on local hosting.

Reference
=========
For the setup of WordPress Facebook plugin, visit: https://developers.facebook.com/apps/353526814777502/summary?web_hosting=true
For creating gallery in Wordpress (in order to make Carousel without Jetpack works), visit How to Create an Image Gallery in WordPress: http://www.wpbeginner.com/beginners-guide/how-to-create-an-image-gallery-in-wordpress/
