281Production
=============

The weblog of 281Production.com

Before its tag 1.0, all the code is backward-commited due to no GIT was in use during development. After tag 1.0, or say days after 2013-09-05, the code is version controlled normally (aka git is available).

setup
=====
change 'wp-config.php' for your host, database name, user name, etc for your situation.

"/sql script/" contains some sql script for setup database. Script must be imported because it contains plugin generated data, which cannot be set during WordPress setup process.

sql scripts begin with 'weblog_' are originally used on 218production.com that the project is located "/weblog/" and db name 'weblog'.

I made some change after that. sql scripts begin with 'wordpress_281production_' are which I fork the 'weblog_' scripts, in order to setup the system on a local hosting.

In order to make the LHS menu functional correctly (aka a Menu Item is a Page in WordPress, which a its name is same as the category of posts.), a modified "ListPostsInCategoryThatHasSameNameAsPage.php" script, which located in /wp-content/themes/picture-perfect/, is in use. Diff it to see what I have done. The function of the LHS menu relies on 2 things: the "ListPostsInCategoryThatHasSameNameAsPage.php" script and URL_rewrite in .htaccess. Moving from site to site need to rewrite the rules in .htaccess. It can be done automacically vhen vising the Permalink setting in WordPress.

Reference
=========
For the setup of WordPress Facebook plugin, visit https://developers.facebook.com/apps/353526814777502/summary?web_hosting=true for instruction.

In order to make Carousel without Jetpack works (for image slide-show), gallery must be created (aka Gallery shortcode), rather inserting images in a post, visit How to Create an Image Gallery in WordPress: http://www.wpbeginner.com/beginners-guide/how-to-create-an-image-gallery-in-wordpress/ for instruction.

Last update: 2013-09-08 01:27, Hong Kong
