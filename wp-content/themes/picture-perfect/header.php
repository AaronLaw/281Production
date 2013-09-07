<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title><?php 
	 	$replacethese = array('[',']');
		$replacewith = array(' ',' ');
		echo str_replace($replacethese, $replacewith, get_bloginfo('title')); ?>

	
	
	<?php if ( !(is_404()) && (is_single()) or (is_page()) or (is_archive()) ) { ?> &raquo; <?php wp_title(''); ?><?php } ?></title>

	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
	
	
<?php $url = get_stylesheet_directory_uri()?>
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $url; ?>/imagemenu/imageMenu.css">
<script type="text/javascript" src="<?php echo $url; ?>/imagemenu/mootools.js"></script>
<script type="text/javascript" src="<?php echo $url; ?>/imagemenu/imageMenu.js"></script>


<script type="text/javascript">
			window.addEvent('domready', function(){
				var myMenu = new ImageMenu($$('#imageMenu a'),{openWidth:300, border:2, onOpen:function(e,i){location=(e);}});
			});
</script>		
</head>

<body>

<div id="wrapper">

<div id="welcomeheading">
<h1><a href="<?php bloginfo('url'); ?>/">

<?php 	$replacethese = array('[',']');
		$replacewith = array('<span id="middleword">','</span>');
		?><?php //echo str_replace($replacethese, $replacewith, get_bloginfo('title')); // Logo only ?>
		<img src="/weblog/wp-content/themes/picture-perfect/img/281production_logo_120x110.png" /> <!--2013-08-12: add a logo-->
</a></h1>
		<div id="description"><?php bloginfo('description'); ?></div>
</div>
	
	
	

<div id="imageMenu">
<ul>
<!--		
// remove it for hardcode the links in Menu.	
<li class="page_item bk1"><a href="<?php echo site_url('pre-wedding'); ?>" title="Pre Wedding">Pre Wedding</a></li>
<li class="page_item bk2"><a href="<?php echo site_url('about-281'); ?>" title="About 281">About 281</a></li>
<li class="page_item bk3"><a href="<?php echo site_url('wedding-day'); ?>" title="Wedding Day">Wedding Day</a></li>
<li class="page_item bk4"><a href="<?php echo site_url('pregnancy'); ?>" title="Pregnancy">Pregnancy</a></li>
<li class="page_item bk5"><a href="<?php echo site_url('portrait'); ?>" title="Portrait">Portrait</a></li>
<li class="page_item bk6"><a href="<?php echo site_url('model'); ?>" title="Landscape">Landscape</a></li>
<li class="page_item bk7"><a href="<?php echo site_url('family'); ?>" title="Family">Family</a></li>
-->
				<?php slider_menuparse(wp_list_pages('sort_column=ID&depth=1&number=7&title_li=&echo=0')); // comment out becoz hardcode ?>

			</ul>
</div>  <!-- END imagemenu -->
		

<div id="imageMenuIcon">
	<!--<a href="<?php echo site_url('/'); ?>"  title="Home"><img src="<?php echo $url; ?>/img/icon_home.jpg" /></a>-->
	<a href="<?php echo('http://vimeo.com/281production/'); ?>"  title="Video" target="_blank"><img src="<?php echo $url; ?>/img/icon_video.png" /></a>
	<a href="<?php echo('http://www.facebook.com/281photo'); ?>"  title="281 Photo on Facebook" target="_blank"><img src="<?php echo $url; ?>/img/icon_facebook.png" /></a>
	<a href="<?php echo site_url('address'); ?>"  title="Address"><img src="<?php echo $url; ?>/img/icon_map.png" /></a>
	<a href="<?php echo site_url('about-281'); ?>"  title="281 阿一"><img src="<?php echo $url; ?>/img/icon_281sky.png" /></a>
	<a href="<?php echo site_url('hobby'); ?>"  title="Hobby"><img src="<?php echo $url; ?>/img/icon_hobby.png" /></a>
</div>	

	

		

		


		
